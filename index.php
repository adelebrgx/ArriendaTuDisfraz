<?php 
require_once("correspondencias.php");

session_start();
$message="";
if(!empty($_SESSION['message'])) {
   $message = $_SESSION['message'];}
?>


<!DOCTYPE html>
<html>
    
    <head>
        
        <title>arrienda tu disfraz!</title> 
         <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <script src="js/Validations.js"></script>
        
        <meta charset="utf-8">       
        <link rel="stylesheet" href="fontawesome-free-5.8.1-web/css/all.css">
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/search.js"></script>
        
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
       integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
       crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
       integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
       crossorigin=""></script>
        
    <script>
        
           
        
        
        
        
        
    </script>
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
        
        
        <h1> Arrienda tu disfraz! </h1>
        
        <h3> Qué estás buscando ? </h3>
        
        
        <?php echo '<h3 style="color:red;">'.$message.'</h3>';
            unset($_SESSION['message']);?>
        
        <div class="options"><br>
            <input id="search" type="text" placeholder="Buscar un disfraz.."><br><br>
            
            <div id="results"></div>
            
            <a class="btn btn-secondary" href="Agregar.php" role="button"> Agregar Disfraz</a><br>
            <a class="btn btn-secondary" href="VerDisfraces.php" role="button"> Ver los disfraces disponibles</a><br>
            <a class="btn btn-secondary" href="Publicar.php" role="button"> Publicar Pedido</a><br>
            <a class="btn btn-secondary" href="VerPedidos.php" role="button"> Ver los pedidos actuales</a><br>

            
            <div style="width: 100%; height: 600px;" id="mapid"></div>
            <div id="cities"></div>
        
        </div>
        
        
        

  <script>
        var map = L.map('mapid', {
            center: [-33.437, -70.6506],
            zoom: 8
        });
        
      var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
      
      map.addLayer(layer);
      
    

        
        </script>
    
    </body>


</html>

