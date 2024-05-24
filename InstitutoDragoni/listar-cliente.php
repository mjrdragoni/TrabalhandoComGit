<?php

@session_start();

    if(isset($_SESSION['login']) ){
    include("header-restrita.php");				
	}		
	else{   
    include("header.php");	    		
		} 	


$sql = "SELECT * FROM clientes";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if ($qtd > 0) {
  print "<div class='container'>
        <div class='row'>
      <div class='col mt-5'>
      
      <center> <h1> Clientes cadastrados </h1> </center>
  
  <table class='table table-hover table-bordered'><tr>
        <th>#</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th> E-mail </th>
        <th> Telefone </th>
        <th colspan='2'><center> Ações </center></th>
        </tr>";

while ($row = $res->fetch_object()) {
    echo "<tr>
            <td>$row->codigo_cliente</td> <td>$row->nome</td> <td>$row->endereco</td>
            <td>$row->email</td>
            <td>$row->telefone</td>
            <td>  <a href='../institutodragoni/editar-cliente.php?&id=" . $row->codigo_cliente . "'><button class='btn btn-success'>Editar</button></a></td>
            <td>  <button class='btn btn-danger' data-toggle='modal'data-target='#excluir'>Deletar</button></td>          
            </tr>

          
<!-- Modal -->
<div id='excluir' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Conteúdo do modal-->
    <div class='modal-content'>

      <!-- Cabeçalho do modal -->
      <div class='modal-header'>
        <h4 class='modal-title'>Excluir cliente</h4>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>

      <!-- Corpo do modal -->
      <div class='modal-body'>
        <p>Tem certeza que deseja excluir este usuário?</p>
      </div>

      <!-- Rodapé do modal-->

      <div class='modal-footer'>
        <button type='button' class='btn btn-danger' data-dismiss='modal'>Não</button>
        <form action='models/salvar-cliente.php?&id=" . $row->codigo_cliente . "' method='POST'> <input type='hidden' name='acao' value='excluir'>
          <button type='submit' class='btn btn-primary'>Sim</button>
        </form>
      </div>";
  }
  echo '</table>
  </div>
  </div>
  </div>';

} else {
  echo "<p class='alert alert-danger'>Nenhum cliente cadastrado</p>";
 
}
?>

<div >
  <?php include "footer.html"; ?>
</div>