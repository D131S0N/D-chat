<?php
include 'conecta.php';
include 'links.php';
session_start();

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');
$room_id = $_GET["room_id"];
?>
<html>
<head>
    <title>Chat</title>
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript">
$(function($) {
	// Quando o formulário for enviado, essa função é chamada
	$("#formulario").submit(function() {
		// Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
		var nome = $("#nome").val();
		var sala = $("#sala").val();
		var id_usu = $("#id_usu").val();
		var mensagem = $("#mensagem").val();
		var data = $("#data").val();
		/* Exibe mensagem de carregamento
		$("#status").html("<img src='loader.gif' alt='Enviando' />");*/
		// Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
		$.post('envia.php', {nome: nome, sala: sala, id_usu: id_usu, mensagem: mensagem, data: data }, function(resposta) {
				// Quando terminada a requisição
				/* Exibe a div status
				$("#status").slideDown();*/
				// Se a resposta é um erro
				/*if (resposta != false) {
					// Exibe o erro na div
					$("#status").html(resposta);
				} 
				// Se resposta for false, ou seja, não ocorreu nenhum erro
				else {
					// Exibe mensagem de sucesso
					$("#status").html("Mensagem enviada com sucesso!");*/
					// Coloca a mensagem no div de mensagens
					$("#mensagens").prepend("<strong>"+ nome +"</strong> disse: <em>" + mensagem + "</em><br />");
					// Limpando todos os campos
					$("#nome").val("");
					$("#sala").val("");
					$("#id_usu").val("");
					$("#mensagem").val("");
					$("#data").val("");
				/*}*/
		});
	});
});
</script>
        <script type="text/javascript">
			var el = document.querySelector('#mensagens');
				setInterval(function() {
				el.innerHTML;
				var height = el.scrollHeight;
				el.scrollTop = height;
			});

        </script>
</head>
<body>
	<div class="container major">
		<h1>Romm <?php echo $room_id; ?></h1>
		<a href="home.php" type="button">Voltar</a>
		<div id="mensagens" class="col-lg-10 chatt">
		
		<?php
				// Buscamos e exibimos as mensagens já contidas no banco de dados				
				$query = "SELECT m.*, u.* FROM messages m JOIN users_rooms u ON (m.date_msg > u.date_enter) WHERE m.room_id = '".$_GET['room_id']."' ORDER BY id ASC";
				$result_query = mysqli_query($conexao, $query);
                while($mensagem = mysqli_fetch_object($result_query)) {
                    echo "<strong>" . $mensagem->user_name . "</strong> disse: <em>" . $mensagem->chat . "</em><br />";
                }
            ?>
		</div>
		
			<br>
            <hr class="col-lg-11 linha">
            <br>
			<div id="escrever" class="col-lg-10 msg">
				<form id="formulario" action="#" method="post">
					<input name="nome" type="hidden" id="nome" value="<?=$_SESSION['user_name']?>"/>      
					<input name="sala" type="hidden" id="sala" value="<?=$_SESSION['room_id']?>"/>
					<input name="id_usu" type="hidden" id="id_usu" value="<?=$_SESSION['user_id']?>"/>
					<input name="data" type="hidden" id="data" value="<?=$data?>"/>
					<input class="col-lg-11 messenger" required autofocus name="mensagem" type="text" id="mensagem" />
					<input type="submit" value="Enviar" class="btn btn-info send_btn" />			
				</form>
			</div>
	</div>
</body>
</html>
