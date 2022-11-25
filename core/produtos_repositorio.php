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
   $target_dir = '../views/_resources/storage/lanches/'; //Diretório para uploads 
   move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto_name); //Fazer upload do arquivo
   
   
} 

$foto = $target_dir.$foto_name;

$id = (int)$id;

switch($acao){ 
    case 'insert':
        $dados = [
            'nome' => $nome,
            'preco' => $preco,
            'ingredientes' => $ingredientes,
            'foto' => $foto,
            
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
                'foto' => $foto,
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
}

header('location: ../produto_formulario.php');
?>

