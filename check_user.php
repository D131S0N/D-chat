<?php
include 'conecta.php';
include 'links.php';
session_start();

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

$select_user_room = "SELECT * FROM users_rooms WHERE user_id = '".$_SESSION['user_id']."' AND room_id = '".$_GET['room_id']."'";
$result_user_room = mysqli_query($conexao, $select_user_room);
$num_user_room = mysqli_num_rows($result_user_room);

$inserir_user_room = "INSERT INTO users_rooms (user_id, room_id, date_enter) VALUES ('".$_SESSION['user_id']."','". $_GET['room_id']."', '$data')";
$up_date_enter = "UPDATE users_rooms SET date_enter = '$data' WHERE user_id = '".$_SESSION['user_id']."' AND room_id = '". $_GET['room_id']."'";

if($num_user_room > 0)
    {
		$room_id = $_GET["room_id"];
		$_SESSION['room_id']=$room_id;
        mysqli_query($conexao, $up_date_enter);
        header("Location: sala.php?room_id=".$room_id."");
    }
    else{
		$room_id = $_GET["room_id"];
		$_SESSION['room_id']=$room_id;
        mysqli_query($conexao, $inserir_user_room);
        header("Location: sala.php");
	}
?>