<?php
include 'conecta.php';
include 'links.php';
session_start();

$select_user_room = "SELECT * FROM users_rooms WHERE user_id = '".$_SESSION['user_id']."' AND room_id = '".$_GET['room_id']."'";
$result_user_room = mysqli_query($conexao, $select_user_room);
$num_user_room = mysqli_num_rows($result_user_room);


$inserir_user_room = "INSERT INTO users_rooms (user_id, room_id) VALUES ('".$_SESSION['user_id']."','". $_GET['room_id']."')";

if($num_user_room > 0)
    {
		$room_id = $_GET["room_id"];
		$_SESSION['room_id']=$room_id;
    }
    else{
		$room_id = $_GET["room_id"];
		$_SESSION['room_id']=$room_id;
        mysqli_query($conexao, $inserir_user_room);
    }

?>
<html>
<head>
    <title>Chat</title>
    
<script type="text/javascript" language="javascript">
$(function($) {
	// Quando o formulário for enviado, essa função é chamada
	$("#formulario").submit(function() {
		// Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
		//var nome = $("#nome").val();
		var mensagem = $("#mensagem").val();
		//console.log(nome);
		// Exibe mensagem de carregamento
		$("#status").html("<img src='loader.gif' alt='Enviando' />");
		// Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
		$.post('envia.php', {mensagem: mensagem }, function(resposta) {
				// Quando terminada a requisição
				// Exibe a div status
				$("#status").slideDown();
				// Se a resposta é um erro
				if (resposta != false) {
					// Exibe o erro na div
					$("#status").html(resposta);
				} 
				// Se resposta for false, ou seja, não ocorreu nenhum erro
				else {
					// Exibe mensagem de sucesso
					$("#status").html("Mensagem enviada com sucesso!");
					// Coloca a mensagem no div de mensagens
					$("#mensagens").prepend("<strong>"+ nome +"</strong> disse: <em>" + mensagem + "</em><br />");
					// Limpando todos os campos
					$("#nome").val("");
					$("#mensagem").val("");
				}
		});
	});
});
</script>
</head>
<body>
    <div class="container major">
        <div class="col-lg-10 chatt">
            <?php echo $_GET['room_id'] ?>
        </div>
            <br>
            <hr class="col-lg-11 linha">
            <br>
        <div class="col-lg-10 msg">
            <form id="formulario" action="javascript:func()" method="post">
                <input class="col-lg-11 messenger" type="text" id="mensagem">
                <button class="btn btn-info col-lg-1 send_btn" type="submit">Send</button>
            </form>
            <?php
                // Buscamos e exibimos as mensagens já contidas no banco de dados
				$query = "SELECT m.* FROM messages m JOIN users AS u ON u.id = m.user_id WHERE u.id = '".$_SESSION['user_id']."'";
				$result_query = mysqli_query($conexao, $query);
                while($mensagem = mysqli_fetch_object($result_query)) {
                    echo "<strong>" . $nome . "</strong> disse: <em>" . $mensagem . "</em><br />";
                }
            ?>
        </div>
    </div>
</body>
</html>
