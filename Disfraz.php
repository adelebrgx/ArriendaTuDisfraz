<?php

require_once('correspondencias.php');
require_once('db_config.php');

$mysqli = DbConfig::getConnection();

 



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
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/search.js"></script>
        
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
       integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
       crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
       integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
       crossorigin=""></script>
    
    </head>
    <body>
        
        
        <div class="topnav" id="myTopnav">
              <a href="index.php" class="active">Inicio</a>
              <a href="Agregar.php">Agregar Disfraz</a>
              <a href="VerDisfraces.php">Ver Disfraces</a>
              <a href="Publicar.php">Publicar Pedido</a>
              <a href="VerPedidos.php">Ver Pedidos</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
        
        <div class="volver">
            <a class="btn btn-primary" href="VerDisfraces.php" role="button"><i class="fa fa-arrow-left" ></i> Volver a los disfraces disponibles</a>
        </div>
        
        
        <h1> Disfraz #<?php $id=$_POST['id']; echo $id; ?> :  </h1>
        
        <input id="search" type="text" placeholder="Buscar un disfraz.."><br><br>
            
        <div id="results"></div>
        
        
             <table class="table table-responsive-sm" id="disfraz">
                  <thead>
                    <tr>
                      <th scope="col">Nombre Disfraz</th>
                      <th scope="col">Región</th>
                      <th scope="col">Comuna</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Talla</th>
                      <th scope="col">Nombre Contacto</th>
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
                      <td>".$region."</td>
                      <td>".$comuna."</td>
                      <td>".$categoria."</td>
                      <td>".$talla."</td>
                      <td>".$nombre."</td>  
                    " ;
                          
                    $path=getPath($mysqli, $_POST['id']);
                    echo " </tr>
                          </tbody>
                        </table>

                        <h3> Fotos(s):</h3>


                        <div class='images'>
                            <div class='popup' onclick='throwImage();'><img src=".$path." alt='No se pudó desplegar el imagen' height='320' width='240' >
                            <img id='myPopup' src=".$path." height='800' width='600' class='popuptext'>
                            </div>
                        </div>"
                        
                        ?>
    
                      </tr>
                 </tbody>
        </table>
        
        
        
        <script>
  
    
    function throwImage(){
      
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
        


    }

    
</script>
       
        
    
    </body>

</html>