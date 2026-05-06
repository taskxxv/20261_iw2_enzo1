<?php
include 'conecta.php';

$tamanho = "410";
$cor = "amarelofusca";

if($conn->query("INSERT INTO tb_camisetas VALUES (NULL, '$cor', '$tamanho')")){
   echo"registro inserido com sucesso";
}
else{
    echo"erro ao inserir";
}

?>