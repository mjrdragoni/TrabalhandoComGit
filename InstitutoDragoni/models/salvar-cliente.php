<?php 
    include("../controllers/conection.php");
    switch(@$_POST["acao"]){
        case 'cadastrar';
         $nome = $_POST['nome'];
         $endereco = $_POST['endereco'];
         $email = $_POST['email'];
         $telefone = $_POST['telefone'];
         $sql = "INSERT INTO clientes (nome, edereco, email, telefone) VALUES ('$nome', '$endereco', '$email','$telefone')";
         $res = $conn->query($sql);
         print '<meta http-equiv="refresh" content="0;url=../index.php">';
         break;

         case 'editar';
         $sql= "UPDATE clientes
                SET nome='$_POST[nome]', edereco='$_POST[endereco]', email='$_POST[email]', telefone='$_POST[telefone]'
                WHERE (codigo_cliente = $_REQUEST[id])";
        $res = $conn->query($sql);
        print '<meta http-equiv="refresh" content="0;url=../index.php">';
         break;

         case 'excluir';
         $sql="DELETE from clientes WHERE (codigo_cliente = $_REQUEST[id]) ";
         $res = $conn->query($sql);
         print '<meta http-equiv="refresh" content="0;url=../index.php">';
         break;
    };       
