<?php 
    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        include "./conexao.php";

        $query = "select * from usuarios where id = ".$_GET["id"];

        $resultado = mysqli_query($conexao, $query);

        $dados = mysqli_fetch_array($resultado);

        $id = $dados["id"];
        $id = $dados["nome"];
        $id = $dados["login"];
        $id = $dados["ativo"];
    }
    else
    {
        header("Location: ./usuarios.php?mensagem=Selecione um usuario para editar");
        exit();
    }
    include "./layout/rodape.php";
?>

<div class="card">

    <div class="card-reader"> 
        
        <h3>Cadastro de usuarios</h3>

        </div>


    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <form action="./usuarios.php" method="post">
                    <div class="form-group"> 
                        <label>id</label>
                        <input type="text" value="<?php echo $id; ?>" name="id" readonly class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>nome</label>
                        <input type="text" value="<?php echo $nome; ?>" name="nome" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>login</label>
                        <input type="password" value="<?php echo $login; ?>" name="login" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>ativo</label>
                        <?php if($ativo == 1)
                            {
                        ?>
                                    <input type="checkbox" name="Ativo" checked class="form-control" />
                                <?php
                            }
                            else
                            {
                                ?>
                                    <input type="checkbox" name="ativo"  class="form-control" />
                                <?php
                            }
                                ?>
                        <input type="checkbox" value="<?php echo $ativo; ?>" name="ativo" class="form-check"/>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit"> Atualizar usuário </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 

?>