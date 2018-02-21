<?php
include 'conecta.php';

session_start();
$user_name = $_POST["user_name"];

$select = "SELECT * FROM users WHERE name = '$user_name'";
$result = mysqli_query($conexao, $select);
$num = mysqli_num_rows($result);

$insere = "INSERT INTO users (id, name, password) VALUES ('', '$user_name', '')";

if($num > 0)
    {
        $_SESSION['user_name']=$user_name;
        header("Location: home.php");
    }
    else{
        mysqli_query($conexao, $insere);
        $_SESSION['user_name']=$user_name;
        header("Location: home.php");
    }

/*
para uso de banco de dados no PHP, pesquisa por metodos PDO php... ele já tem uns tratativas para SQL Injection
e para debugar pesquisar habiltar xdebug xamp */

?>