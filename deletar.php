<?php

require "conexao.php";


$cpf = $_GET['cpf'];

$sql= "SELECT * FROM clientes WHERE cpf = $cpf";
$buscar = mysqli_query($conn,$sql);
