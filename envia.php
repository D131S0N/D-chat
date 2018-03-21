<?php
// Incluimos o arquivo de conexão
include 'conecta.php';
include 'links.php';
// Recuperamos os valores dos campos através do método POST
$nome = $_POST["nome"];
$mensagem = $_POST["mensagem"];
// Verifica se o nome foi preenchido
/*if (empty($nome)) {
	echo "Escreva seu nome";
} 
// Verifica se o email é válido
elseif (!eregi("^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$", $email)) {
	echo "Digite um email válido";
} */
// Verifica se a mensagem foi digitada
if (empty($mensagem)) {
	echo "Escreva uma mensagem";
} 
// Verifica se a mensagem nao ultrapassa o limite de caracteres
elseif (strlen($mensagem) > 500) {
	echo "A mensagem deve ter no máximo 500 caracteres";
} 
// Se não houver nenhum erro
else {
	// Inserimos no banco de dados
	$query = mysqli_query("INSERT INTO messages VALUES ('', '".$nome."', '".$email."', '".$mensagem."')");
	// Se inserido com sucesso
	if ($query) {
		echo false;
	} 
	// Se houver algum erro ao inserir
	else {
		echo "Não foi possível inserir a mensagem no momento.";
	}
}
?>