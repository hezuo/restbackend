<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use  Doctrine\ORM\Configuration;
use Doctrine\Common\Annotations\AnnotationReader;

$entityFolder = realpath(__DIR__).DIRECTORY_SEPARATOR."Entity";
$proxiesFolder = realpath(__DIR__).DIRECTORY_SEPARATOR."Proxies";
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

$classLoader = new \Doctrine\Common\ClassLoader('Entity', realpath(__DIR__));
$classLoader->register();

$connectionOptions = array(
        'driver'        => 'pdo_mysql',
        'host'          => 'localhost',
        'dbname'        => 'cesarpil_androidteam',
        'user'          => 'cesarpil_andteam',
        'password'      => 'abcd2014$$$',
        'charset'       => 'utf8',
        'driverOptions' => array(1002 => 'SET NAMES utf8',),
);
$entityManager = EntityManager::create($connectionOptions, $config);

$app = new Silex\Application();
$app['debug'] = true;
$app['em'] = $entityManager;
 
$app->get('/actividad', function()   use ($app){    
    $repo= $app['em']->getRepository('Entity\TbActividad');
    $results = $repo->createQueryBuilder('a')
    ->select('a')
    ->getQuery()
    ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    return json_encode($results);    
});
$app->get('/ipr', function()   use ($app){
        $repo= $app['em']->getRepository('Entity\TbIpr');
        $results = $repo->createQueryBuilder('i')
               ->select('i')
               ->getQuery()
               ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);        
        return json_encode($results);
});
$app->get('/origen', function()   use ($app){
        $repo= $app['em']->getRepository('Entity\TbOrigen');
        $results = $repo->createQueryBuilder('o')
        ->select('o')
        ->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return json_encode($results);
    });
$app->get('/planificacion', function()   use ($app){
        $repo= $app['em']->getRepository('Entity\TbPlanificacion');
        $results = $repo->createQueryBuilder('p')
        ->select('p')
        ->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return json_encode($results);
});
    $app->get('/proyecto', function()   use ($app){
        $repo= $app['em']->getRepository('Entity\TbProyecto');
        $results = $repo->createQueryBuilder('p')
        ->select('p')
        ->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return json_encode($results);
    });
        $app->get('/tipo_actividad', function()   use ($app){
            $repo= $app['em']->getRepository('Entity\TbTipoActividad');
            $results = $repo->createQueryBuilder('p')
            ->select('p')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            return json_encode($results);
        });
$app->get('/user', function()   use ($app){
        $repo= $app['em']->getRepository('Entity\TbUser');
        $results = $repo->createQueryBuilder('u')
        ->select('u')
        ->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return json_encode($results);
});
$app->get('/user/buscar/{correo}/{clave}', function($correo,$clave)   use ($app){
        $repo= $app['em']->getRepository('Entity\TbUser');
        $results = $repo->createQueryBuilder('u')
        ->select('u')
        ->where('u.correo = :correo AND u.clave = :clave')
        ->setParameter('correo', $correo)
        ->setParameter('clave', $clave)
        ->getQuery()
        ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return json_encode($results);
});
$app->run();