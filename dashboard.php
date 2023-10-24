<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php
include_once("security/funcoes.php");
$ip_externo = $_SERVER['REMOTE_ADDR'];
$ip_ext = $_SERVER['REMOTE_HOST'];
echo "<br>IPE: ".get_client_ip();
if($ip_externo == "201.182.166.133"){
	echo 'Localizaçao: Escritório';
}else{
	echo "<br>Externo: IP: ".$ip_externo;
}
if (isMobile()){
	echo "<br>Navegação em Dispositivo Móvel";
}else{
    echo "<br>Navegação em Desktop";
}
echo '<br><br>';
echo '<b>HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'].'</b>';
?>
</body>
</html>