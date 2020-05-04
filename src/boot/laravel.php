<?php

define('LARAVEL_START', microtime(true));

require LARAVEL_CODERUNNER_PROJECT_ROOT . '/../vendor/autoload.php';

$app = require_once LARAVEL_CODERUNNER_PROJECT_ROOT . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);