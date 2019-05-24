<?php
namespace App\Log;

use Psr\Log\LoggerInterface;

use Monolog\Logger;
use Monolog\ErrorHandler;
use Monolog\Handler\RavenHandler;

use Monolog\Processor\IntrospectionProcessor;
use Monolog\Processor\WebProcessor;
use Monolog\Processor\MemoryUsageProcessor;

class LoggerFactory
{
    public function create($channel, $sentryDsn)
    {
        $logger = new Logger($channel);

        $logger->pushProcessor(new IntrospectionProcessor());
        $logger->pushProcessor(new WebProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());

        $client = new \Raven_Client($sentryDsn, []);
        $logger->pushHandler(new RavenHandler($client));

        ErrorHandler::register($logger);

        return $logger;
    }
}
