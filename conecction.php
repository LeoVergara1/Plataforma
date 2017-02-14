<?php
$conectar = mysqli_connect("mysql.hostinger.mx","u248870289_didac","qwert43211");
$bd = mysqli_select_db($conectar, "u248870289_didac");
    if(!$conectar){
        echo 'No Conecta';
    }
else{
    echo 'Conecta';
    
}
?>