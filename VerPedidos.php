<?php

require_once('correspondencias.php');

$db_name="tarea2";
$db_host="localhost";
$db_user="cc5002";
$db_password="programacionweb";

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);
$mysqli->set_charset("utf8");

$query= "SELECT id,nombre_disfraz,categoria,talla,nombre_solicitante,comuna_solicitante FROM pedido";
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
              <a href="index.html" class="active">Inicio</a>
              <a href="Agregar.html">Agregar Disfraz</a>
              <a href="VerDisfraces.html">Ver Disfraces</a>
              <a href="Publicar.html">Publicar Pedido</a>
              <a href="VerPedidos.html">Ver Pedidos</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
        
        <h1> Pedidos actuales: </h1>

        
        
             <table class="table table-responsive-sm" id="pedidos">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre Disfraz</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Talla</th>
                      <th scope="col">Región</th>
                      <th scope="col">Comuna</th>
                      <th scope="col">Nombre Solicitante</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <?php 
                      
                      
                      while ( $line = mysqli_fetch_assoc($result)) {
                          
                          echo "<tr>
                              <th scope='row'>".$line["id"]."</th>
                              <td>".$line['nombre_disfraz']."</td>
                              <td>".getCategoria($mysqli,$line["categoria"])."</td>
                              <td>".getTalla($mysqli,$line["talla"])."</td>
                              <td>".getRegion($mysqli,$line["comuna_solicitante"])."</td>
                              <td>".getComuna($mysqli,$line["comuna_solicitante"])."</td>
                              <td>".$line["nombre_solicitante"]."</td>
                              <td><form method='post' action='Pedido.php'><input type='hidden' name='text' value=".$line['nombre_disfraz']."><button type='submit'>Ver mas</button></form></td>
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