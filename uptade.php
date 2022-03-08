<?php
    $id_cliente = $_GET["id"];
    include 'conexao.php';

    $sql = "delete from clientes where id_cliente = ".$id_cliente;

    if(mysql_query($sql,$conn)){
        $msg = "Deletado com sucesso!";
    }else{
        $msg = "Erro ao deletar!";
    }
    mysql_close($conn);

    ?>