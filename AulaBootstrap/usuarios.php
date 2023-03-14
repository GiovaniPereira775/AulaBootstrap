<?php 
    $titulo = "Usuarios";
    include "./layout/cabecalho.php";
    include "conexao.php";
    if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
        ?>
            <div class="alert alert-warning">
                <?php echo $_GET["mensagem"]; ?>
            </div>
        <?php
    }



    if(isset($_POST) && !empty($_POST))
    {
        if(empty($_POST["login"]))
        {
            ?>
                <div class="alert alert-danger">
                    O campo login não pode ficar vazio!
                </div>
            <?php
        }
        else if(empty($_POST["senha"]))
        {
            ?>
                <div class="alert alert-danger">
                    O campo senha não pode ficar vazio!
                </div>
            <?php
        }
        else
        {
            
            $nome = $_POST["nome"];
            $login = $_POST["login"];
            $senha = hash('sha512', $_POST["senha"]);
            $ativo = $_POST["ativo"] == "on" ? true : false ;

            $query = "Insert into usuarios (nome, login, senha, ativo) values ('$nome', '$login', '$senha', $ativo)";
            $resultado = mysqli_query($conexao, $query);
            if ($resultado == 1){
                ?>

                    <div class="alert alert-success">
                        Usuario inserido com sucesso!
                    </div>

                <?php
            }
        }
    } 
    else
    {

    }
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
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Login</label>
                            <input type="text" name="login" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Ativo?</label>
                            <input type="checkbox" name="ativo" class="form-check"/>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit"> Salvar usuário </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Ativo</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "Select id,nome,login,ativo from usuarios";
                    $dados = mysqli_query($conexao, $query);
                    if($dados)
                    {
                        while($linha = mysqli_fetch_assoc($dados))
                        {
                            ?>
                                <tr>
                                    <td><?php echo $linha["id"];?></td>
                                    <td><?php echo $linha["nome"];?></td>
                                    <td><?php echo $linha["login"];?></td>
                                    <td>
                                        <?php 
                                            if($linha["ativo"] == 1){ 
                                                
                                                ?>
                                                <input type="checkbox" disabled checked />
                                                <?php 
                                            } else {
                                                ?>
                                                <input type="checkbox" disabled  />
                                                <?php   
                                            }
                                        ?>
                                        </td>
                                    <td>
                                    <a class="btn btn-warning" href="./usuarioEditar.php?id=<?php echo $linha["id"];?>">
                                                Editar
                                    </a>
                                        <a class="btn btn-danger" href="./usuarioExcluir.php?id=<?php echo $linha["id"];?>">
                                                Excluir
                                    </a>
                                    </td>
                                    
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>

<?php 
    include "./layout/rodape.php";
    ?>