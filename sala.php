<?php
include 'conecta.php';
include 'links.php';
?>
<html>
<head>
    <title>Chat</title>
    
<script type="text/javascript" language="javascript">
$(function($) {
	// Quando o formulário for enviado, essa função é chamada
	$("#formulario").submit(function() {
		// Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
		var nome = $("#nome").val();
		var email = $("#email").val();
		var mensagem = $("#mensagem").val();
		// Exibe mensagem de carregamento
		$("#status").html("<img src='loader.gif' alt='Enviando' />");
		// Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
		$.post('envia.php', {nome: nome, email: email, mensagem: mensagem }, function(resposta) {
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
					$("#email").val("");
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
            aaaaaaaaaaaaaaaaaaaaaaaaaa
        </div>
            <br>
            <hr class="col-lg-11 linha">
            <br>
        <div class="col-lg-10 msg">
            <form id="formulario" action="javascript:func()" method="post">
                <input class="col-lg-11 messenger" type="text" name="mensagem">
                <button class="btn btn-info col-lg-1 send_btn" type="submit">Send</button>
            </form>
            <?php
                // Buscamos e exibimos as mensagens já contidas no banco de dados
                $query = mysqli_query("SELECT m.* FROM messages m JOIN users AS u ON u.id = m.user_id WHERE u.id = 10");
                while($mensagem = mysql_fetch_object($query)) {
                    echo "<strong>" . $mensagem->nome . "</strong> disse: <em>" . $mensagem->mensagem . "</em><br />";
                }
            ?>
        </div>
    </div>
</body>
</html>
