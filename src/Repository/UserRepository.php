<?php
namespace App\Repository;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }
    /**
     * @return Query[]
     */
    public function getAllUsersPaginate($limit,$offset)
    {
        return $this->getEntityManager()
            ->createQuery('SELECT u FROM App\Entity\User as u')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getResult();
    }
    public function countUsers()
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countUsersFromThisDep($dep)
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->andWhere('u.dep_id = :val')
            ->setParameter('val', $dep)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getUserPaginate($dep,$itemsPerPage,$offset)
    {
      return $this->createQueryBuilder('u')
                 ->andWhere('u.dep_id = :val')
                 ->setParameter('val', $dep)
                 //->orderBy('u.id', 'ASC')
                 ->setFirstResult($offset)
                 ->setMaxResults($itemsPerPage)
                 ->getQuery()
                 ->getResult()
             ;
    }
//     /**
//      * @return User[] Returns an array of User objects
//      */
//
//    public function findByExampleField($value)
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }
//
//
//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

}
