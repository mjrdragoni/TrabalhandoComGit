<?php
include ("header.php");




      $sql = "SELECT * FROM produtos";
      $res = $conn->query($sql);
      $qtd = $res->num_rows;
      if ($qtd > 0) {
        print "<div class='container'>
        <div class='row'>
      <div class='col mt-5'>
      <center>
      <h1>Produtos cadastrados</h1>
    </center>
        <table class='table table-hover table-bordered' ><tr>
        <th>#</th>
        <th>Descriçao</th>
        <th>Quantidade</th>
        <th> Valor </th>        
        <th> Ações </th>
        </tr>";
        while ($row = $res->fetch_object()) {
          echo "<tr>
            <td>$row->codigo_produto</td> <td>$row->descricao</td> <td>$row->quantidade</td>
            <td>$row->valor</td>        
            <td>  <a href='editar-produto.php?&id=" . $row->codigo_produto . "'><button class='btn btn-success'>Editar</button></a></td>
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
        <form action='models/salvar-produto.php?&id=" . $row->codigo_produto . "' method='POST'> <input type='hidden' name='acao' value='excluir'>
          <button type='submit' class='btn btn-primary'>Sim</button>
        </form>
      </div>";
        }
        echo '</table>
        </div>
        </div>
        </div>';

      } else {
        echo "<p class='alert alert-danger'>Nenhum produto cadastrado</p>";

      }

      ?>
      <div >
  <?php include "footer.html"; ?>
</div>