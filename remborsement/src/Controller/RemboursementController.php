<?php

namespace App\Controller;
use App\Entity\Rapport;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;
use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RapportType;
use App\Form\UpdateType;
use App\Repository\RapportRepository ; 
use Dompdf\Options  ;
use Dompdf\Dompdf ;
use Endroid\QrCode\QrCode;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\BarChart;
use Doctrine\Persistence\ManagerRegistry;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Writer\PngWriter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use App\Controller\AdvancedSearchType ;
use Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
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
    #[Route('/downloadpdf', name: 'users_dataa')]
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
        $imageData = $qrCode->writeString();
        
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
    #[Route('/QrCode/{id}', name: 'app_QrCode')]
    public function qrCode(ManagerRegistry $doctrine, $id, RapportRepository $repo)
    {
        return $this->render("remboursement/qr_code.html.twig", ['id' => $id]);
    }

    /*#[Route('/QrCode/generate/{id}', name: 'app_qr_codes')]
    public function qrGenerator(ManagerRegistry $doctrine, $id, RapportRepository $repo)
    {
        $em = $doctrine->getManager();
        $res = $repo->find($id);
      //  $qrcode = QrCode::create($res->getNom() .  " Et le prix est: " . $res->getPrix())
        $qrcode = QrCode::create( " - date de rapport:". $res-> getId() . " , Le montant est: " . $res->getMandant() . " DT")

            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
        $writer = new PngWriter();
        return new Response($writer->write($qrcode)->getString(),
            Response::HTTP_OK,
            ['content-type' => 'image/png']
        );

    }*/
   
#[Route('/QrCode/generate/{id}', name: 'app_qr_codes')]
public function qrGenerator(ManagerRegistry $doctrine, $id, RapportRepository $repo, UrlGeneratorInterface $urlGenerator)
{
    $em = $doctrine->getManager();
    $res = $repo->find($id);
    $pdfUrl = $urlGenerator->generate('users_dataa', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);
    
    $qrcode = QrCode::create($pdfUrl)
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
        ->setSize(300)
        ->setMargin(10)
        ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));
    
    $writer = new PngWriter();
    return new Response($writer->write($qrcode)->getString(),
        Response::HTTP_OK,
        ['content-type' => 'image/png']
    );
}

  

#[Route('/download-excel', name: 'users_data_excel')]
public function exportData(Request $request): Response
{
    // Récupérer toutes les entités de la base de données
    $entities = $this->getDoctrine()->getRepository(Rapport::class)->findAll();

    // Créer un objet Spreadsheet
    $spreadsheet = new Spreadsheet();

    // Ajouter une feuille de calcul
    $sheet = $spreadsheet->getActiveSheet();

    // Ajouter des en-têtes de colonne
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Date de rapport');
    $sheet->setCellValue('C1', 'Numéro de série de la voiture');
    $sheet->setCellValue('D1', 'Modèle de la voiture');
    $sheet->setCellValue('E1', 'Date de mise en circulation');
    $sheet->setCellValue('F1', 'Matricule');
    $sheet->setCellValue('G1', 'Couleur de la voiture');
    $sheet->setCellValue('H1', 'Mandant');
    $sheet->setCellValue('I1', 'Conclusions');
    $sheet->setCellValue('J1', 'Montant exprimé');
    $sheet->setCellValue('K1', 'Etat de rapport');
    $sheet->setCellValue('L1', 'ID Expert');

    // Ajouter les données pour chaque entité
    $row = 2;
    foreach ($entities as $entity) {
        $sheet->setCellValue('A' . $row, $entity->getId());
        $sheet->setCellValue('B' . $row, $entity->getDateRapport()->format('Y-m-d'));
        $sheet->setCellValue('C' . $row, $entity->getNumSerieVoiture());
        $sheet->setCellValue('D' . $row, $entity->getModeleVoiture());
        $sheet->setCellValue('E' . $row, $entity->getDateMiseEnCirculation()->format('Y-m-d'));
        $sheet->setCellValue('F' . $row, $entity->getMatricule());
        $sheet->setCellValue('G' . $row, $entity->getCouleurVoiture());
        $sheet->setCellValue('H' . $row, $entity->getMandant());
        $sheet->setCellValue('I' . $row, $entity->getConclusions());
        $sheet->setCellValue('J' . $row, $entity->getMontantExprime());
        $sheet->setCellValue('K' . $row, $entity->getEtatRapport());
        $sheet->setCellValue('L' . $row, $entity->getIdExpert());
        $row++;
    }

    // Créer un objet de fichier Excel
    $writer = new Xlsx($spreadsheet);
    $response = new StreamedResponse();
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', 'attachment;filename="users-data.xlsx"');
    $response->headers->set('Cache-Control', 'max-age=0');
    $response->setCallback(function () use ($writer) {
        $writer->save('php://output');
    });

    return $response;
}
 /**
     * @Route("/search", name="rapport_search")
     */
    public function search(Request $request): Response
    {
        $form = $this->createForm(RapportType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $rapports = $this->getDoctrine()
                ->getRepository(Rapport::class)
                ->advancedSearch($data);

            return $this->render('remboursement/index.html.twig', [
                'b' => $rapports,
            ]);
        }

        
    }
}    
    
    
    
    
    

