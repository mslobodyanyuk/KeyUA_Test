<?php

namespace App\Repository;

use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Employee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employee[]    findAll()
 * @method Employee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeeRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Employee::class);
    }

    public function getSkills($specialty)
    {
        $query = $this->createQueryBuilder('e')
            ->select('e.write_code, e.test_code, e.communicate_with_manager, e.draw, e.set_tasks')
            ->where('e.specialty = :specialty')
            ->setParameter('specialty', $specialty);

        return $query->getQuery()->execute();

    }

    public function canDoAction($specialty, $action)
    {
        $query = $this->createQueryBuilder('e')
            ->select('e.' . $action)
            ->where('e.specialty = :specialty')
            ->setParameter('specialty', $specialty);

        return $query->getQuery()->execute();

    }

}
