<?php
  require_once '../core/sql.php';

  $id = 1;
  $nome = 'leticia';
  $email = 'lefarias111@gmail.com';
  $senha = 'lefarias111';
  $dados = ['nome' => $nome,
             'email' => $email,
             'senha' => $senha
];

$entidade = 'usuario';
$criterio = [['id', '=', $id]];
$campos = ['id', 'nome', 'email' ];
print_r($dados);
echo '<br>';
print_r($campos);
echo '<br>';
print_r($criterio);
echo '<br>';


//teste geração INSERT
$instrucao = insert($entidade, $dados);
echo $instrucao. '<br>';

//teste geração UPDATE
$instrucao =  update($entidade, $dados, $criterio);
echo $instrucao. '<br>';

//teste geração SELECT
$instrucao =  select($entidade, $campos, $criterio);
echo $instrucao. '<br>';

//teste geração DELETE
$instrucao =  delete($entidade, $criterio);
echo $instrucao. '<br>';
