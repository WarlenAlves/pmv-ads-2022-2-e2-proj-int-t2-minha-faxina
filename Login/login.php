<?php
include('connect.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code1 = "SELECT * FROM usuarios_faxi  WHERE email = '$email' OR cpf = '$senha'";
        $sql_code2 = "SELECT * FROM usuarios_contrat  WHERE email = '$email' OR cpf = '$senha'";
        $sql_query1 = $conn->query($sql_code1) or die("Falha na execução do código SQL: " . $conn->error);
        $sql_query2 = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        $quantidade = $sql_query1->num_rows;
        $quantidade = $quantidade + $sql_query2->num_rows;

        if($quantidade == 1) {
            if (isset($sql_query1)){
                $usuario = $sql_query1->fetch_assoc();
            }
            else{
                $usuario = $sql_query2->fetch_assoc();  
            }
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: /faxina/Home/painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>