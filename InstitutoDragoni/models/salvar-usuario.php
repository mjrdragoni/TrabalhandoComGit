<?php
include '../controllers/conection.php';
switch (@$_POST["acao"]) {
    case 'cadastrar';
        $login = $_POST['login'];
        $senha = MD5($_POST['senha']);
        $verifica = "SELECT * FROM usuarios WHERE (usuario = '$login')";
        $res = $conn->query($verifica);
        $qtd = $res->num_rows;
        if ($qtd == 0) {
            $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$login', '$senha')";
            $result = $conn->query($sql);
            print "<script language='javascript'>alert('Usuário cadastrado com sucesso!');</script>
         <meta http-equiv='refresh' content='0;url=../index.php'>";            
        } else {
        
        echo "<script language='javascript'>alert('Usuário Já cadastrado');</script>
        <meta http-equiv='refresh' content='0;url=../novo-usuario.php'>";
        }
    break;

    case 'logar';
    $login = $_POST['login'];
    $senha = MD5($_POST['senha']);
        $verifica = "SELECT * FROM usuarios WHERE (usuario = '$login' AND senha = '$senha')";
        $res = $conn->query($verifica);
        $qtd = $res->num_rows;
        if ($qtd > 0) {
            print "<script language='javascript'>alert('Usuário e/ou senha incorreta!');</script>
            <meta http-equiv='refresh' content='0;url=../novo-usuario.php'>"; 
           
        }
        else{
            setcookie("login", $login);
            header("Location: ../index.php");
        }
        break;
        


}