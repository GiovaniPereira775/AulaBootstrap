<?php 

    $servidor="localhost";
    $username="root";
    $password="";
    $dbname="videoaula";

    $conexao = mysqli_connect($servidor, $username, $password) or die ("Não foi possivel conectar");

    mysqli_select_db($conexao, $dbname);

?>