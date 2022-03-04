<?php
include 'conexao.php';
$conn = new mysqli("localhost", "root", "","kabum");



if(isset($_POST['btncadastrar'])){

	
$dnome = $_POST["dnome"];
$dsenha = $_POST["dsenha"];

$conexao = $conn;
$conexao->query("INSERT INTO logar (nome, senha) 
                values('$dnome', '$dsenha')");

echo "Clicou no botão";

header('Location: sistema.php');

}elseif (isset($_POST['btnlogin'])) {
	
	echo "Voce clicou no botão login";
}else{

	echo "Nada";
}




$conexao -> autocommit(FALSE);
$conexao->commit();

