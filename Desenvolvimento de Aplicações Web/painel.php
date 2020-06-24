<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<h2>Olá, <?php echo $_SESSION['nome'];?>  seja bem vindo</h2>

<html lang="pt-br">

<head>
<meta charset="utf-8">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<title>Cadastro de Professores></title>
<link href="css/bootstrap.css" rel="stylesheet">


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>



<body>
	
<img src="images/logo.jpg"width=200 height=100>
<div class="container">
<nav>
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
<ul class="menu">
<li><a href="painel.php">Cadastro <i class="fas fa-cloud"></i></li> </a>
<li><a href="consultas.php"> Consultas <i class="fas fa-file"></i></li> </a>
<li><a href="logout.php">Sair <i class="glyphicon glyphicon-remove"></i></li></a>
<li><a href="usuáriosC.php">Usuários <i class="glyphicon glyphicon-user"></i></li></a>
</ul>
</nav> 

<section>
<h1> Cadastro de Professores</h1>
<style type="text/css">
            body {
                margin-top: 100px;
                margin-right: 20px;
                margin-left: 20px;
            }
        </style>
<hr><br>
<form method="post" action="processa.php">  
<br><br>
<style>
body{font-family: Arial, Helvetica, sans-serif}
   .content{display:flex;justify-content: center}
   .content{width: 100%;max-width: 500px;}
   .form{display: flex;flex-direction: column}
   .field{padding:10px;margin-bottom: 15px;border:1px solid #DDD;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;font-size: 16px}
   textarea{height: 150px;}
   </style>






<center>Nome<br>
<input type="text" name="Nome" class="campo" maxlength "40" required autofocus>
<BR>Matéria<br>
<input type="text" name="Matéria" class="campo" maxlength "50" required autofocus>
<BR>Turma<br>
<input type="text" name="Turma" class="campo" maxlength "50" required autofocus>
<BR>Email<br>
<input type="email" name="Email" class="campo" maxlength "50" required >
<br><br>
<input type="submit" value="Salvar" class="btn"> 
<input type="reset" value="Limpar" class="btn"> 
</center>
</form>
</section>
</div>
</body>
</html>




