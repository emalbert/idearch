<?php

$errorMSG = "";

// NAME
if (empty($_POST["nombre"])) {
    $errorMSG = "El nombre es requerido ";
} else {
    $nombre = $_POST["nombre"];
}

// TELEFONO
if (empty($_POST["telefono"])) {
    $errorMSG .= "El teléfono es requerido ";
} else {
    $telefono = $_POST["telefono"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "El email es requerido ";
} else {
    $email = $_POST["email"];
}


// MESSAGE
if (empty($_POST["mensaje"])) {
    $errorMSG .= "El mensaje es requerido ";
} else {
    $mensaje = $_POST["mensaje"];
}


$EmailTo = "emalbert@gmail.com";
$Subject = "Nuevo mensaje desde la web";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "Desde:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>