<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <meta name="robots" content="noindex">

    
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<title>Página logada!</title>
</head>
 
<body>

		    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading" style="text-align:center;">
						<strong> <?php echo" Bem vindo $logado";?></strong>
					</div>
					<div class="panel-body">
						<form role="form">
							<fieldset>
								<div class="row">
									
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<a href="page.php" class="btn btn-lg btn-primary btn-block">Cadastrar Produto</a>
										</div>
										
										<div class="form-group">
											<a href="logout.php" class="btn btn-lg btn-primary btn-block">Fazer Logoff</a>
										</div>
									</div>
								</div>
								
							</fieldset>
						</form>
					</div>
					
                </div>
			</div>
		</div>
	</div>
</body>
</html>