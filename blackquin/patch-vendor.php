<?php

// Runs automatically after every `composer install`/`update` (see composer.json).
// This codebase targets Laravel 8 on PHP 8.4. Laravel's exception bootstrap hardcodes
// error_reporting(-1), which under PHP 8.4 turns routine deprecation notices into thrown
// ErrorExceptions and crashes the app. vendor/ is not committed, so this patch has to be
// re-applied after every fresh install rather than edited once by hand.

$file = __DIR__ . '/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php';

if (!is_file($file)) {
    return;
}

$contents = file_get_contents($file);
$patched = str_replace('error_reporting(-1);', 'error_reporting(E_ALL & ~E_DEPRECATED);', $contents);

if ($patched !== $contents) {
    file_put_contents($file, $patched);
    echo "patch-vendor.php: patched HandleExceptions.php for PHP 8.4 compatibility.\n";
}
