<?php 
    $titulo = "Consulta CEP";
    include "./layout/cabecalho.php";


    
    ?>

    <h1> Consultar CEP</h1>
    <div class="row">
                <div class="col-md-4 col-sm-12"> 
                    <div class="mb-3">
                        <form action="./cep.php" method="get">
                            <label>Digite seu CEP</label>
                            <input class="form-control" name="Cep"/>
                            <button class="btn btn-success mt-3" type="submit">
                                Pesquisar Cep 
                            </button>
                        </form>
                    </div>
                </div>
    </div>
    <?php
        if(isset($_GET["Cep"]) && !empty($_GET["Cep"]) ){
            $dados = file_get_contents("https://viacep.com.br/ws/".$_GET["Cep"]."/json/");
            $dados = json_decode($dados, true);
        
            ?>
    
                <!-- HTML personalizado -->
                <label><?php echo $dados["cep"]; ?> </label> <br>
                <label><?php echo $dados["logradouro"]; ?> </label> <br>
                <label><?php echo $dados["complemento"]; ?> </label> <br>
                <label><?php echo $dados["bairro"]; ?> </label> <br>
                <label><?php echo $dados["localidade"]; ?> </label> <br>
                <label><?php echo $dados["uf"]; ?> </label><br>
                <label><?php echo $dados["ibge"]; ?> </label> <br>
                <label><?php echo $dados["gia"]; ?> </label> <br>
                <label><?php echo $dados["ddd"]; ?> </label> <br>
                <label><?php echo $dados["siafi"]; ?> </label> <br>
            <?php
          }  else
        {
            echo "CEP nao encontrado!";
        }
    
    ?>

<?php 

    include "./layout/rodape.php";
    ?>   