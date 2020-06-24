<?php 

include_once("conexao2.php");
$sql = "SELECT * FROM usuarios where nome like '%$filtro%'";
echo "Professor excluido com Sucesso"
?>