<?php

/**
 * CLI entrypoint to load dependencies
 * Example usage php public/index.php src/Search/BinarySearch.php
 */

require_once __DIR__ . '/../vendor/autoload.php';

$pathToLoad = $argv[1] ?? null;

if ($pathToLoad) {
    $path = realpath(__DIR__ . '/../' .$pathToLoad);
    require $path;
}