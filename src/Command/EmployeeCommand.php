<?php

namespace App\Command;

use App\Service\EmployeeCommandService;
use App\Service\Helper\CamelcaseToUnderscore;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;

use Symfony\Component\Console\Output\OutputInterface;


class EmployeeCommand extends Command
{
    protected static $defaultName = 'employee:can';

    private $employeeCommandService;

    public function __construct(EmployeeCommandService $employeeCommandService)
    {
        $this->employeeCommandService = $employeeCommandService;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('employee:can')
            ->setDescription('Shows whether an employee can do certain actions')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('specialty', InputArgument::REQUIRED, 'Pass the specialty.')
            ->addArgument('action', InputArgument::REQUIRED, 'Pass the action.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $specialty = $input->getArgument('specialty');
        $action = $input->getArgument('action');

        $action = CamelcaseToUnderscore::camelCaseTo_($action);

        $this->employeeCommandService->make($specialty, $action);

    }
}
