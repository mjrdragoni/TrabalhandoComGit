<?php
@session_start();

    if(isset($_SESSION['login']) ){
    include("header-restrita.php");				
	}		
	else{   
    include("header.php");	    		
		} 	
?>
<div class="container">
    <div class="row">
        <div class="col mt-5">

     
        <center>
            <h1>Cadastrar novo produto</h1>
        </center>
        <form action="models/salvar-produto.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar-p">
            <div class="mb-3">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control">
            </div>
            <div class="mb-3">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" class="form-control">
            </div>
            <div class="mb-3">
                <label for="valor">Valor</label>
                <input type="text" name="valor" class="form-control">
            </div>

            <div class="mb-3">

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>