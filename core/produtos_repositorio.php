<?php
session_start();
require_once '../sistema/valida_login.php';
require_once '../includes/funcoes.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';



foreach($_POST as $indice => $dado){
    $$indice = limparDados($dado);
}

foreach($_GET as $indice => $dado){
    $$indice = limparDados($dado);
}

$id = (int)$id;

switch($acao){ 
    case 'insert':
        $dados = [
            'nome' => $nome,
            'preco' => $preco,
            'ingredientes' => $ingredientes,
            'imagem' => $imagem,
            'usuario_id' => $_SESSION['login'] ['usuarios'] ['id']
        ];

        insere(
            'produtos',
            $dados
        );

        break;

        case 'update':
            $dados = [
                'nome' => $nome,
                'preco' => $preco,
                'ingredientes' => $ingredientes,
                'imagem' => $imagem,
                'usuario_id' => $_SESSION['login'] ['usuarios'] ['id']
            ];
    
             $criterio = [
                ['id', '=', $id]
             ];

             atualiza(
                'produtos',
                $dados,
                $criterio
             );

             break;

             case 'delete':
                $criterio = [
                  ['id', '=', $id]
                ];

                deleta(
                    'produtos',
                    $criterio
                );

                break;
}

header('location: ../index.php');
?>

