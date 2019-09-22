<?php 

require_once('savetoDB.php');



function check($method,$camp){
	return isset($method,$camp);
}

$errores= array();

if(!check($_POST,'nombre-disfraz')){
    array_push($errores,"Nombre no válido");
}
if(!check($_POST,'descripcion-disfraz')){
    array_push($errores,"Descripción no válida");
}
if(!check($_POST,'categoria-solicitante')){
    array_push($errores,"Categoria no válida");
}
if(!check($_POST,'talla-solicitante')){
    array_push($errores,"Talla no válida");
}
if(!check($_POST,'nombre-solicitante')){
    array_push($errores,"Nombre de solicitante no válido");
}
if(!check($_POST,'email-solicitante')){
    array_push($errores,"Correo no válido");
}
if(!check($_POST,'celular-solicitante')){
    array_push($errores,"Celular no válido");
}
if(!check($_POST,'region-solicitante')){
    array_push($errores,"Region no válida");
}
if(!check($_POST,'comuna-solicitante')){
    array_push($errores,"Comuna no válida");
}

if(count($errores)!=0){
    session_start();
    $_SESSION['errores'] = implode("<br>",$errores);
    redirect_to('Publicar.php');
}    



if(isset($_POST["descripcion-disfraz"]) && isset($_POST["categoria-solicitante"]) && isset($_POST["talla-solicitante"]) && isset($_POST["nombre-solicitante"]) && isset($_POST["email-solicitante"]) && isset($_POST["celular-solicitante"]) && isset($_POST["nombre-disfraz"]) && isset($_POST["region-solicitante"]) && isset($_POST["comuna-solicitante"])){
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
     redirect_to('indexPage.php');
    
    };
}

function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }


?>