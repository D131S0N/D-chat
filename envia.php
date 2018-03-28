<?php
// Incluimos o arquivo de conexão
include 'conecta.php';

session_start();
// Recuperamos os valores dos campos através do método POST
$nome = $_POST["nome"];
$mensagem = $_POST["mensagem"];
$sala = $_POST["sala"];
$id_user = $_POST["id_usu"];
	$query_insere_mensagem = "INSERT INTO messages VALUES ('', '$sala', '$id_user', '$mensagem', '$nome')";
// Verifica se o nome foi preenchido
/*if (empty($nome)) {
	echo "Escreva seu nome";
} 
// Verifica se o email é válido
elseif (!eregi("^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$", $email)) {
	echo "Digite um email válido";
} 
// Verifica se a mensagem foi digitada
if (empty($mensagem)) {
	echo "Escreva uma mensagem";
} 
// Verifica se a mensagem nao ultrapassa o limite de caracteres
elseif (strlen($mensagem) > 500) {
	echo "A mensagem deve ter no máximo 500 caracteres";
} 
// Se não houver nenhum erro
else {*/
	// Inserimos no banco de dados
	mysqli_query($conexao, $query_insere_mensagem);
	
	/* Se inserido com sucesso
	if ($query_insere_mensagem) {
		echo false;
	} 
	// Se houver algum erro ao inserir
	else {
		echo "Não foi possível inserir a mensagem no momento.";
	}
}*/
?>