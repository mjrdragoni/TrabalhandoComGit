<?php 
    include("../controllers/conection.php");
    switch(@$_POST["acao"]){
        case 'cadastrar';
         $nome = $_POST['nome'];
         $endereco = $_POST['endereco'];
         $email = $_POST['email'];
         $telefone = $_POST['telefone'];
         $sql = "INSERT INTO clientes (nome, endereco, email, telefone) VALUES ('$nome', '$endereco', '$email','$telefone')";
         $res = $conn->query($sql);
         echo "<script language='javascript'>alert('Cliente cadastrado com suceso!');</script>
         <meta http-equiv='refresh' content='0;url=../novo-cliente.php'>";
         break;

         case 'editar';
         $sql= "UPDATE clientes
                SET nome='$_POST[nome]', endereco='$_POST[endereco]', email='$_POST[email]', telefone='$_POST[telefone]'
                WHERE (codigo_cliente = $_REQUEST[id])";
        $res = $conn->query($sql);
        echo "<script language='javascript'>alert('Cliente editado com sucesso!');</script>
        <meta http-equiv='refresh' content='0;url=../listar-cliente.php'>";
         break;

         case 'excluir';
         $sql="DELETE from clientes WHERE (codigo_cliente = $_REQUEST[id]) ";
         $res = $conn->query($sql);
         echo "<script language='javascript'>alert('Cliente excluído com sucesso!');</script>
         <meta http-equiv='refresh' content='0;url=../listar-cliente.php'>";
         break;
    };       
