<?php

require_once "vendor/autoload.php";

use Classes\Bob;
use \Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Finder\Finder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$bob= new Bob();
$bob->setCity('Gloup');
$bob->setName('Bob');
$bob->setChanson('Laaaaa');

\Symfony\Component\Debug\Debug::enable();
ErrorHandler::register();
ExceptionHandler::register();

echo $bob->chant();
//echo $bob->chiale();
dump($bob);


//==================================== create a log channel===================================//
$log = new Logger('Bob');
$log->pushHandler(new StreamHandler('logs/app.log', Logger::WARNING));

// add records to the log
$log->addWarning('Bob chante Attention');
$log->addError('Bob pleure');



//============================FINDER==========================================//
$finder = new Finder();
$finder->files()->in(__DIR__."/img")->name('/\.gif/');

foreach ($finder as $file) {

    print "<img class='img-thumbnail' src='img/{$file->getRelativePathname()} '/>";

}

?>