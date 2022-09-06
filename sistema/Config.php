<?php

session_start(); //declarou a session na pagina padrão

//o site é a nossa url 
define("SITE", 'http://localhost/TCC_Bestmeal');

function asset(string $pasta): string {// receber strings e retornar strings
    $arquivo = SITE . "/views/_resources/{$pasta}";//dentro {$pasta} significa que ali vai escrever strings
    return $arquivo;
    //retorna isso
}
