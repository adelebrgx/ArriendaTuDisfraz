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
        
        <h1> Agrega tu disfraz: </h1>
        
        <div class="form">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="region"><strong>Region </strong></label>
                   <select id="region" class="form-control" onchange="{myCity(this.options[this.selectedIndex].value);}">
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
                      <select id="comuna"  class="form-control">
                          <option value="0"> Seleciona una comuna</option>
                      </select>
                </div>
              </div>
                
            <div class="form-row">
              <div class="form-group" style="margin-left:0.5%;">
                <label for="nombre-disfraz"><strong>Nombre de disfraz </strong></label><br>
                <textarea  cols="30"   id="nombre-disfraz" placeholder="Princesa azul"></textarea>
              </div>
                
              <div class="form-group" style="margin-left:1%;">
                <label for="descripcion-disfraz"><strong>Descripción de disfraz </strong></label><br>
                  <textarea  cols="40" rows="8"  id="descripcion-disfraz" placeholder="Un disfraz de princesa azul, para niñas de entre 6 y 10 años."></textarea>
              </div>
                
                
              
                <div class="form-group" style="margin-left:3%; width:20%; ">
                  <label for="categoria"><strong>Categoría </strong></label>
                  <select id="categoria" class="form-control" onchange="{mySize(this.options[this.selectedIndex].value);}">
                    <option value="0"> Seleciona una categoría</option>
                    <option value="1">Infantil Niña</option>
                    <option value="1">Infantil Niño</option>
                    <option value="1">Infantil unisex</option>
                    <option value="2">Mujer</option>
                    <option value="2">Hombre</option>
                    <option value="2">Adulto Unisex</option>     
                  </select>
                </div>
                
            
                  
                <div class="form-group" style="margin-left:1%; width:25%;">
                  <label for="talla"> <strong>Talla </strong></label>
                  <select id="talla" class="form-control">  
                      <option value="0" >Seleciona una talla </option>
                  </select>
                </div>
                


              </div>
                
                <div class="form-group" id="newFile">
                    <label for="Foto-disfraz"> <strong>Ingresa una foto:</strong> </label><br>
                    <input type="file" id="Foto-disfraz">
                    <button onclick="newArchivo()">Agregar otra foto</button><br>
                    <p id="stop"></p>
                
                
                
                </div>
                
                
                <div class="form-row">
                    <div class="form-group">
                    <label for="nombre"><strong>Nombre de contacto </strong></label><br>
                    <textarea cols="80" id="nombre" placeholder="Adèle Bourgeix"></textarea>
                    
                    
                    
                    </div>
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="email"><strong>Correo de contacto </strong></label><br>
                    <textarea cols="30" id="email" placeholder="adele.bourgeix@gmail.com"></textarea>
                    </div>
                    
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="celular"><strong>Número de cellular de contacto </strong></label><br>
                    <textarea cols="15" id="celular" placeholder="+56xxxxxxxxx"></textarea>
                    </div>
                
                
                 
                
                </div>
                
                <div class="button-confirm" style="text-align:center; margin-top:2%;">
                <button type="button" class="btn btn-secondary" onclick="error();" >Recicla tu disfraz !</button></div>
                
            </form>
        </div>
     
        
   

    
<script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    
    
