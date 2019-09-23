<?php 

require_once('savetoDB.php');




function check($method,$camp){
	return isset($method,$camp);
}

$errores= array();

if(!check($_POST,'nombre-disfraz')){
    array_push($errores,"Nombre de disfraz no válido");
}
if(!check($_POST,'descripcion-disfraz')){
    array_push($errores,"Descripción no válida");
}
if(!check($_POST,'categoria')){
    array_push($errores,"Categoria no válida");
}
if(!check($_POST,'talla')){
    array_push($errores,"Talla no válida");
}
if(!check($_POST,'nombre')){
    array_push($errores,"Nombre no válido");
}
if(!check($_POST,'email')){
    array_push($errores,"Correo no válido");
}
if(!check($_POST,'celular')){
    array_push($errores,"Celular no válido");
}
if(!check($_POST,'region')){
    array_push($errores,"Region no válida");
}
if(!check($_POST,'comuna')){
    array_push($errores,"Comuna no válida");
}

if(!check($_FILES,'foto')){
    array_push($errores,"Foto no válida");
}

if(count($errores)!=0){
    session_start();
    $_SESSION['errores'] = implode("<br>",$errores);
    redirect_to('Agregar.php');
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


if (saveDisfraz($nombre, $descripcion,$categoria, $talla,$nombresol,$email,$celular,$region,$comuna, $fotos)){
    session_start();
    $_SESSION['message'] = 'Su disfraz fue agregado a la base de datos';
    redirect_to('indexPage.php');
}

function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

?>