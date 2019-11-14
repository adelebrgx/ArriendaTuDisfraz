<?php 


require_once('correspondencias.php');
require_once('db_config.php');


function execute(){
    $mysqli = DbConfig::getConnection();
    $search = $mysqli->real_escape_string($_POST['search']);
    $s=getIdComuna($mysqli,$search);
    
    $query= "SELECT id,comuna, nombre_disfraz, categoria, talla, nombre_contacto, email_contacto FROM disfraz WHERE comuna='$s' ";
    $result = $mysqli->query($query);
   
     echo "<table><tr>
   
    <th>Nombre Disfraz</th>
    <th>Categoria</th>
    <th>Talla</th>
    <th>Nombre Contact</th>
    <th>Correo Contacto</th>
    <th><th>
    </tr>";
         
         while ( $line = mysqli_fetch_assoc($result)) {
             
             $id=$line["id"];
             $nombreDisfraz=$line['nombre_disfraz'];
             $categoria=getCategoria($mysqli,$line["categoria"]);
             $talla=getTalla($mysqli,$line["talla"]);
             $region=getRegion($mysqli,$line["comuna"]);
             $comuna=getComuna($mysqli,$line["comuna"]);
             $nombre=$line["nombre_contacto"];
             $correo=$line["email_contacto"];
             
            
             echo"<tr>";
             echo "<td>".$nombreDisfraz."</td>";
             echo "<td>".$categoria."</td>";
             echo "<td>".$talla."</td>";
             echo "<td>".$nombre."</td>";
             echo "<td>".$correo."</td>";
             echo "<td><form method='post' action='Foto.php'>
             <input type='hidden' name='id' value=".$id.">
             <input type='hidden' name='disfraz' value=".$nombreDisfraz.">
                              <input type='hidden' name='categoria' value=".$line["categoria"].">
                              <input type='hidden' name='talla' value=".$line["talla"].">
                              <input type='hidden' name='region' value=".$region.">
                              <input type='hidden' name='comuna' value=".$comuna.">
                              <input type='hidden' name='nombre' value=".$nombre.">
                              <button type='submit'>Ver más</button></form></td>";
         
            echo"<tr>";
         
         
         }
    
    echo "</table>";
    
    
   
    }

function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }


execute();