function myCity(value){
    var x = document.getElementById("comuna");
    x.options.length=0;
    var ciudades;
        if(value==1){
            ciudades=["Seleciona una comuna","Iquique", "Alto Hospicio", "Pozo Almonte", "Camiña", "Colchane", "Huara", "Pica"];
        }
    else if(value==2){
        ciudades=["Seleciona una comuna","Antofagasta", "Mejillones", "Sierra Gorda", "Taltal", "Calama", "Ollagüe", "San Pedro de Atacama", "Tocopilla", "María Elena"];
    }
    else if(value==3){
        ciudades=["Seleciona una comuna","Copiapó", "Caldera", "Tierra Amarilla", "Chañaral", "Diego de Almagro", "Vallenar", "Alto del Carmen", "Freirina", "Huasco"];
    }
    else if(value==4){
        ciudades=["Seleciona una comuna","La Serena", "Coquimbo", "Andacollo", "La Higuera", "Paiguano", "Vicuña", "Illapel", "Canela", "Los Vilos", "Salamanca", "Ovalle", "Combarbalá", "Monte Patria", "Punitaqui", "Río Hurtado"];
    }
    else if(value==5){
        ciudades=["Seleciona una comuna","Valparaíso", "Casablanca", "Concón", "Juan Fernández", "Puchuncaví", "Quintero", "Viña del Mar", "Isla de Pascua", "Los Andes", "Calle Larga", "Rinconada", "San Esteban", "La Ligua", "Cabildo", "Papudo", "Petorca", "Zapallar", "Quillota", "Calera", "Hijuelas", "La Cruz", "Nogales", "San Antonio", "Algarrobo", "Cartagena", "El Quisco", "El Tabo", "Santo Domingo", "San Felipe", "Catemu", "Llaillay", "Panquehue", "Putaendo", "Santa María", "Quilpué", "Limache", "Olmué", "Villa Alemana"];
    }
    else if(value==6){
        ciudades=["Seleciona una comuna","Rancagua", "Codegua", "Coinco", "Coltauco", "Doñihue", "Graneros", "Las Cabras", "Machalí", "Malloa", "Mostazal", "Olivar", "Peumo", "Pichidegua", "Quinta de Tilcoco", "Rengo", "Requínoa", "San Vicente", "Pichilemu", "La Estrella", "Litueche", "Marchihue", "Navidad", "Paredones", "San Fernando", "Chépica", "Chimbarongo", "Lolol", "Nancagua", "Palmilla", "Peralillo", "Placilla", "Pumanque", "Santa Cruz"];
    }
    else if(value==7){
        ciudades=["Seleciona una comuna","Talca", "ConsVtución", "Curepto", "Empedrado", "Maule", "Pelarco", "Pencahue", "Río Claro", "San Clemente", "San Rafael", "Cauquenes", "Chanco", "Pelluhue", "Curicó", "Hualañé", "Licantén", "Molina", "Rauco", "Romeral", "Sagrada Familia", "Teno", "Vichuquén", "Linares", "Colbún", "Longaví", "Parral", "ReVro", "San Javier", "Villa Alegre", "Yerbas Buenas"];
    }
    else if(value==8){
        ciudades=["Seleciona una comuna","Concepción", "Coronel", "Chiguayante", "Florida", "Hualqui", "Lota", "Penco", "San Pedro de la Paz", "Santa Juana", "Talcahuano", "Tomé", "Hualpén", "Lebu", "Arauco", "Cañete", "Contulmo", "Curanilahue", "Los Álamos", "Tirúa", "Los Ángeles", "Antuco", "Cabrero", "Laja", "Mulchén", "Nacimiento", "Negrete", "Quilaco", "Quilleco", "San Rosendo", "Santa Bárbara", "Tucapel", "Yumbel", "Alto Biobío", "Chillán", "Bulnes", "Cobquecura", "Coelemu", "Coihueco", "Chillán Viejo", "El Carmen", "Ninhue", "Ñiquén", "Pemuco", "Pinto", "Portezuelo", "Quillón", "Quirihue", "Ránquil", "San Carlos", "San Fabián", "San Ignacio", "San Nicolás", "Treguaco", "Yungay"];
    }
    
    else if(value==9){
        ciudades=["Seleciona una comuna", "Temuco", "Carahue", "Cunco", "Curarrehue", "Freire", "Galvarino", "Gorbea", "Lautaro", "Loncoche", "Melipeuco", "Nueva Imperial", "Padre las Casas", "Perquenco", "Pitrufquén", "Pucón", "Saavedra", "Teodoro Schmidt", "Toltén", "Vilcún", "Villarrica", "Cholchol", "Angol", "Collipulli", "Curacautín", "Ercilla", "Lonquimay", "Los Sauces", "Lumaco", "Purén", "Renaico", "Traiguén", "Victoria"];
    }
    else if(value==10){
        ciudades=["Seleciona una comuna","Puerto Montt", "Calbuco", "Cochamó", "Fresia", "FruVllar", "Los Muermos", "Llanquihue", "Maullín", "Puerto Varas", "Castro", "Ancud", "Chonchi", "Curaco de Vélez", "Dalcahue", "Puqueldón", "Queilén", "Quellón", "Quemchi", "Quinchao", "Osorno", "Puerto Octay", "Purranque", "Puyehue", "Río Negro", "San Juan de la Costa", "San Pablo", "Chaitén", "Futaleufú", "Hualaihué", "Palena"];
    }
    else if(value==11){
        ciudades=["Seleciona una comuna","Coihaique", "Lago Verde", "Aisén", "Cisnes", "Guaitecas", "Cochrane", "O’Higgins", "Tortel", "Chile Chico", "Río Ibáñez"];
    }
    else if(value==12){
        ciudades=["Seleciona una comuna","Punta Arenas", "Laguna Blanca", "Río Verde", "San Gregorio", "Cabo de Hornos (Ex Navarino)", "AntárVca", "Porvenir", "Primavera", "Timaukel", "Natales", "Torres del Paine"];
    }
    else if(value==13){
        ciudades=["Seleciona una comuna","Cerrillos", "Cerro Navia", "Conchalí", "El Bosque", "Estación Central", "Huechuraba", "Independencia", "La Cisterna", "La Florida", "La Granja", "La Pintana", "La Reina", "Las Condes", "Lo Barnechea", "Lo Espejo", "Lo Prado", "Macul", "Maipú", "Ñuñoa", "Pedro Aguirre Cerda", "Peñalolén", "Providencia", "Pudahuel", "Quilicura", "Quinta Normal", "Recoleta", "Renca", "San Joaquín", "San Miguel", "San Ramón", "Vitacura", "Puente Alto", "Pirque", "San José de Maipo", "Colina", "Lampa", "TilVl", "San Bernardo", "Buin", "Calera de Tango", "Paine", "Melipilla", "Alhué", "Curacaví", "María Pinto", "San Pedro", "Talagante", "El Monte", "Isla de Maipo", "Padre Hurtado", "Peñaflor"];
    }
    else if(value==14){
        ciudades=["Seleciona una comuna","Valdivia", "Corral", "Lanco", "Los Lagos", "Máfil", "Mariquina", "Paillaco", "Panguipulli", "La Unión", "Futrono", "Lago Ranco", "Río Bueno"];
    }
    else if(value==15){
        ciudades=["Seleciona una comuna","Arica", "Camarones", "Putre", "General Lagos"];
    }   
    var cont=0; 
    for (i=0; i<ciudades.length; i++){
        var option= document.createElement("option");
        option.text=ciudades[i];
        option.value=cont;
        x.add(option, x[0]);
        cont++;
        }
        
        
        
    }
    
    
      
