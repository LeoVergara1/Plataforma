<?php
$conectar = mysql_connect("mysql.hostinger.mx","u248870289_didac","didac12")
if (!$conectar){
	echo 'Error'
}
else {
	echo 'Conectado'
}
?>