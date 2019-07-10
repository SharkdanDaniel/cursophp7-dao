<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


//Carrega um usuário
//$root = new Usuario();
//$root->loadByID(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("TESTA", "123456");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("aluno", "testando123");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadByID(8);

$usuario->update("professor", "testesimples321");

echo $usuario;

?>