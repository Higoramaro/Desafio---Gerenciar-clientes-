<?php




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabela clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../">
  <link rel="stylesheet" href="../kabum/css/decoration.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <header class="header">

<a href="#">Site</a>
<nav>

    <ul class="menu">
        <li><a href="index.php">Deslogar</a></li>
    </ul>
</nav>
</header>

  
<br><br>
<div class="container">
  <h2>lista cliente</h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id Cliente</th>
        <th>Nome</th>
        <th>Data nascimento</th>
        <th>CPF</th>
        <th>RG</th>
        <th>Telefone</th>
        <th>Id endereço</th>
        <th>Cidade</th>
        <th>Endereco</th>
        <th>Bairro</th>
        <th>Numero</th>
        <th>Estado</th>
        <th>....</th>
        <th><td><a class="btn btn-danger"  href="#">Delete</a></td></th>

      </tr>
    </thead>
    <tbody>

    <?php



      //----------------DELETE--------------------------

      

      // conexão
      require_once 'conexao.php';


      //View
      /*include_once "index.php";*/

      $conn = new mysqli("localhost", "root", "","kabum"); 
      /*$select = "SELECT * FROM clientes  ";*/
       $select = "SELECT * FROM `clientes` INNER JOIN tb_endereco";
      $run = mysqli_query($conn,$select);
      while($row_usu = mysqli_fetch_array($run)){
        $id_cliente = $row_usu['id_cliente'];
        $nome = $row_usu['nome'];
        $data_nasc = $row_usu['data_nasc'];
        $cpf = $row_usu['cpf'];
        $rg = $row_usu['rg'];
        $telefone = $row_usu['telefone'];
        $id_endereco = $row_usu['id_endereco'];
        $cidade = $row_usu['cidade'];
        $endereco = $row_usu['endereco'];
        $bairro = $row_usu['bairro'];
        $numero = $row_usu['numero'];
        $end_estado = $row_usu['end_estado'];




      ?>
      <tr>
        <td><?php echo $id_cliente;?></td>
        <td><?php echo $nome;?></td>
        <td><?php echo $data_nasc;?></td>
        <td><?php echo $cpf;?></td>
        <td><?php echo $rg;?></td>
        <td><?php echo $telefone;?></td>
        <td><?php echo $id_endereco;?></td> 
        <td><?php echo $cidade;?></td>
        <td><?php echo $endereco;?></td>
        <td><?php echo $bairro;?></td>
        <td><?php echo $numero;?></td>
        <td><?php echo $end_estado;?></td>
        <td><a href="cadastro_cliente_edit.php?id='$id_cliente'"> <button>Editar</button></a></td>

       <td><a class="btn btn-danger" href="processa.php">Delete</a></td>
      <?php } ?>
      
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
          <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z"/>
</svg>
        </td>

      </tr>
      
    </tbody>


  </table>
</div>

</body>
</html>
