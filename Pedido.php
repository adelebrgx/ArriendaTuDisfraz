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
        <script src="js/Validations.js"></script>
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
        
       <div class="volver">
            <a class="btn btn-primary" href="VerPedidos.php" role="button"><i class="fa fa-arrow-left" ></i> Volver a los pedidos</a>
        </div>
        
        <h1> Pedido # <?php $id=$_POST['id']; echo $id; ?> : </h1>
        
        <table class="table table-responsive-sm" id="pedido">
                  <thead>
                    <tr>
           
                      <th scope="col" style="text-align:right;">Nombre Disfraz</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Talla</th>
                      <th scope="col">Región</th>
                      <th scope="col">Comuna</th>
                      <th scope="col">Nombre Solicitante</th>
        
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <?php 
                      $disfraz=$_POST['disfraz'];
                      $categoria=getCategoria($mysqli, $_POST['categoria']);
                      $talla=getTalla($mysqli,$_POST['talla']);
                      $region=$_POST['region'];
                      $comuna=$_POST['comuna'];
                      $nombre=$_POST['nombre'];
                      
                      echo "<td>".$disfraz."</td>
                      <td>".$categoria."</td>
                      <td>".$talla."</td>
                      <td>".$region."</td>
                      <td>".$comuna."</td>
                      <td>".$nombre."</td>
                          
                    
                    " ?>
                      
                      </tr>
                      
                    
                  </tbody>
                </table>
        
       

    
    
    </body>

</html>