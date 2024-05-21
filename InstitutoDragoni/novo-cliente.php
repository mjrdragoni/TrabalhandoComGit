<?php
include ("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <center>
                <h1>Cadastrar novo cliente</h1>
            </center>
            <form action="models/salvar-cliente.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control">
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include("footer.html");
?>
