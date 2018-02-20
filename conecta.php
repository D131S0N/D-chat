<?php
    //cria a conexão mysqli_connect('localização' DB, 'usuario de aceeso', 'senha', 'banco de dados')
    $conexao = mysqli_connect('localhost','root','', 'chat');

    //ajusta o charset de comunicação entre a aplicação e o banco de dados
    mysqli_set_charset($conexao, 'utf8');

    //verifica a conexão
    if($conexao->connect_error)
    {
        die("Falha ao realizar a conexão: " . $conexao->connect_error);
    }

?>