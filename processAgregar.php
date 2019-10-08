<?php 

require_once('savetoDB.php');



function checksize($value){
    return strlen($value)!=0;
}
function checkvalue($value){
    return $value!=0;
}

$errores= array();

if(!checksize($_POST['nombre-disfraz']) ){
    array_push($errores,"Nombre de disfraz no válido");
  
}
if(!checksize($_POST['descripcion-disfraz'] || strlen($_POST['descripcion-disfraz'])>=500)){
    array_push($errores,"Descripción no válida");
}
if(!checkvalue($_POST['categoria'])){
    array_push($errores,"Categoria no válida");
}
if($_POST['talla']=="Seleciona una talla"){
    array_push($errores,"Talla no válida");
}
if(!checksize($_POST['nombre']) || strlen($_POST['descripcion-disfraz'])>80 || strlen($_POST['descripcion-disfraz'])<3){
    array_push($errores,"Nombre no válido");
}
if(!checksize($_POST['email']) || !validate_mail($_POST['email'])){
    array_push($errores,"Correo no válido");
}
if(!checksize($_POST['celular']) || !validate_phone($_POST['celular'])){
    array_push($errores,"Celular no válido");
}

if(!checkvalue($_POST['region'])){
    array_push($errores,"Region no válida");
   
}
if(($_POST['comuna'])=="Seleciona una comuna"){
    array_push($errores,"Comuna no válida");
}


if($_FILES['foto']['name']==""){
   array_push($errores,"Foto no válida");

}

foreach($_FILES as $foto){
    if($foto['type']!="image/jpeg" && $foto['type']!="image/png" && $foto['type']!="image/jpg"){
        array_push($errores, "Solo se pueden agregar fotos");
    }
}



if(count($errores)!=0){
    session_start();
    $_SESSION['errores'] = implode("<br>",$errores);
    redirect_to('Agregar.php');
}

function validate_phone($phone){
    return strlen($phone)>=10;
}
function validate_mail($correo){
    return preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$correo);
}

$nombre=$_POST["nombre-disfraz"];
$descripcion=$_POST["descripcion-disfraz"];
$categoria=$_POST["categoria"];
$talla=$_POST["talla"];
$nombresol=$_POST["nombre"];
$email=$_POST["email"];
$celular=$_POST["celular"];
$region=$_POST["region"];
$comuna=$_POST["comuna"];


$fotos=array();
$foto=null;
$foto1=null;
$foto2=null;
$foto3=null;
$foto4=null;

if(isset($_FILES['foto']) && !empty($_FILES['foto'])){
    $foto="foto";
    array_push($fotos, $foto);
    
}

if(isset($_FILES['foto-1']) && !empty($_FILES['foto-1'])){
 $foto1="foto-1";
 array_push($fotos, $foto1);

 
    
}

if(isset($_FILES['foto-2']) && !empty($_FILES['foto-2'])){
 $foto2="foto-2";
 array_push($fotos, $foto2);
 

}

if(isset($_FILES['foto-3']) && !empty($_FILES['foto-3'])){
 $foto3="foto-3";
 array_push($fotos, $foto3);

}

if(isset($_FILES['foto-4']) && !empty($_FILES['foto-4'])){
 $foto4="foto-4";
 array_push($fotos, $foto4);

}
$can=true;
if(count($errores)>0){
    $can=false;
}


if($can){
if (saveDisfraz($nombre, $descripcion,$categoria, $talla,$nombresol,$email,$celular,$region,$comuna, $fotos)){
    session_start();
    $_SESSION['message'] = 'Su disfraz fue agregado a la base de datos';
    redirect_to('indexPage.php');
}
}
function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

?>