<?php

require("conexao.php");




if (isset($_POST['CadUsuario']) and ($_POST['CadUsuario'] <> "")) 
{
 
//Cadastrar Clientes
$nome = $_POST["nome"];
$data_nasc = $_POST["data_nasc"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$telefone = $_POST["telefone"];

//Inserindo os campos na tabela cliente
$sql1 = "INSERT INTO clientes(nome,data_nasc,cpf,rg,telefone) 
VALUES ('$nome','$data_nasc','$cpf','$rg','$telefone')";
//Cadastrar Endereço dos clientes

$cidade = $_POST["cidade"];
$endereco = $_POST["endereco"];
$bairro  = $_POST["bairro"];
$end_numero = $_POST["end_numero"];
$end_estado = $_POST["end_estado"];
	


$sql2 = "INSERT INTO tb_endereco(cidade,endereco,bairro,numero,end_estado) 
VALUES ('$cidade','$endereco','$bairro ','$end_numero','$end_estado')";


//mysqli_query($conn, $sql1) or die ("Erro"); 

//mysqli_query($conn, $sql2) or die ("Erro");


//incluindo a conexao
require("conexao.php");


	$mysqli= new $mysqli("localhost", "root", "","kabum") or die(mysql_error($mysqli));
	$result_cliente = $mysqli-> query("SELECT * FROM data")or die($mysqli->error);
	pre_r($result_cliente);


	//funcão array
	function pre_r($array){
		echo '<pre>';
		print_r($array);
		echo'</pre>';
	}


header('Location: tb.php');

}else{

	echo "Não deu certo";
}
?>



