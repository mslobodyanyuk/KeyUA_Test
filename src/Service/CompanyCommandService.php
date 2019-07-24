<?php
/**
 * Created by PhpStorm.
 * User: maximus
 * Date: 22.07.19
 * Time: 19:48
 */

namespace App\Service;

use App\Entity\Employee;
use Doctrine\ORM\EntityManagerInterface;


class CompanyCommandService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function make($specialty)
    {
        $skills = $this->em->getRepository(Employee::class)->getSkills($specialty);
        $skills = $skills[0];

        foreach($skills as $skill) {
            if(!empty($skill)){
                echo " - " . $skill . PHP_EOL;
            }
        }
    }

}
