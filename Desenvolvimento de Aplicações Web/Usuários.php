<?php 

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
$sql = "SELECT * FROM usuario where usuario like '%$filtro%'";
$consulta = mysqli_query($conexao,$sql);
$registro = mysqli_num_rows($consulta);


mysqli_close($conexao);
?>

<html lang="pt-br">
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta charset="utf-8">
<title>Cadastro de Professores></title>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
	
<img src="images/logo.jpg"width=200 height=100>
<div class="container">
<nav>
<ul class="menu">
<li><a href="painel.php">Cadastro <i class="fas fa-cloud"></i></li> </a>
<li><a href="consultas.php"> Consultas <i class="fas fa-file"></i></li> </a>
<li><a href="logout.php">Sair <i class="glyphicon glyphicon-remove"></i></li></a>
</ul>
</nav> 
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #115;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #;
}
</style>
<section>
<h2> Consultas</h2>
<hr><br>

<form method="get" action="">
Filtrar por matéria: <input type="text" name="filtro" class="campo" required autofocus>
<input type="submit" value="Pesquisar" class="btn">
</form>
<table border=1 cellpadding=10>
<?php
print "Resultado da pesquisa com a palavra <strong>$filtro<strong><br><br>";
print "$registro registros encontrados.";

print "<br><br>";
while($exibirRegistros = mysqli_fetch_array($consulta)){
	
	
	$usuario = $exibirRegistros[1];
	$nome = $exibirRegistros[2];
	$senha = $exibirRegistros[3];
	

	
		print "$usuario<br>";
			print "$nome<br>";
				print "$senha<br>";
				
	echo"<a href=edit_usuario.php?id=" . $exibirRegistros['codigo'] ."'>apag</a><br><hr>";
	
	print"<br>";

	
	
}


?>

</table>

</section>
</div>
</body>
</html>


