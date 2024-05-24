<?php

include("header.php");	    		
    

$sql = "SELECT * FROM clientes WHERE (codigo_cliente ='$_REQUEST[id]')";
$res = $conn->query($sql);
$row = $res->fetch_object();

?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <center>
                <h1>Editar cliente</h1>
            </center>
            <form action="models/salvar-cliente.php?id=<?= $row->codigo_cliente ?>" method="POST">
                <input type="hidden" name="acao" value="editar">
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" value='<?php print "$row->nome"; ?>'>
                </div>
                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-control" value='<?php print "$row->endereco"; ?>'>
                </div>
                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" value='<?php print "$row->email"; ?>'>
                </div>
                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" value='<?php print "$row->telefone"; ?>'>
                </div>
                <div class="mb-3">

                    <center> <button type="submit" class="btn btn-primary">Salvar</button> </center>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.html"; ?>
</div>
