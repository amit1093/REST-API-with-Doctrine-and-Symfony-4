<?php

namespace App\Repository;

use App\Entity\Tracking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tracking|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tracking|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tracking[]    findAll()
 * @method Tracking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingRepository extends EntityRepository
{

//    public function __construct()
//    {
//        $this->setUser($user);
//        $this->setCourse($course);
//        if ($this->getCourse()->getStoreType() == STORE_TYPE_LMS) {
//            $this->courseSessionRecord = $this->getLMSCourseRecord($datasource);
//        }
//        else {
//            die('course storage type of articulate_course not implemented');
//        }
//
//
//    }
//    /**
//     * @return Tracking[] Returns an array of Tracking objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tracking
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
