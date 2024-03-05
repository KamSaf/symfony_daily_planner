<?php

namespace App\Repository;

use App\Entity\DailyPlans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DailyPlans>
 *
 * @method DailyPlans|null find($id, $lockMode = null, $lockVersion = null)
 * @method DailyPlans|null findOneBy(array $criteria, array $orderBy = null)
 * @method DailyPlans[]    findAll()
 * @method DailyPlans[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DailyPlansRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DailyPlans::class);
    }

//    /**
//     * @return DailyPlans[] Returns an array of DailyPlans objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DailyPlans
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
