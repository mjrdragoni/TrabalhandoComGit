<?php 
    include("../controllers/conection.php");
    switch($_POST["acao"]){
        case 'cadastrar';
         $descricao = $_POST['descricao'];
         $quantidade = $_POST['quantidade'];
         $valor = $_POST['valor'];
         
         $sql = "INSERT INTO produtos (descricao, quantidade, valor) VALUES ('$descricao', '$quantidade','$valor')";
         $res = $conn->query($sql);
         print '<meta http-equiv="refresh" content="0;url=../index.php">';
         break;

         case 'editar';
         $sql= "UPDATE produtos
                SET descricao='$_POST[descricao]', quantidade='$_POST[quantidade]', valor='$_POST[valor]'
                WHERE (codigo_produto = $_REQUEST[id])";
        $res = $conn->query($sql);
        print '<meta http-equiv="refresh" content="0;url=../index.php">';
         break;

         case 'excluir';
         $sql="DELETE from produtos WHERE (codigo_produto = $_REQUEST[id]) ";
         $res = $conn->query($sql);
         print '<meta http-equiv="refresh" content="0;url=../index.php">';
         break;
    };       
