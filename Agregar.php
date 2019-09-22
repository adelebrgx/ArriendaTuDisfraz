<?php 
session_start();
$errores="";
if(!empty($_SESSION['errores'])) {
   $errores = $_SESSION['errores'];}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8"> 
        <title>arrienda tu disfraz!</title>   
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> 
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
        
        <h1> Agrega tu disfraz: </h1>
        
        <?php echo '<h3 style="color:red;">'.$errores.'</h3>';
            unset($_SESSION['errores']);?>
        
        <div class="form">
            <form action="processAgregar.php"  method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="region"><strong>Region </strong></label>
                   <select name ="region" id="region" class="form-control" onchange="{myCity(this.options[this.selectedIndex].value);}">
                       <option value="0"> Selecciona una región</option>
                        <option  value="1">I de Tarapacá</option>
                        <option  value="2">II de Antofagasta</option>
                        <option  value="3">III de Atacama</option>
                        <option  value="4">IV de Coquimbo</option>
                        <option  value="5">V de Valparaíso</option>
                        <option  value="6">VI del Libertador General Bernardo O'Higgins</option>
                        <option  value="7">VII del Maule</option>
                        <option  value="8">VIII de Concepción </option>
                        <option  value="9">IX de la Araucanía</option>
                        <option  value="10">X de Los Lagos</option>
                        <option  value="11">XI de Aysén del General Carlos Ibañez del Campo</option>
                        <option  value="12">XII de Magallanes y de la Antártica Chilena </option>
                        <option  value="13">Metropolitana de Santiago</option>
                        <option  value="14">XIV de Los Ríos</option>
                        <option  value="15">XV de Arica y Parinacota</option>

                      </select>
  
                </div>
                <div class="form-group col-md-6">
                  <label for="comuna"><strong>Comuna </strong></label>
                      <select name="comuna" id="comuna"  class="form-control">
                          <option value="0"> Seleciona una comuna</option>
                      </select>
                </div>
              </div>
                
            <div class="form-row">
              <div class="form-group" style="margin-left:0.5%;">
                <label for="nombre-disfraz"><strong>Nombre de disfraz </strong></label><br>
                <input type="text" name="nombre-disfraz" cols="30"   id="nombre-disfraz" placeholder="Princesa azul">
              </div>
                
              <div class="form-group" style="margin-left:1%;">
                <label for="descripcion-disfraz"><strong>Descripción de disfraz </strong></label><br>
                  <input type="text" name="descripcion-disfraz" cols="40" rows="8"  id="descripcion-disfraz" placeholder="Un disfraz de princesa azul, para niñas de entre 6 y 10 años.">
              </div>
                
                
              
                <div class="form-group" style="margin-left:3%; width:20%; ">
                  <label for="categoria"><strong>Categoría </strong></label>
                  <select name="categoria" id="categoria" class="form-control" onchange="{mySize1(this.options[this.selectedIndex].value);}">
                    <option value="0"> Seleciona una categoría</option>
                    <option value="1">Infantil Niña</option>
                    <option value="2">Infantil Niño</option>
                    <option value="3">Infantil unisex</option>
                    <option value="4">Mujer</option>
                    <option value="5">Hombre</option>
                    <option value="6">Adulto Unisex</option>     
                  </select>
                </div>
                
            
                  
                <div class="form-group" style="margin-left:1%; width:25%;">
                  <label for="talla"> <strong>Talla </strong></label>
                  <select name="talla" id="talla" class="form-control">  
                      <option value="0" >Seleciona una talla </option>
                  </select>
                </div>
                


              </div>
                
                <div class="form-group" id="newFile">
                    <label for="Foto-disfraz"> <strong>Ingresa una foto:</strong> </label><br>
                    <input  name="foto" type="file" id="Foto">
                    <button onclick="newArchivo()">Agregar otra foto</button><br>
                    <p id="stop"></p>
                
                
                
                </div>
                
                
                <div class="form-row">
                    <div class="form-group">
                    <label for="nombre"><strong>Nombre de contacto </strong></label><br>
                    <input type="text" name="nombre" cols="80" id="nombre" placeholder="Adèle Bourgeix">
                    
                    
                    
                    </div>
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="email"><strong>Correo de contacto </strong></label><br>
                    <input type="text" name="email" cols="30" id="email" placeholder="adele.bourgeix@gmail.com">
                    </div>
                    
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="celular"><strong>Número de cellular de contacto </strong></label><br>
                    <input type="text" name="celular" cols="15" id="celular" placeholder="+56xxxxxxxxx">
                    </div>
                
                
                 
                
                </div>
                
                <div class="button-confirm" style="text-align:center; margin-top:2%;">
                <button type="submit" class="btn btn-secondary" onclick=" return errorAgregar();" >Recicla tu disfraz !</button></div>
                
            </form>
        </div>
     
        
   
    
    </body>

<script>
 


var cont=0;  
    
function newArchivo() {
        var elem= document.getElementById("newFile").childElementCount;
        if (cont<4){
            var r=document.createElement("INPUT");
            r.setAttribute("type", "file");
            if(cont==0){r.id="foto-1"; document.getElementById("newFile").innerHTML += "<input type='file' name='foto-1' id='foto-1'><br>";}
            if(cont==1){r.id="foto-2"; document.getElementById("newFile").innerHTML += "<input type='file' name='foto-2' id='foto-2'><br>";}
            if(cont==2){r.id="foto-3"; document.getElementById("newFile").innerHTML += "<input type='file' name='foto-3' id='foto-3'><br>";}
            if(cont==3){r.id="foto-4"; document.getElementById("newFile").innerHTML += "<input type='file' name='foto-4' id='foto-4'><br>";}
            
            //document.getElementById("newFile").appendChild(r);
            
            cont++;
                }
        else{
             document.getElementById("newFile").innerHTML += " ";
        }
       
}
    
</script>


</html>