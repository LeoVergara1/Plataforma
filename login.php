<?php
include 'conecction.php';
    session_start();
    if(!empty($_POST)){
        
        $email = $_POST["email1"];
        $pass = $_POST["password1"];
        $error = '';
        echo $email;
        
        $sql = "select id from usuarios where email = '$email' and password = '$pass'";
        $result = mysqli_query($conectar, $sql);
        $rows = $result->num_rows;    
        
        if($rows >0){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            
            header("location: index.html");
        }
        else{
            $error = "El nombre o usuario son incorrectos";
                echo $error;
        }
    }
        
?>