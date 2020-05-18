<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }



    public function findWithLimit($nbr)
    {
        return $this->createQueryBuilder('e')
            ->setMaxResults($nbr)
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    public function findByTitle($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.title LIKE :val')
            ->setParameter('val', '%' . $value . '%')
            ->orderBy('e.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
