<?php

use App\Kernel;
use App\Repository\EmployeeRepository;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Employee;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

require dirname(__DIR__).'/config/bootstrap.php';

if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

if ($trustedProxies = $_SERVER['TRUSTED_PROXIES'] ?? $_ENV['TRUSTED_PROXIES'] ?? false) {
    Request::setTrustedProxies(explode(',', $trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if ($trustedHosts = $_SERVER['TRUSTED_HOSTS'] ?? $_ENV['TRUSTED_HOSTS'] ?? false) {
    Request::setTrustedHosts([$trustedHosts]);
}

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);



/*
 * ********************************************************************************************************************/

/*$specialty = 'programmer';

$registry = 'RegistryInterface';

$employeeRepo = new EmployeeRepository( $registry);
$employeeRepo = new EmployeeRepository(RegistryInterface $registry);

$skills = $employeeRepo->getSkills($specialty);

echo '<pre>getSkills():', var_dump($skills), '</pre>';*/



/*$specialty = 'programmer';
//$repo->getSkills($specialty);
//$em = new Doctrine\ORM\EntityManagerInterface();
//$employeeRepository =   Doctrine\ORM\EntityRepository();
$registry = 'RegistryInterface';
$employeeRepo = new EmployeeRepository( $registry);
$skills = $employeeRepo->getSkills($specialty, $em);
echo '<pre>getSkills():', var_dump($skills), '</pre>';*/