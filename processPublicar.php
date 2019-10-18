<?php 

require_once('savetoDB.php');


function checksize($value){
    return strlen($value)!=0;
}
function checkvalue($value){
    return $value!=0;
}



$errores= array();

if(!checksize($_POST['nombre-disfraz'])){
    array_push($errores,"Nombre no válido");
}
if(!checksize($_POST['descripcion-disfraz']) || strlen($_POST['descripcion-disfraz'])>=500){
    array_push($errores,"Descripción no válida");
}
if(!checkvalue($_POST['categoria-solicitante'])){
    array_push($errores,"Categoria no válida");
}
if($_POST['talla-solicitante']=="Seleciona una talla"){
    array_push($errores,"Talla no válida");
}
if(!checksize($_POST['nombre-solicitante']) || strlen($_POST['nombre-solicitante'])<3 || strlen($_POST['descripcion-disfraz'])>=80){
    array_push($errores,"Nombre de solicitante no válido");
}
if(!checksize($_POST['email-solicitante']) || !validate_mail($_POST['email-solicitante'])){
    array_push($errores,"Correo no válido");
}
if(!checksize($_POST['celular-solicitante']) || !validate_phone($_POST['celular-solicitante'])){
    array_push($errores,"Celular no válido");
}
if(!checksize($_POST['region-solicitante'])){
    array_push($errores,"Region no válida");
}
if(!checksize($_POST['comuna-solicitante'])){
    array_push($errores,"Comuna no válida");
}


function validate_phone($phone){
    return strlen($phone)>=10;
}
function validate_mail($correo){
    return preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$correo);
}

if(count($errores)!=0){
    session_start();
    $_SESSION['errores'] = implode("<br>",$errores);
    redirect_to('Publicar.php');
}    
$can=true;
   
if(count($errores)!=0){
    $can=false;
}
if($can){


    $nombre=$_POST["nombre-disfraz"];
    $descripcion=$_POST["descripcion-disfraz"];
    $categoria=$_POST["categoria-solicitante"];
    $talla=$_POST["talla-solicitante"];
    $nombresol=$_POST["nombre-solicitante"];
    $email=$_POST["email-solicitante"];
    $celular=$_POST["celular-solicitante"];
    $region=$_POST["region-solicitante"];
    $comuna=$_POST["comuna-solicitante"];

    if (savePedido($nombre, $descripcion,$categoria, $talla,$nombresol,$email,$celular,$region,$comuna)){
     echo "hello";
        session_start();
     $_SESSION['message'] = 'Su pedido fue agregado a la base de datos';
     redirect_to('index.php');
    
    };
}


function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }


?>