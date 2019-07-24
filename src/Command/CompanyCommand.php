<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Service\CompanyCommandService;

class CompanyCommand extends Command
{
    protected static $defaultName = 'company:employee';

    private $companyCommandService;

    public function __construct(CompanyCommandService $companyCommandService)
    {
        $this->companyCommandService = $companyCommandService;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('company:employee')
            ->setDescription('The list of employee skills')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('specialty', InputArgument::REQUIRED, 'Pass the specialty.')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $specialty = $input->getArgument('specialty');

        $this->companyCommandService->make($specialty);
    }

}
