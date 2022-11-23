<?php

 function conecta() : mysqli
 {
    $servidor = 'localhost';
    $banco = 'bestmeal';
    $port = 3307;
    $usuario = 'root';
    $senha = '';
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

    if(!$conexao){
        echo 'Erro: não foi possível conectar ao MySql.' .PHP_EOL;
        echo 'Debugging errno: ' . mysqli_connect_errno()  .PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error()  .PHP_EOL;
        return null;
    }
    return $conexao;
 }
    function desconecta($conexao)
    {
        mysqli_close($conexao);
    }
?>