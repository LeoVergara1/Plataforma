<?php
include 'conecction.php';
    $name = $_POST["firstname1"];
    $lastname = $_POST["lastname1"];
    $user = $_POST["username1"];
    $email = $_POST["email1"];
    $pass = $_POST["password1"];
$insert = "INSERT INTO usuarios(name,firstname,secondname,email,password) values('$name','$lastname','$user','$email','$pass')";
    
    $rquery = mysqli_query($conectar, $insert);
if(!$rquery){
    echo "$insert";
}
else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Usuario registrado, Inicia Sesión con tus datos");'; 
            echo 'window.location.href = "login.html";';
            echo '</script>'; 
    
}
mysqli_close($conectar);

?>
