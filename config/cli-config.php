<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once '/../vendor/autoload.php';


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use  Doctrine\ORM\Configuration;
use Doctrine\Common\Annotations\AnnotationReader;


$entityFolder = realpath(__DIR__.'/../').DIRECTORY_SEPARATOR."Entity";
$proxiesFolder = realpath(__DIR__.'/../').DIRECTORY_SEPARATOR."Proxies";
$isDevMode = true;


$cache = new \Doctrine\Common\Cache\ArrayCache;
$reader = new AnnotationReader();
$driver = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($reader, array($entityFolder));
$config = Setup::createAnnotationMetadataConfiguration(array($entityFolder), $isDevMode);

$config->setMetadataCacheImpl( $cache );
$config->setQueryCacheImpl( $cache );
$config->setMetadataDriverImpl( $driver );
;
$config->setProxyDir($proxiesFolder);
$config->setProxyNamespace('Proxies');
$config->setAutoGenerateProxyClasses(true);

$classLoader = new \Doctrine\Common\ClassLoader('Entity', realpath(__DIR__.'../'));
$classLoader->register();

$connectionOptions = array(
        'driver'        => 'pdo_mysql',
        'host'          => 'localhost',
        'dbname'        => 'cesarpil_androidteam',
        'user'          => 'root',
        'password'      => '',
        'charset'       => 'utf8',
        'driverOptions' => array(1002 => 'SET NAMES utf8',),
);
$entityManager = EntityManager::create($connectionOptions, $config);


return ConsoleRunner::createHelperSet($entityManager);