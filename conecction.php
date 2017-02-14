<?php
$conectar = mysqli_connect("mysql.hostinger.mx","u248870289_didac","didac12");
    if(!$conectar){
        echo 'No Conecta';
    }
else{
    echo 'Conecta';
}
?>