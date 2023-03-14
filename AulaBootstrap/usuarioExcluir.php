<?php 
    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        include "./conexao.php";
        $query = "Delete from usuarios where id = ".$_GET["id"];
        $resultado = mysqli_query($conexao, $query);

        if($resultado)
        {
            header("Location: ./usuarios.php?mensagem=Usuario excluido com sucesso");
            exit();
        }else{
            header("Location: ./usuarios.php?mensagem=Ocorreu algum erro");
            exit();
        }
    }
    else
    {
        header("Location: ./usuarios.php?mensagem=Selecione um usuario para apagar");
        exit();
    }
?>