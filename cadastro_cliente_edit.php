

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Altereção de cadastro</title>
</head>


<body>
    
<script>
    

function mascara_cpf(){

        var cpf = document.getElementById('cpf')
        if(cpf.value.length == 3 || cpf.value.length == 7){

            cpf.value = cpf.value + "."
        }else if (cpf.value.length ==11 ){
            cpf.value = cpf.value +"."

            //implementar para a pessoa não digitar string
            //implementar para a pessoa não digitar caracteres especias
        }
    }

</script>
<header class="header">

<a href="#">Site</a>
<nav>

    <ul class="menu">
        <li><a href="localhost/kabum">Deslogar</a></li>
    </ul>
</nav>
</header>

<?php 

include('conexao.php');


/*if (isset($_GET['id_cliente'])){  
*/
$id = $_GET['id'];


$sql= "SELECT * FROM clientes WHERE id = $id";
$buscar = mysqli_query($conn,$sql);

while($array = $buscar){

    $id = $array['id_cliente'];
    $nome = $array['nome'];


}
        
$id_cliente= $array['$id_cliente'];
$nome = $array['nome'];
        

    
?>
<div class="tudo">

<section class="container1">
    <h1 class="cc">Cadastar Cliente</h1>
    <form action="processa.php" method="POST">
        
        
        <label  for="fname">Nome:</label><br>
        <input type="text"  class="input-group-text"  id="fname" name="nome" required maxlength="30" value="">
        <label for ="fdata" >Data de Nascimento:</label>
        <input type="date" class="input-group-text"  id="fdata" name="data_nasc" required value="">
        <br>
        <label for="fcpf">CPF:</label>
        <input type="text" class="input-group-text"  id="cpf" name="cpf" maxlength="14" onkeyup="mascara_cpf()">
        <br>
        <label for="fRG">RG:</label>
        <input type="text" class="input-group-text" maxlength="14" name="rg"id="rg">
        <br>
        <label for="telefone">Telefone:</label>
        <br>
        <input type="text" class="input-group-text" name="telefone" id="ftelefone">
        <h1>Endereço</h1>
        <br>
        <label for="cidade">Cidade:</label><br>
        <input name="cidade" class="input-group-text" type="text" id="cidade" maxlength="20" />
        <br>
        <label for="endereco">Endereço:</label>
        <br>
        <input name="endereco" class="input-group-text" type="text" id="endereco" maxlength="20" />
        <br>
        <label for="bairro">Bairro:</label>
        <br>
        <input name="bairro" class="input-group-text" type="text" id="bairro" maxlength="20" />
        <br>
        <label for="numero">Numero</label>
        <br>
        <input name="end_numero" class="input-group-text" type="text">
        <br><br>
        <label for="estado" >Por favor selecione o Estado</label>
        <select name="end_estado">   
        <option value="Estado">Estado...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
        </select>
       

       <br>

        <input type="submit"  class="btn btn-lg btn-primary" value="Salvar Alterações" name="CadUsuario">



        </form>

    <br>

 </div>

   

   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>