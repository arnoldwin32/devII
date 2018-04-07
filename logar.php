<?php 
session_start();
$login = $_POST['loginname'];
$senha = $_POST['password'];
$con = mysql_connect("127.0.0.1", "root", "usbw") or die ("Sem conexão com o servidor");
$select = mysql_select_db("mydb") or die("Sem acesso ao DB, Entre em contato com o Administrador, gilson_sales@bytecode.com.br");
 
$result = mysql_query("SELECT PESSOAS.NOME FROM `USUARIOS` INNER JOIN PESSOAS ON PESSOAS.CODPESSOA = USUARIOS.PESSOAS_CODPESSOA WHERE `CODUSUARIO` = '$login' AND `SENHA`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['loginname'] = $login;
$_SESSION['password'] = $senha;
header('location:paginalogada.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');
    }
 
?>