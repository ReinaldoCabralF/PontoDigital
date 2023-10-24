<?php
include_once("db.php");
$sql = new MeuSQL();
$sql->conecta();
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if((empty($_POST['email'])) OR (empty($_POST['password']))){
  echo "<script language=Javascript> alert('Email ou Senha Invalidos!')</script>";
  echo("<script>window.location='../index.html';</script>");
}
$email = $_POST['email'];
$senha = $_POST['password'];
$email = mysql_real_escape_string($email);
$senha = MD5($senha);
// Validação do usuário/senha digitados
$sql_user = mysql_query("SELECT * FROM usuarios WHERE email='".$email."' AND senha='".$senha."' AND ativo=1 ORDER BY id_user DESC LIMIT 1");
if (mysql_num_rows($sql_user) > 0){
	$result_user = mysql_fetch_array($sql_user);
	$_SESSION['UsuarioID'] = $result_user['id_user'];
	$_SESSION['UsuarioNome'] = $result_user['nome'];
	$_SESSION['UsuarioEmail'] = $result_user['email'];
	echo("<script>window.location='../dashboard.php';</script>");
}else{
  echo "<script language=Javascript> alert('Email ou Senha Incorretos!')</script>";
  echo("<script>window.location='../index.html';</script>");
}	
?>