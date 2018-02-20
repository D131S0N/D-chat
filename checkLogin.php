<?php
include 'conecta.php';

session_start();
$user_name = $_POST["user_name"];

$select = mysqli_query("SELECT * FROM users WHERE name = '$user_name'");
$result = mysqli_num_rows($select);

if($result > 0)
    {
        $_SESSION['user']=$user;
        echo "<script>location.href='home.php'</script>";
    }
    else{
		$insere = "INSERT INTO users (name) VALUES ('$user_name')";
        //$insere .="('$user_name')";
        
        header("Location: home.php");
    }

/* verificar 
para uso de banco de dados no PHP, pesquisa por metodos PDO php... ele já tem uns tratativas para SQL Injection
e para debugar pesquisar habiltar xdebug xamp */

?>