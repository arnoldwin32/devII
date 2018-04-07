<!DOCTYPE html>
<html lang="en">

  <head>
		<?php 
		session_start();
		if((!isset ($_SESSION['loginname']) == true) and (!isset ($_SESSION['password']) == true))
		{
			unset($_SESSION['loginname']);
			unset($_SESSION['password']);
			header('location:index.php');
			}
		 
		$logado = $_SESSION['loginname'];
		?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página de usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
  </head>
  <style type="text/css">
	.meio{
		position:relative;
		width:600px;
		heigth:auto;
		margin: auto;
	}
  </style>
<body>
<div class="container">

      <div class="row">
	  <div class="meio">
<form class="form-horizontal" action="cadastrarProdutos.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de produto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomeProduto">Nome do produto</label>  
  <div class="col-md-7">
  <input id="nomeProduto" name="nomeProduto" type="text" placeholder="digite o nome do produto" class="form-control input-md" required="">
  </div>
  <label class="col-md-4 control-label" for="valorProduto">Valor do produto</label>  
  <div class="col-md-7">
  <input id="valorProduto" name="valorProduto" type="text" placeholder="digite o valor do produto" class="form-control input-md" required="">
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="botao"></label>
  <div class="col-md-4">
    <button type="submit" id="botao" name="botao" class="btn btn-primary">Cadastar</button>
  </div>
</div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
</body>
</html>