function mySize(value) {
 
  var x = document.getElementById("talla");
  x.options.length=0;
    var tallas;
  
  if (value==1){
      tallas=["Seleciona una talla","O meses","3 meses","6 meses","12 meses","2-3 años","4-5 años","6-7 años","8-9 años","10-11 años","12-14 años"];
  }
  else if (value==2) { 
      tallas=["Seleciona una talla","XS","S","M","L","XL","XXL"];
      
  }
 else{
     tallas=["Seleciona una talla"];
 }
      
      var cont=0; 
      for (i=0; i<tallas.length; i++){
        var option= document.createElement("option");
        option.text=tallas[i];
        option.value=cont;
        x.add(option, x[0]);
        cont++;   
    }


}
    
var cont=0;  
    
    function newArchivo() {
        var elem= document.getElementById("newFile").childElementCount;
        if (cont<4){
            var r=document.createElement("INPUT");
            r.setAttribute("type", "file");
            if(cont==0){r.id="foto-1"; document.getElementById("newFile").innerHTML += "<input type='file' id='foto-1'><br>";}
            if(cont==1){r.id="foto-2"; document.getElementById("newFile").innerHTML += "<input type='file' id='foto-2'><br>";}
            if(cont==2){r.id="foto-3"; document.getElementById("newFile").innerHTML += "<input type='file' id='foto-3'><br>";}
            if(cont==3){r.id="foto-4"; document.getElementById("newFile").innerHTML += "<input type='file' id='foto-4'><br>";}
            
            //document.getElementById("newFile").appendChild(r);
            
            cont++;
                }
        else{
             document.getElementById("newFile").innerHTML += " ";
        }
       
}
 

   
    
function error(){
    var region=document.getElementById("region").value;
    var comuna=document.getElementById("comuna").value;
    
    var nombredis=document.getElementById("nombre-disfraz").value;
    var descripcion=document.getElementById("descripcion-disfraz").value;
    var categoria=document.getElementById("categoria").value;
    var talla=document.getElementById("talla").value;
    
    var nombre=document.getElementById("nombre").value;
    var correo=document.getElementById("email").value;
    var celular=document.getElementById("celular").value;
    var image= document.getElementById("Foto-disfraz");
    
    var foto1=document.getElementById("foto-1");
    var foto2=document.getElementById("foto-2");
    var foto3=document.getElementById("foto-3");
    var foto4=document.getElementById("foto-4");

    
    var errortext="";
    var errortext1="\n";
    
    if (region==0){
        errortext+= "Por favor ingresa su región \n" ;
    }
    if (comuna==0){
        errortext+= "Por favor ingresa su comuna \n" ;
    }
    if(nombredis.length==0){
        errortext+= "Por favor ingresa un nombre para su disfraz \n";
    }
    
    if(descripcion.length>500){
        errortext1+="Su descripción excede el número máximo de carácteres permitido (500)";}
        
    
    if(categoria==0){
        
        errortext+= "Por favor ingresa una categoría para su disfraz \n";
    }
    if(talla==0){
        errortext+="Por favor ingresa una talla para su disfraz \n";
    }
    
    
    if (nombre.length<3 || nombre.length >8){
        errortext1+="Su nombre debe contener al menos 3 caracteres y a lo más 80 \n";
    }
    if(!isValidPhone(celular)){
        if(celular.length==0){
            errortext+="Por favor ingresa un celular de contacto \n"
        }
        else{
            errortext1+="Su número de celular no cumple el formato esperado, por favor reescribelo!";
        }
        
    }
    if (!validateEmail(correo)){
        if(correo.length==0){
            errortext+="Por favor ingresa un correo de contacto \n"
        }
        else{
            errortext1+="Su correo no cumple el formato esperado, por favor reescribelo!";
        }
    }
    
    if(image==null || foto1==null || foto2 ==null || foto3==null || foto4==null){
        errortext+="Por favor ingresa al menos una foto";
    }
    
    if(errortext.length==0){
        errortext+="Su disfraz fue publicado en nuestra plataforma !";
    }
    window.alert(errortext+errortext1);
    
    }
    
    function isValidPhone(p) {
      var phoneRe = /^[2-9]\d{2}[2-9]\d{2}\d{4}$/;
      var digits = p.replace(/\D/g, "");
      digits=p.replace("+","");
      return phoneRe.test(digits);}
    
    function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());}
    
    
    
    
    
    

</script>
    
    </body>



















</html>