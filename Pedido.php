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
        
       <div class="volver">
            <a class="btn btn-primary" href="VerPedidos.html" role="button"><i class="fa fa-arrow-left" ></i> Volver a los pedidos</a>
        </div>
        
        <h1> Pedido #2: </h1>
        
        <table class="table table-responsive-sm" id="pedido">
                  <thead>
                    <tr>
           
                      <th scope="col">Nombre Disfraz</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Talla</th>
                      <th scope="col">Región</th>
                      <th scope="col">Comuna</th>
                      <th scope="col">Nombre Solicitante</th>
        
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <td><?php $text=$_POST['text']; echo $text; ?></td>
                      <td>Infantil Unisex</td>
                      <td>2-3 años</td>
                      <td>II</td>
                      <td>Calama</td>
                      <td>Olivia Virginia Sohail Basas</td>
                  
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