<?php

namespace App\Controller;
use App\Entity\Rapport;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RapportType;
use App\Form\UpdateType;
use App\Repository\RapportRepository ; 
use Dompdf\Options  ;
use Dompdf\Dompdf ;
use BaconQrCode\Writer;
use Endroid\QrCode\QrCode;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use BaconQrCode\Renderer\Image\Png;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\BarChart;
class RemboursementController extends AbstractController
{
    #[Route('/basefront', name: 'basefront')]
    public function basefront(): Response
    {

        return $this->render('basefront.html.twig');
    }
    #[Route('/afficher', name: 'app_remboursement')]
    public function index(): Response
    {

        $rapports = $this->getDoctrine()->getManager()->getRepository(Rapport::class)->findAll() ; 
        return $this->render('remboursement/index.html.twig', ['b'=>$rapports]);
    }
    #[Route('/indexback', name: 'indexback')]
    public function indexfront(): Response
    {

        return $this->render('base.html.twig');
    }
    #[Route('/addrapportfront', name: 'addrapportfront')]
    public function addrapportfront(Request $request): Response
    {
       $rapport= new rapport() ;
       $rapport->setDateRapport(new \DateTime());

       $form=$this->createForm(RapportType::class,$rapport)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
         
$file = $form->get('file')->getData();
if($file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('files_directory'), $fileName);
        $rapport->setFile($fileName);
    }
        $em->persist($rapport) ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/afficherfront.html.twig',['f'=>$form->createView()]); 
    }
    #[Route('/admin', name: 'indexadmin')]
    public function indexadmin(): Response
    {

        return $this->render('admin/index.html.twig');
    }
    #[Route('/addrapport', name: 'addrapport')]
    public function addrapport(Request $request): Response
    {
       $rapport= new rapport() ;
       $form=$this->createForm(RapportType::class,$rapport)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
         
$file = $form->get('file')->getData();
if($file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('files_directory'), $fileName);
        $rapport->setFile($fileName);
    }
        $em->persist($rapport) ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/createrapport.html.twig',['f'=>$form->createView()]); 
    }
    #[Route('/supprimerrapport/{id}', name: 'supprimerrapport')]
    public function deleterapport($id)
    {
        $rapport = $this->getDoctrine()->getRepository(rapport::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($rapport);
        $em->flush();
        return $this->redirectToRoute("app_remboursement");
    }
    #[Route('/modifierrapport/{id}', name: 'modifierrapport')]
    public function modifierrapport(Request $request,$id): Response
    {
    
$entityManager = $this->getDoctrine()->getManager();
$rapport = $entityManager->getRepository(Rapport::class)->find($id);
$originalFile = $rapport->getFile(); // store the original file filename
$form = $this->createForm(UpdateType::class, $rapport);
$form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $file = $form->get('file')->getData(); // get the uploaded file
        
        if ($file) {
            // generate a unique filename
            $newFilename = md5(uniqid()) . '.' . $file->guessExtension();
    
            // move the file to the files directory
            $file->move(
                $this->getParameter('files_directory'),
                $newFilename
            );
    
            // update the entity with the new filename
            $rapport->setFile($newFilename);
    
            // delete the original file, if it exists
            if ($originalFile) {
                $originalFilePath = $this->getParameter('files_directory') . '/' . $originalFile;
                if (file_exists($originalFilePath)) {
                    unlink($originalFilePath);
                }
            }
        } else {
            // use the original file filename
            $rapport->setFile($originalFile);
        }
    
        $em=$this->getDoctrine()->getManager() ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/updaterapport.html.twig',['f'=>$form->createView()]); 
    }
   /* #[Route('/pdf/{id}', name: 'users_data')]
    public function pdf(): Response
    {
      
        $rapports = $this->getDoctrine()->getManager()->getRepository(Rapport::class)->findAll() ; 
        return $this->render('remboursement/pdf.html.twig', ['b'=>$rapports]);
    }*/
    #[Route('/download', name: 'users_dataa')]
    public function Downloadpdf(Request $request)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);
    
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verifier_peer' => FALSE,
                'verifier_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);
    
        $entityManager = $this->getDoctrine()->getManager();
        $rapport = $entityManager->getRepository(Rapport::class)->find($request->query->get('id'));
      
    
        $html = $this->renderView('remboursement/pdf.html.twig', ['b' => [$rapport]]);
        $dompdf->loadHtml($html);
    
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        $fichier = 'user-data-' . $request->query->get('id') . '.pdf';
        ob_end_clean();
        $dompdf->stream($fichier, ['Attachment' => true]);
        return new Response();
    }
    #[Route('/downloadQrcode', name: 'download_qrcode')]

    
    public function downloadQRCode(Request $request)
    {
        $rapport = $this->getDoctrine()->getRepository(Rapport::class)->find($request->query->get('id'));
        
        // Generate QR code
        $qrCode = new QrCode($rapport->getId());
        $qrCode->setSize(400);
        $qrCode->setMargin(10);
        $imageData = $qrCode->writeS();
        
        // Return image data in response
        $response = new Response($imageData);
        $response->headers->set('Content-Type', 'image/png');
        $response->headers->set('Content-Disposition', 'attachment; filename="qrcode.png"');
        
        return $response;
    }
    #[Route('/stats',name:'searchremb')]
    public function rembParDateAction(RapportRepository $repository)
    {
        $rapports = $repository->findAll();
        $data = [];
        foreach ($rapports as $rapport) {
            $date = $rapport->getDateRapport()->format('Y-m-d');
            if (!array_key_exists($date, $data)) {
                $data[$date] = 0;
            }
            $data[$date]++;
        }
        // Créer un nouveau LineChart
        $chart = new BarChart();

        // Ajouter les données des constats au chart
        $chart->getData()->setArrayToDataTable([
            ['Date','Nombre de remboursements'],
            ...array_map(function ($date, $count) {
                return [$date, $count];
            }, array_keys($data), array_values($data)),
        ]);

        // Configurer le chart avec des options
        $chart->getOptions()->setTitle('Nombe de remboursement par jour');
        $chart->getOptions()->getHAxis()->setTitle('Date');
        $chart->getOptions()->getVAxis()->setTitle('Nombre de remboursement');

        // Rendre la vue contenant le chart
        return $this->render('remboursement/stats.html.twig', [
            'chart' => $chart
        ]);
    }
}    
    
    
    
    
    

