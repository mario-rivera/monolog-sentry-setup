<?php
use Psr\Log\LogLevel;

$container = require __DIR__ . '/config/container.php';
$logger = $container->get(\Psr\Log\LoggerInterface::class);

require_once(__DIR__ . '/src/first.php');
require_once(__DIR__ . '/src/second.php');

