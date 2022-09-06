<?php

session_start();
require_once '../includes/funcoes.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';
$salt = '$exemplosaltifsp';


foreach($_POST as $indice => $dado){
    $$indice = limparDados($dado);
}

foreach($_GET as $indice => $dado){
    $$indice = limparDados($dado);
}
switch($acao){
    case 'insert':
        $dados = [
            'nome' => $nome,
            'email' => $email,
            'senha' => crypt($senha,$salt)
        ];

        insere(
            'usuario',
            $dados
        );
        
        header('location: ../index.php?criado=sucesso?msg=Criado com sucesso');
        die;

        break;

        case 'update':
            $id = (int)$id;
            $dados = [
                'nome' => $nome,
                'email' => $email
            ];
    
             $criterio = [
                ['id', '=', $id]
             ];

             atualiza(
                'usuario',
                $dados,
                $criterio
             );

             break;
             
             case 'login':
                $criterio = [
                    ['email', '=', $email],
                    ['AND', 'ativo', '=', 1]
                ];
        
                 $retorno = buscar (
                    'usuario',
                    ['id','nome','email','senha','adm'],
                    $criterio
                 );

                  
                 if(count($retorno) > 0){
                    if(crypt($senha,$salt)  == $retorno[0] ['senha']){
                      $_SESSION['login'] ['usuario'] = $retorno[0];
                      if(!empty($_SESSION['url_retorno'])){
                       header('location: ' . $_SESSION['url_retorno']);
                       $_SESSION['url_retorno'] = '';
                       exit;
                      }
                    }
                 }
                 header('location: ../index.php?logado=sucesso');
                 die;
                 break;

                 case 'logout':
                    session_destroy();
                    break;

                    case 'status':
                        $id = (int)$id;
                        $valor = (int)$valor;

                        $dados = [
                            'ativo' => $valor
                        ];

                        atualiza(
                            'usuario',
                            $dados,
                            $criterio
                        );

                        header('location: ../usuarios.php');
                        exit;
                        break;

                        case 'adm':
                            $id = (int)$id;
                            $valor = (int)$valor;

                            $dados = [
                              'adm' => $valor
                            ];

                            $criterio = [
                                ['id', '=', $id]
                            ];


                            atualiza(
                                'usuario',
                                $dados,
                                $criterio
                            );

                            header('location: ../usuarios.php');
                            exit;
                            break;

}
header('location: ../index.php');
?>