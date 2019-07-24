<?php
/**
 * Created by PhpStorm.
 * User: maximus
 * Date: 22.07.19
 * Time: 20:29
 */

namespace App\Service;

use App\Entity\Employee;
use Doctrine\ORM\EntityManagerInterface;

class EmployeeCommandService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function make($specialty, $action)
    {
        $canDoAction = $this->em->getRepository(Employee::class)->canDoAction($specialty, $action);
        $canDoAction = $canDoAction[0]["$action"];

        $canDoAction = (!empty($canDoAction)) ? 'true' . PHP_EOL : 'false' . PHP_EOL;

        echo $canDoAction;
    }
}