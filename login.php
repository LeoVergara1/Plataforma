<?php
include 'conecction.php';
    session_start();
    if(!empty($_POST)){
        
        $email = $_POST["email1"];
        $pass = $_POST["password1"];
        $error = '';
        
        
        $sql = "select id from usuarios where email = '$email' and password = '$pass'";
        $result = mysqli_query($conectar, $sql);
        $rows = $result->num_rows;    
        
        if($rows >0){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            
            echo '<script type="text/javascript">'; 
            echo 'alert("Haz iniciado sesión $email");'; 
            echo 'window.location.href = "index.html";';
            echo '</script>';
        }
        else{
            $error = "El nombre o usuario son incorrectos";
                echo $error;
            echo '<script type="text/javascript">'; 
            echo 'alert("Usuario o Contraseña no correctos");'; 
            echo 'window.location.href = "login.html";';
            echo '</script>';
        }
    }
        
?>