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
                    <tr>
                      <th scope="row">1</th>
                      <td>Soldado Espacial Stormtrooper</td>
                      <td>III</td>
                      <td>Huasco</td>
                      <td>Infantil Unisex</td>
                      <td>8-9 años</td>
                      <td>Liana Pino Arenes Nuero</td>
                      <td><a class="btn btn-primary" href="Disfraz1.html" role="button">Ver más</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Hulk - Camisa Musculosa</td>
                      <td>I</td>
                      <td>Iquique</td>
                      <td>Infantil niño</td>
                      <td>4-5 años</td>
                      <td>Trinidad V. Llantada Gorostegui</td>
                      <td><a class="btn btn-primary" href="Disfraz2.html" role="button">Ver más</a></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Elefante Gigante</td>
                      <td>XIII</td>
                      <td>Santiago</td>
                      <td>Adulto unisex</td>
                      <td>M</td>
                      <td>Lucía Lapieza Cerdeiriña</td>
                      <td><a class="btn btn-primary" href="Disfraz3.html" role="button">Ver más</a></td>
                    </tr>
                      <tr>
                      <th scope="row">4</th>
                      <td>Dinosaurio</td>
                      <td>V</td>
                      <td>Valparaíso</td>
                      <td>Hombre</td>
                      <td>XL</td>
                      <td>Oliverio Roberto Tarela Abdessamie</td>
                      <td><a class="btn btn-primary" href="Disfraz4.html" role="button">Ver más</a></td>
                    </tr>
                      <tr>
                      <th scope="row">5</th>
                      <td>Peter Pan</td>
                      <td>XIII</td>
                      <td>Maipo</td>
                      <td>Mujer</td>
                      <td>S</td>
                      <td>Wilfredo D. Ayude Zarrouk</td>
                      <td><a class="btn btn-primary" href="Disfraz5.html" role="button">Ver más</a></td>
                    </tr>
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