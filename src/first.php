<?php
$bad = $container->get(\App\BadClass::class);

try{
    $bad->run();
}catch(\Exception $e){

    $logger->error($e->getMessage(), ['exception' => $e]);
}
