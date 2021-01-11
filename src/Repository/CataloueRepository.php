<?php

namespace App\Repository;

use App\Entity\Cataloue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cataloue|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cataloue|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cataloue[]    findAll()
 * @method Cataloue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CataloueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cataloue::class);
    }

    // /**
    //  * @return Cataloue[] Returns an array of Cataloue objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cataloue
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
