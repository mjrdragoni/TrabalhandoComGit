<?php
include ("header.php");

$sql = "SELECT * FROM produtos WHERE (codigo_produto ='$_REQUEST[id]')";
$res = $conn->query($sql);
$row = $res->fetch_object();

?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <center>
                <h1>Editar prouto</h1>
            </center>
            <form action="models/salvar-produto.php?id=<?= $row->codigo_produto ?>" method="POST">
                <input type="hidden" name="acao" value="editar">
                <div class="mb-3">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" class="form-control" value='<?php print "$row->descricao"; ?>'>
                </div>

                <div class="mb-3">
                    <label for="quantidade">quantidade</label>
                    <input type="number" name="quantidade" class="form-control"
                        value='<?php print "$row->quantidade"; ?>'>
                </div>
                <div class="mb-3">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" class="form-control" value='<?php print "$row->valor"; ?>'>
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php include "footer.html"; ?>
</div>