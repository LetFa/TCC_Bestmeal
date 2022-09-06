<?php
session_start();

define("SITE", 'http://localhost/TCC_Bestmeal');


function asset(string $pasta): string {
    $arquivo = SITE . "/views/_resources/{$pasta}";
    return $arquivo;
}