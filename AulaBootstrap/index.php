<?php 
    $titulo = "Pagina inicial";
    include "./layout/cabecalho.php";
    ?>


    <div class="row">
      <div class="col-md-4">
      <div class="card-body">
      <h5 class="card-title">Meu titulo do card</h5>
      <p class="card-text">Este é o card para utilização do nosso sistema</p>
      <a href="#" class="btn btn-primary">Clique aqui para saber mais</a>
      </div>
      </div>
      <div class="col-md-4 col-sm-12">
      <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
              <input type="email" name="email" class="form-control" placeholder="exemplo@email.com">
          </div>
              <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Digite sua reclamação</label>
          <textarea name="reclamacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      </div>
    
 

 
    
      <div class="card mt-4 col-4">
      <div class="card-header col-4">
      Bem vindo ao sistema
</div>
      
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Cpf</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        <th scope="row">1</th>
        <td>Giovani</td>
        <td>111.111.111-11</td>
        <td>
          <a class="btn btn-warning"> Editar </a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Angelo</td>
        <td>222.222.222-22</td>
        <td>
          <a class="btn btn-warning"> Editar </a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Vitor</td>
        <td>333.333.333-33</td>
        <td>
          <a class="btn btn-warning"> Editar </a>
        </td>
      </tr>
    </tbody>
  </table>

     <?php 
    include "./layout/rodape.php";
    ?>   
  