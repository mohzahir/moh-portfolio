<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// السر هنا: تحويل مسار التخزين (Storage) بالكامل إلى مجلد /tmp المسموح به في Vercel
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);