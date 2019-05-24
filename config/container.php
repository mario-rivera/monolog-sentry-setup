<?php
use DI\ContainerBuilder;
require dirname(__DIR__, 1) . '/vendor/autoload.php';

$container = (new ContainerBuilder())->addDefinitions(__DIR__ . '/definitions.php')->build();

return $container;
