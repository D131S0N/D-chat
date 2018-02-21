<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/changes.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/select2.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/pt-br.js" type="text/javascript"></script>
        <script src="js/transition.js" type="text/javascript"></script>
        <script src="js/collapse.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/select2.min.js" type="text/javascript"></script>

        <title>Welcome to D-chat</title>
    </head>
    <body>

    </body>
</html>

<?php

include 'conecta.php';
session_start();
$name_room = $_POST["name_room"];
$description = $_POST["description"];
$minium_age = $_POST["minium_age"];


$select_room = "SELECT * FROM rooms WHERE name = '$name_room'";
$result_room = mysqli_query($conexao, $select_room);
$num2 = mysqli_num_rows($result_room);

$insere_room = "INSERT INTO rooms (id, name, description, minimum_age) VALUES ('', '$name_room', '$description', '$minium_age')";

if($num2 > 0)
    {
        echo  "<script>alert('This room is already registered!);</script>";
        header('location: home.php');
    }
    else{
        mysqli_query($conexao, $insere_room);
        echo  "<script>alert('This room is already registered!);</script>";
        header('location: home.php');
    }

?>