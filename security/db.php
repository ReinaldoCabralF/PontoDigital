<?php
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, cachehack=".time());
header("Cache-Control: no-store, must-revalidate");
header("Cache-Control: post-check=-1, pre-check=-1", false);


date_default_timezone_set('America/Sao_Paulo');
$data_sistema = date('d/m/Y H:i'); 

class MeuSQL {
// Propriedades
    var $servidor = '108.179.253.207:3306';
    var $usuario = 'sysecf37_pontodigital';
    var $senha = '5m1xw3b@';
    var $banco = 'sysecf37_pontodigital';
    var $conexao = null;
    var $query = null;
	
    function conecta() {
        $this->conexao = mysql_connect($this->servidor, $this->usuario, $this->senha);
        $status = mysql_select_db($this->banco, $this->conexao);
        return $status;
    }

    function consulta($query) {
        $this->query = mysql_query($query);
        return $this->query;
    }

    function resultado() {
        return @mysql_fetch_assoc($this->query);
    }

    function registros() {
        return @mysql_num_rows($this->query);
    }
}
?>