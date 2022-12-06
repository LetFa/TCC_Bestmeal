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

if(isset($_FILES['foto']))
{
   echo 'lanche';
   $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
   $foto_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
   $dir = '../../imagens/'; //Diretório para uploads 
   move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$foto_name); //Fazer upload do arquivo
   
} 


switch($acao){ 
    case 'insert':
        if(isset($_SESSION['pedido']))
        {
            $dados_pedido = [            
                'cod_usuario'   => $_SESSION['login']['usuarios']['id'],
                'data_hora'     => date('Y-m-d H:i:s')
            ];

            $cod_pedido_insert = insere(
                'pedido',
                $dados_pedido
            );     
            

                    
            foreach($_SESSION['pedido'] as $cod_produto)
            {
                echo "Cod pedido:".$cod_pedido_insert."<br>";
                $dados_pedido_item = [
                    'cod_pedido'    => $cod_pedido_insert,                    
                    'cod_produto'    => $cod_produto
                ];
                insere(
                    'pedido_item',
                    $dados_pedido_item
                );
            }

            unset($_SESSION['pedido']);
        }            

        break;

}

header('location: ../index.php?success=create');
?>

