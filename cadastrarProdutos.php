<?php
$nomeProduto = $_POST['nomeProduto'];
$valorProduto = $_POST['valorProduto'];
$con = mysql_connect("127.0.0.1", "root", "usbw") or die ("Sem conexão com o servidor");
$select = mysql_select_db("mydb") or die("Sem acesso ao bando de dados");
mysql_query("INSERT INTO PRODUTO(NOME,VALOR,USUARIOS_CODUSUARIO) VALUES('$nomeProduto','$valorProduto','1')");
header('location:page.php');
?>