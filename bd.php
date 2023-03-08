
<?php
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "formulario_php";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/*if($conexao->connect_errno){
    echo "ERRO";
}else{
    echo "conectado";
}*/