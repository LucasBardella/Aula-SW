<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastri_cliente";

$conexao = new mysqli($servidor,$usuario,$senha,$banco);

if(mysqli_connect_errno()){
    echo "ERRO DE CONEXÃO";
}
// else{
//     echo "CONECTANDO AO BANCO COM SUCESSO!";
// }


?>