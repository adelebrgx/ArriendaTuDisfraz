<?php

require_once('correspondencias.php');
require_once('db_config.php');

$mysqli = DbConfig::getConnection();

if (isset($_GET["page"])){ 
    $page  = $_GET["page"]; } 
else { 
    $page=1; }

$results_per_page=5;
$start_from = ($page-1) * $results_per_page;

$query= "SELECT id,comuna, nombre_disfraz, categoria, talla, nombre_contacto FROM disfraz LIMIT $start_from,$results_per_page";
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
        <script src="js/Validations.js"></script>
      
      

        
    
    
    
    
    
    
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
        
        <div class="links">
                    <?php 
                $sql = "SELECT COUNT(ID) AS total FROM pedido";
                $result = $mysqli->query($sql);
                $row = $result->fetch_assoc();
                $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

                for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                            echo "<a id='link' href='VerDisfraces.php?page=".$i."'";
                            if ($i==$page)  echo " class='curPage'";
                            echo ">".$i."</a> "; 
                }; 
                ?>   

    </div>
        
       
        
    
    </body>

</html>