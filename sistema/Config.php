<?php

define("SITE", 'http://localhost/TCC_Bestmeal');

function asset(string $path): string {
    $file = SITE."/views/_resources/{$path}";
    return $file;
}