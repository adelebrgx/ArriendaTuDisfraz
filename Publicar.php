<?php

session_start();
$errores="";
if(!empty($_SESSION['errores'])) {
   $errores = $_SESSION['errores'];}

?>


<!DOCTYPE html>
<html>
    
    <head>
        
        <title>arrienda tu disfraz!</title>
        
         <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="stylesheet" href="css/bootstrap.css"/>
        <meta charset="utf-8">
        
    
        <script src="Validations.js"></script>
        
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
        
        <h1> Publica tu pedido:  </h1>
        
        <?php echo '<h3 style="color:red;">'.$errores.'</h3>';
            unset($_SESSION['errores']);?>
        
        <div class="form">
            <form action="processPublicar.php" method="post" >
              
                
            <div class="form-row">
              <div class="form-group">
                <label for="nombre-disfraz"><strong>Nombre de disfraz </strong></label><br>
                <input type="text"  cols="30"   name="nombre-disfraz" id="nombre-disfraz" placeholder="Princesa azul">
              </div>
                
              <div class="form-group" style="margin-left:1%;">
                <label for="descripcion-disfraz"><strong>Descripción de disfraz </strong></label><br>
                  <input type="text" cols="40" rows="8"  name="descripcion-disfraz" id="descripcion-disfraz" placeholder="Un disfraz de princesa azul, para niñas de entre 6 y 10 años.">
              </div>
                
                
              
                <div class="form-group" style="margin-left:3%; width:20%; ">
                  <label for="categoria-solicitante"><strong>Categoría </strong></label>
                  <select name="categoria-solicitante" id="categoria-solicitante" class="form-control" onchange="{mySize2(this.options[this.selectedIndex].value);}">
                    <option value="0"> Selecciona una categoría</option>
                    <option value="1">Infantil Niña</option>
                    <option value="2">Infantil Niño</option>
                    <option value="3">Infantil unisex</option>
                    <option value="4">Mujer</option>
                    <option value="5">Hombre</option>
                    <option value="6">Adulto Unisex</option>     
                  </select>
                </div>
                
            
                  
                <div class="form-group" style="margin-left:1%; width:25%;">
                  <label for="talla-solicitante"> <strong>Talla </strong></label>
                  <select name= "talla-solicitante" id="talla-solicitante" class="form-control">  
                      <option value="0" >Selecciona una talla </option>
                  </select>
                </div>
                


              </div>
                
                
                <div class="form-row">
                    <div class="form-group">
                    <label for="nombre-solicitante"><strong>Nombre del solicitante </strong></label><br>
                    <input type="text" cols="80" name="nombre-solicitante" id="nombre-solicitante" placeholder="Adèle Bourgeix">
                    
                    
                    
                    </div>
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="email-solicitante"><strong>Correo de contacto del solicitante</strong></label><br>
                    <input type="text" cols="30" name="email-solicitante" id="email-solicitante" placeholder="adele.bourgeix@gmail.com">
                    </div>
                    
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="celular-solicitante"><strong>Número de cellular del solicitante </strong></label><br>
                    <input type="text" name="celular-solicitante" cols="15" id="celular-solicitante" placeholder="+56xxxxxxxxx">
                    </div>
                
                
                 
                
                </div>
                
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="region-solicitante"><strong>Región del solicitante</strong></label>
                   <select name="region-solicitante" id="region-solicitante" class="form-control" multiple onchange="{myCity2(this.options[this.selectedIndex].value);}">
                        <option  value="1" >I de Tarapacá</option>
                        <option  value="2" >II de Antofagasta</option>
                        <option  value="3" >III de Atacama</option>
                        <option  value="4" >IV de Coquimbo</option>
                        <option  value="5" >V de Valparaíso</option>
                        <option  value="6" >VI del Libertador General Bernardo O'Higgins</option>
                        <option  value="7" >VII del Maule</option>
                        <option  value="8" >VIII de Concepción </option>
                        <option  value="9" >IX de la Araucanía</option>
                        <option  value="10" >X de Los Lagos</option>
                        <option  value="11" >XI de Aysén del General Carlos Ibañez del Campo</option>
                        <option  value="12" >XII de Magallanes y de la Antártica Chilena </option>
                        <option  value="13" >Metropolitana de Santiago</option>
                        <option  value="14" >XIV de Los Ríos</option>
                        <option  value="15" >XV de Arica y Parinacota</option>

                      </select>
                    
                  
  
                </div>
                <div class="form-group col-md-6">
                  <label for="comuna-solicitante"><strong>Comuna del solicitante</strong></label>
                      <select name="comuna-solicitante" id="comuna-solicitante"  class="form-control" multiple>
                      </select>
                </div>
              </div>
                
                <div class="button-confirm" style="text-align:center; margin-top:2%;">
                <button type="submit" class="btn btn-secondary" onclick="return errorPublicar();" >Publica tu pedido !</button></div>
                
            </form>
        </div>

    </body>
    


</html>