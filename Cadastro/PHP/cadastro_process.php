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
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


// echo "Nome: $nome <br>";
// echo "E-mail: $email <br>";
// echo "CPF: $cpf <br>";
// echo "idade: $idade <br>";
// echo "CEP: $cep <br>";
// echo "rua: $rua <br>";
// echo "Numero: $numero <br>";
// echo "Complemento: $complemento <br>";
// echo "Bairro: $bairro <br>";
// echo "Senha: $senha <br>";



$result_usuario = "INSERT INTO faxina (nome, email, cpf, idade, cep, rua, numero, complemento, bairro, senha) VALUES ('$nome', '$email', '$cpf', '$idade', '$cep', 
'$rua', '$numero', '$complemento', '$bairro','$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

// if(mysqli_insert_id($conn)){
//     $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p></br>";
//     header("Location: index.php");
// }else{
//     $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso!</p></br>";
//     header("Location: index.php");
// }