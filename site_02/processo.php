<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

echo "Olá <span style='color:red;'>" , $nome , "</span>";
echo "<br>";
echo "Confirme seu email por favor: " , $email;
echo "<br>";
echo "Sua idade é " , $idade , "?";
echo "<br>";


?>