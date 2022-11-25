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


$ingredientes = $_POST['ingredientes'];
echo '<p>teste: '.$ingredientes;


$id = (int)$id;

switch($acao){ 
    case 'insert':
        $dados = [
            'cod_pedido'    => $cod_pedido,
            'cod_usuario'    => $_SESSION['login']['usuario']['cod_usuario'],
            'cod_produto'    => $cod_produto,
        ];

        insere(
            'pedido_itens',
            $dados
        );
        

        break;

        case 'update':
            $dados = [
                'cod_pedido'    => $cod_pedido,
                'cod_usuario'    => $_SESSION['login']['usuario']['cod_usuario'],
                'cod_produto'    => $cod_produto,
            ];
    
             $criterio = [
                ['cod', '=', $id]
             ];

             atualiza(
                'pedido_itens',
                $dados,
                $criterio
             );

             break;

}

header('location: ../index.php');
?>

