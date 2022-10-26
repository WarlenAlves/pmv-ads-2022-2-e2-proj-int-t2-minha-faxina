<?php
session_start();
include_once("connect.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$sql_code1 = "SELECT * FROM usuarios_faxi  WHERE email = '$email' OR cpf = '$cpf'";
$sql_code2 = "SELECT * FROM usuarios_contrat  WHERE email = '$email' OR cpf = '$cpf'";
$sql_query1 = $conn->query($sql_code1) or die("Falha na execução do código SQL: " . $conn->error);
$sql_query2 = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
$quantidade = $sql_query1->num_rows;
$quantidade = $quantidade + $sql_query2->num_rows;

if($quantidade > 1) {
     echo ("Já existe um usuário cadastrado com este email ou cpf");
}
else{
     $result_usuario = "INSERT INTO usuarios_contrat (criado, modificado, nome, email, cpf, idade, cep, rua, numero, complemento, bairro, cidade, senha) VALUES (NOW(), NOW(), '$nome', '$email', '$cpf', '$idade', '$cep', 
     '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$senha')";
     $resultado_usuario = mysqli_query($conn, $result_usuario);

     if(mysqli_insert_id($conn)){
          header("Location: /faxina/index.html");
     }else{
          header("Location: /faxina/cadastro/cadsatro-contrat.html");
     }
}