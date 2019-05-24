<?php
return [
    Psr\Log\LoggerInterface::class => DI\factory([\App\Log\LoggerFactory::class, 'create'])
        ->parameter('channel', getenv('LOG_CHANNEL'))
        ->parameter('sentryDsn', getenv('SENTRY_DSN')),
];
