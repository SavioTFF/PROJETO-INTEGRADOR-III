<?php	
include_once("conexao2.php");
$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Matéria = $_POST['Matéria'];
$Turma = $_POST['Turma'];
$sql = "INSERT INTO usuarios (Nome, Email, Materia,Turma)
VALUES ('$Nome' , '$Email' , '$Matéria' , '$Turma')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Cadastro de Professores></title>
<link rel= "stylesheet" href="">
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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
  background-color: #111;
}
</style>







<body>
<div class="container">
<nav>
<ul class="menu">
<li><a href="painel.php">Cadastro </li> </a>
<li><a href="consultas.php"> Consultas</li></a>
</ul>
</nav> 

<section>
<h2> Confirmação de Professores</h2>
<hr><br>
<?php

if($linhas == 1){
	print "Cadastro efutado com sucesso!";
}else{
	print "Cadastro NÃO efetuado. <br> Já existe um email em uso!";
}
?>


</section>
</div>
</body>
</html>


