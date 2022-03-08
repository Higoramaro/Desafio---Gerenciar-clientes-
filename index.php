<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css-login/estilo1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Tela Inicial</title>
</head>

<body>

    <form method="POST" action="login.php">
         <div class="form-group">
        <fieldset>
            
            <h1 id="texto1">Login</h1>
            <p></p>
            <label class="container1">
                <figure>
            <br>
            <tr>
                <td>
                    <label name="fnome"type="text" ><strong>Nome</strong></label>
                    <input id="dnome"name="dnome" type="text">
                </td>
                <br>
                <label name="fsenha" type="text"><strong>Senha</strong></label>
                <input id="dsenha"type="password" name="dsenha"
                minlength="8" required>
            </tr> 
            <br>
            <p></p>
            <button name="btnlogin" id="login1">LOGIN</button>
        </figure>
        </label>
        </fieldset>
    </div>
    </form>
    <form>
    <button name="btncadastrar" id="cad1"><a href='cadastrar_cliente.php'>Cadastrar um novo cliente</a></button>
</form>

        
</body>
</html>
