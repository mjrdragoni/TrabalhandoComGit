<?php
include ("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <center>
                <h1>Efetuar login</h1>
            </center>
            <form action="models/salvar-usuario.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-3">
                    <label for="login">Login</label>
                    <input type="text" name="login" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>

                
                <div class="mb-3">
           
            <form action='models/salvar-usuario.php' method='POST'> <input type='hidden' name='acao' value='logar'>
                <button type='submit' class='btn btn-primary'>Logar</button>
            </form>
            </div>
                
            </form>
        </div>
    </div>
</div>
<?php
include ("footer.html");
?>