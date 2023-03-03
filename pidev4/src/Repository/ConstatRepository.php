<?php

namespace App\Repository;

use App\Entity\Constat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Constat>
 *
 * @method Constat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Constat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Constat[]    findAll()
 * @method Constat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConstatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Constat::class);
    }

    public function save(Constat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Constat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function countByDate(){
        $query = $this->createQueryBuilder('constat');
        $query
            ->select('SUBSTRING(constat.dateconstat , 1 , 10) as date , COUNT(constat) as count')
            ->groupBy('date')
        ;
        return $query->getQuery()->getResult();
    }
    public function findrecBylieu($lieu){
        return $this->createQueryBuilder('c')
            ->where('c.lieu LIKE :lieu')
            ->setParameter('lieu', '%'.$lieu.'%')
            ->getQuery()
            ->getResult();
    }
    public  function  triedecroissant()
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.dateconstat','ASC')
            ->getQuery()
            ->getResult();
    }
//    /**
//     * @return Constat[] Returns an array of Constat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Constat
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
