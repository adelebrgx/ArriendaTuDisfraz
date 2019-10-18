<?php 


require_once('correspondencias.php');
require_once('db_config.php');


function execute(){
    $mysqli = DbConfig::getConnection();
    $search = $mysqli->real_escape_string($_POST['search']);
    
    $query= "SELECT id,comuna, nombre_disfraz, categoria, talla, nombre_contacto FROM disfraz WHERE nombre_disfraz LIKE '%$search%' ";
    $result = $mysqli->query($query);
    if($result->num_rows==0){
        echo "<p> Lo siento pero no existen disfraces con este nombre</p>";
    }
    else{
         while ( $line = mysqli_fetch_assoc($result)) {
             
             $id=$line["id"];
             $nombreDisfraz=$line['nombre_disfraz'];
             $categoria=getCategoria($mysqli,$line["categoria"]);
             $talla=getTalla($mysqli,$line["talla"]);
             $region=getRegion($mysqli,$line["comuna"]);
             $comuna=getComuna($mysqli,$line["comuna"]);
             $nombre=$line["nombre_contacto"];
             
             
             echo "<form method='post' action='Disfraz.php'>
                              <input type='hidden' name='id' value=".$id.">
                              <input type='hidden' name='disfraz' value=".$nombreDisfraz.">
                              <input type='hidden' name='categoria' value=".$line["categoria"].">
                              <input type='hidden' name='talla' value=".$line["talla"].">
                              <input type='hidden' name='region' value=".$region.">
                              <input type='hidden' name='comuna' value=".$comuna.">
                              <input type='hidden' name='nombre' value=".$nombre.">
                              <button type='submit'>".$nombreDisfraz."</button></form>";}
    }
   
    }

function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }


execute();







?>