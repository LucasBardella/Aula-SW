<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "lucas@gmail.com" || $senha == "12345678"){
        echo "Usuário válido";
    }else{
        echo "Usuário Inválido";
    }

?>