<?php

require_once('correspondencias.php');

$db_name="tarea2";
$db_host="localhost";
$db_user="cc5002";
$db_password="programacionweb";

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);
$mysqli->set_charset("utf8");

$query= "SELECT id,comuna, nombre_disfraz, categoria, talla, nombre_contacto FROM disfraz";
$result = $mysqli->query($query);





?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <title>arrienda tu disfraz!</title>
        
         <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <meta charset="utf-8">
        
         <link rel="stylesheet" href="fontawesome-free-5.8.1-web/css/all.css">
      
      

        
    
    
    
    
    
    
    </head>
    <body>
        <div class="topnav" id="myTopnav">
              <a href="indexPage.php" class="active">Inicio</a>
              <a href="Agregar.php">Agregar Disfraz</a>
              <a href="VerDisfraces.php">Ver Disfraces</a>
              <a href="Publicar.php">Publicar Pedido</a>
              <a href="VerPedidos.php">Ver Pedidos</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
              </a>
            </div>
        
        <h1> Disfraces disponibles:  </h1>
        
        
             <table class="table table-responsive-sm" id="disfraces" >
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre Disfraz</th>
                      <th scope="col">Región</th>
                      <th scope="col">Comuna</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Talla</th>
                      <th scope="col">Nombre Contacto</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                      <?php 
                      
                      
                      while ( $line = mysqli_fetch_assoc($result)) {
                          
                          $id=$line["id"];
                          $nombreDisfraz=$line['nombre_disfraz'];
                          $categoria=getCategoria($mysqli,$line["categoria"]);
                          $talla=getTalla($mysqli,$line["talla"]);
                          $region=getRegion($mysqli,$line["comuna"]);
                          $comuna=getComuna($mysqli,$line["comuna"]);
                          $nombre=$line["nombre_contacto"];
                          
                          echo "<tr>
                              <th scope='row'>".$id."</th>
                              <td>".$nombreDisfraz."</td>
                              <td>".$region."</td>
                              <td>".$comuna."</td>
                              <td>".$categoria."</td>
                              <td>".$talla."</td>  
                              <td>".$nombre."</td>
                              <td><form method='post' action='Disfraz.php'>
                              <input type='hidden' name='id' value=".$id.">
                              <input type='hidden' name='disfraz' value=".$nombreDisfraz.">
                              <input type='hidden' name='categoria' value=".$line["categoria"].">
                              <input type='hidden' name='talla' value=".$line["talla"].">
                              <input type='hidden' name='region' value=".$region.">
                              <input type='hidden' name='comuna' value=".$comuna.">
                              <input type='hidden' name='nombre' value=".$nombre.">
                              <button type='submit' class='btn btn-primary'>Ver más</button></form></td>
                            </tr>";
                           
                           
                    
                            }
                      
                         ?>
                    
                      
                  </tbody>
                </table>


<script>
    
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

    
</script>
        
       
        
    
    </body>

</html>