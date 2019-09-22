<?php 
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
        
            <?php echo '<h3 style="color:red;">'.$message.'</h3>';
            unset($_SESSION['message']);?>
        
        <h1> Arrienda tu disfraz! </h1>
        
        <h3> Qué estás buscando ? </h3>
        
        <div class="options">
            <a class="btn btn-secondary" href="Agregar.php" role="button"> Agregar Disfraz</a><br>
            <a class="btn btn-secondary" href="VerDisfraces.php" role="button"> Ver los disfraces disponibles</a><br>
            <a class="btn btn-secondary" href="Publicar.php" role="button"> Publicar Pedido</a><br>
            <a class="btn btn-secondary" href="VerPedidos.php" role="button"> Ver los pedidos actuales</a><br>

        
        </div>
        

  
    
    </body>


</html>