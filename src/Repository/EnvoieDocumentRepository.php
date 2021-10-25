<?php

namespace App\Repository;

use App\Entity\EnvoieDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnvoieDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnvoieDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnvoieDocument[]    findAll()
 * @method EnvoieDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnvoieDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnvoieDocument::class);
    }

    // /**
    //  * @return EnvoieDocument[] Returns an array of EnvoieDocument objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnvoieDocument
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
