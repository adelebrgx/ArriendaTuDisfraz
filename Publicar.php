<!DOCTYPE html>
<html>
    
    <head>
        
        <title>arrienda tu disfraz!</title>
        
         <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="stylesheet" href="css/bootstrap.css"/>
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
        
        <h1> Publica tu pedido:  </h1>
        
        <div class="form">
            <form>
              
                
            <div class="form-row">
              <div class="form-group">
                <label for="nombre-disfraz"><strong>Nombre de disfraz </strong></label><br>
                <textarea  cols="30"   id="nombre-disfraz" placeholder="Princesa azul"></textarea>
              </div>
                
              <div class="form-group" style="margin-left:1%;">
                <label for="descripcion-disfraz"><strong>Descripción de disfraz </strong></label><br>
                  <textarea  cols="40" rows="8"  id="descripcion-disfraz" placeholder="Un disfraz de princesa azul, para niñas de entre 6 y 10 años."></textarea>
              </div>
                
                
              
                <div class="form-group" style="margin-left:3%; width:20%; ">
                  <label for="categoria-solicitante"><strong>Categoría </strong></label>
                  <select id="categoria-solicitante" class="form-control" onchange="{mySize(this.options[this.selectedIndex].value);}">
                    <option value="0"> Selecciona una categoría</option>
                    <option value="1">Infantil Niña</option>
                    <option value="1">Infantil Niño</option>
                    <option value="1">Infantil unisex</option>
                    <option value="2">Mujer</option>
                    <option value="2">Hombre</option>
                    <option value="2">Adulto Unisex</option>     
                  </select>
                </div>
                
            
                  
                <div class="form-group" style="margin-left:1%; width:25%;">
                  <label for="talla-solicitante"> <strong>Talla </strong></label>
                  <select id="talla-solicitante" class="form-control">  
                      <option value="0" >Selecciona una talla </option>
                  </select>
                </div>
                


              </div>
                
                
                <div class="form-row">
                    <div class="form-group">
                    <label for="nombre-solicitante"><strong>Nombre del solicitante </strong></label><br>
                    <textarea cols="80" id="nombre-solicitante" placeholder="Adèle Bourgeix"></textarea>
                    
                    
                    
                    </div>
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="email-solicitante"><strong>Correo de contacto del solicitante</strong></label><br>
                    <textarea cols="30" id="email-solicitante" placeholder="adele.bourgeix@gmail.com"></textarea>
                    </div>
                    
                    
                    <div class="form-group" style="margin-left:1%;">
                    <label for="celular-solicitante"><strong>Número de cellular del solicitante </strong></label><br>
                    <textarea cols="15" id="celular-solicitante" placeholder="+56xxxxxxxxx"></textarea>
                    </div>
                
                
                 
                
                </div>
                
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="region-solicitante"><strong>Región del solicitante</strong></label>
                   <select id="region-solicitante" class="form-control" multiple onchange="{myCity(this.options[this.selectedIndex].value);}">
                        <option  value="1" >I de Tarapacá</option>
                        <option  value="2" >II de Antofagasta</option>
                        <option  value="3" >III de Atacama</option>
                        <option  value="4" >IV de Coquimbo</option>
                        <option  value="5" >V de Valparaíso</option>
                        <option  value="6" onchange="myCity(value);">VI del Libertador General Bernardo O'Higgins</option>
                        <option  value="7" onchange="myCity(value);">VII del Maule</option>
                        <option  value="8" onchange="myCity(value);">VIII de Concepción </option>
                        <option  value="9" onchange="myCity(value);">IX de la Araucanía</option>
                        <option  value="10" onchange="myCity(value);">X de Los Lagos</option>
                        <option  value="11" onchange="myCity(value);">XI de Aysén del General Carlos Ibañez del Campo</option>
                        <option  value="12" onchange="myCity(value);">XII de Magallanes y de la Antártica Chilena </option>
                        <option  value="13" onchange="myCity(value);">Metropolitana de Santiago</option>
                        <option  value="14" onchange="myCity(value);">XIV de Los Ríos</option>
                        <option  value="15" onchange="myCity(value);">XV de Arica y Parinacota</option>

                      </select>
                    
                  
  
                </div>
                <div class="form-group col-md-6">
                  <label for="comuna-solicitante"><strong>Comuna del solicitante</strong></label>
                      <select id="comuna-solicitante"  class="form-control" multiple>
                      </select>
                </div>
              </div>
                
                <div class="button-confirm" style="text-align:center; margin-top:2%;">
                <button type="button" class="btn btn-secondary" onclick="error();" >Publica tu pedido !</button></div>
                
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
    

 

function myCity(value) {
    var el = document.getElementById('region-solicitante');
    var result = [];
    var options = el && el.options;
    var opt;
    for (var i=0, iLen=options.length; i<iLen; i++) {
    opt = options[i]; if (opt.selected) {result.push(opt.value || opt.text);}}

    var x= document.getElementById("comuna-solicitante");
    x.options.length=0;
    
    var values=[];
 
    if(result.includes("1")){
        var option=["Iquique", "Alto Hospicio", "Pozo Almonte", "Camiña", "Colchane", "Huara", "Pica"];
        values=values.concat(option);
         
    }
    if(result.includes("2")){
        
        var option=["Antofagasta", "Mejillones", "Sierra Gorda", "Taltal", "Calama", "Ollagüe", "San Pedro de Atacama", "Tocopilla", "María Elena"];
        values=values.concat(option);
        
    }
    if(result.includes("3")){
        
        var option=["Copiapó", "Caldera", "Tierra Amarilla", "Chañaral", "Diego de Almagro", "Vallenar", "Alto del Carmen", "Freirina", "Huasco"];
        values=values.concat(option);
        
    }
    if(result.includes("4")){
        
        var option=["La Serena", "Coquimbo", "Andacollo", "La Higuera", "Paiguano", "Vicuña", "Illapel", "Canela", "Los Vilos", "Salamanca", "Ovalle", "Combarbalá", "Monte Patria", "Punitaqui", "Río Hurtado"];
        values=values.concat(option);
        
    }
    if(result.includes("5")){
         
        var option=["Valparaíso", "Casablanca", "Concón", "Juan Fernández", "Puchuncaví", "Quintero", "Viña del Mar", "Isla de Pascua", "Los Andes", "Calle Larga", "Rinconada", "San Esteban", "La Ligua", "Cabildo", "Papudo", "Petorca", "Zapallar", "Quillota", "Calera", "Hijuelas", "La Cruz", "Nogales", "San Antonio", "Algarrobo", "Cartagena", "El Quisco", "El Tabo", "Santo Domingo", "San Felipe", "Catemu", "Llaillay", "Panquehue", "Putaendo", "Santa María", "Quilpué", "Limache", "Olmué", "Villa Alemana"];
        values=values.concat(option);
        
    }
    if(result.includes("6")){
        
        var option=["Rancagua", "Codegua", "Coinco", "Coltauco", "Doñihue", "Graneros", "Las Cabras", "Machalí", "Malloa", "Mostazal", "Olivar", "Peumo", "Pichidegua", "Quinta de Tilcoco", "Rengo", "Requínoa", "San Vicente", "Pichilemu", "La Estrella", "Litueche", "Marchihue", "Navidad", "Paredones", "San Fernando", "Chépica", "Chimbarongo", "Lolol", "Nancagua", "Palmilla", "Peralillo", "Placilla", "Pumanque", "Santa Cruz"];
        values=values.concat(option);
        
    }
    if(result.includes("7")){
         
        var option=["Talca", "ConsVtución", "Curepto", "Empedrado", "Maule", "Pelarco", "Pencahue", "Río Claro", "San Clemente", "San Rafael", "Cauquenes", "Chanco", "Pelluhue", "Curicó", "Hualañé", "Licantén", "Molina", "Rauco", "Romeral", "Sagrada Familia", "Teno", "Vichuquén", "Linares", "Colbún", "Longaví", "Parral", "ReVro", "San Javier", "Villa Alegre", "Yerbas Buenas"];
        values=values.concat(option);
        
        
    }
    if(result.includes("8")){
         
        var option=["Concepción", "Coronel", "Chiguayante", "Florida", "Hualqui", "Lota", "Penco", "San Pedro de la Paz", "Santa Juana", "Talcahuano", "Tomé", "Hualpén", "Lebu", "Arauco", "Cañete", "Contulmo", "Curanilahue", "Los Álamos", "Tirúa", "Los Ángeles", "Antuco", "Cabrero", "Laja", "Mulchén", "Nacimiento", "Negrete", "Quilaco", "Quilleco", "San Rosendo", "Santa Bárbara", "Tucapel", "Yumbel", "Alto Biobío", "Chillán", "Bulnes", "Cobquecura", "Coelemu", "Coihueco", "Chillán Viejo", "El Carmen", "Ninhue", "Ñiquén", "Pemuco", "Pinto", "Portezuelo", "Quillón", "Quirihue", "Ránquil", "San Carlos", "San Fabián", "San Ignacio", "San Nicolás", "Treguaco", "Yungay"];
        values=values.concat(option);
        
        
    }
    if(result.includes("9")){
         
        var option=["Temuco", "Carahue", "Cunco", "Curarrehue", "Freire", "Galvarino", "Gorbea", "Lautaro", "Loncoche", "Melipeuco", "Nueva Imperial", "Padre las Casas", "Perquenco", "Pitrufquén", "Pucón", "Saavedra", "Teodoro Schmidt", "Toltén", "Vilcún", "Villarrica", "Cholchol", "Angol", "Collipulli", "Curacautín", "Ercilla", "Lonquimay", "Los Sauces", "Lumaco", "Purén", "Renaico", "Traiguén", "Victoria"];
        values=values.concat(option);
        
    }
    
    if(result.includes("10")){
         
        var option=["Puerto Montt", "Calbuco", "Cochamó", "Fresia", "FruVllar", "Los Muermos", "Llanquihue", "Maullín", "Puerto Varas", "Castro", "Ancud", "Chonchi", "Curaco de Vélez", "Dalcahue", "Puqueldón", "Queilén", "Quellón", "Quemchi", "Quinchao", "Osorno", "Puerto Octay", "Purranque", "Puyehue", "Río Negro", "San Juan de la Costa", "San Pablo", "Chaitén", "Futaleufú", "Hualaihué", "Palena"];
        values=values.concat(option);
        
    }
    
    if(result.includes("11")){
        
        var option=["Coihaique", "Lago Verde", "Aisén", "Cisnes", "Guaitecas", "Cochrane", "O’Higgins", "Tortel", "Chile Chico", "Río Ibáñez"];
        values=values.concat(option);
    }
    
    
    if(result.includes("12")){
       
        var option=["Punta Arenas", "Laguna Blanca", "Río Verde", "San Gregorio", "Cabo de Hornos (Ex Navarino)", "AntárVca", "Porvenir", "Primavera", "Timaukel", "Natales", "Torres del Paine"];
        values=values.concat(option);
       
        
        
    }
    if(result.includes("13")){
         var option=["Cerrillos", "Cerro Navia", "Conchalí", "El Bosque", "Estación Central", "Huechuraba", "Independencia", "La Cisterna", "La Florida", "La Granja", "La Pintana", "La Reina", "Las Condes", "Lo Barnechea", "Lo Espejo", "Lo Prado", "Macul", "Maipú", "Ñuñoa", "Pedro Aguirre Cerda", "Peñalolén", "Providencia", "Pudahuel", "Quilicura", "Quinta Normal", "Recoleta", "Renca", "San Joaquín", "San Miguel", "San Ramón", "Vitacura", "Puente Alto", "Pirque", "San José de Maipo", "Colina", "Lampa", "TilVl", "San Bernardo", "Buin", "Calera de Tango", "Paine", "Melipilla", "Alhué", "Curacaví", "María Pinto", "San Pedro", "Talagante", "El Monte", "Isla de Maipo", "Padre Hurtado", "Peñaflor"];
        values=values.concat(option);
        
    }
    if(result.includes("14")){
        var option=["Valdivia", "Corral", "Lanco", "Los Lagos", "Máfil", "Mariquina", "Paillaco", "Panguipulli", "La Unión", "Futrono", "Lago Ranco", "Río Bueno"];
        values=values.concat(option);
        
    }
    if(result.includes("15")){
        var option= ["Arica", "Camarones", "Putre", "General Lagos"];
        values=values.concat(option);
        
    }
     var cont=0; 
    for (i=0; i<values.length; i++){
        var option= document.createElement("option");
        option.text=values[i];
        option.value=cont;
        x.add(option, x[0]);
        cont++;
        }
    
 
    
        
  
}
    
      
function mySize(value) {
 
  var x = document.getElementById("talla-solicitante");
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
   

 

   
    
function error(){
    var region=document.getElementById("region-solicitante").value;
    var comuna=document.getElementById("comuna-solicitante").value;
    
    var nombredis=document.getElementById("nombre-disfraz").value;
    var descripcion=document.getElementById("descripcion-disfraz").value;
    var categoria=document.getElementById("categoria-solicitante").value;
    var talla=document.getElementById("talla-solicitante").value;
    
    var nombre=document.getElementById("nombre-solicitante").value;
    var correo=document.getElementById("email-solicitante").value;
    var celular=document.getElementById("celular-solicitante").value;
    
    var el = document.getElementById('region-solicitante');
    var resultR = [];
    var options = el && el.options;
    var opt;
    for (var i=0, iLen=options.length; i<iLen; i++) {
    opt = options[i]; if (opt.selected) {resultR.push(opt.value || opt.text);}}
    
    var el2 = document.getElementById('comuna-solicitante');
    var resultC = [];
    var options2 = el2 && el2.options;
    var opt2;
    for (var i=0, iLen=options2.length; i<iLen; i++) {
    opt2 = options2[i]; if (opt2.selected) {resultC.push(opt2.value || opt2.text);}}
  
    
    
    var errortext="";
    var errortext1="\n";
    
    if (resultR.length==0){
        errortext+= "Por favor ingresa al menos una región donde está buscando un disfraz \n" ;
    }
    if (resultR.length>5){
        errortext1+= "Por favor ingresa a los mas 5 regiones donde está buscando un disfraz \n" ;
    }
    if (resultC.length==0){
        errortext+= "Por favor ingresa al menos una comuna donde está buscando un disfraz \n" ;
    }
    if(resultC.length>5){
        errortext1+= "Por favor ingresa a los mas 5 comunas donde está buscando un disfraz \n" ;
    }
    if(nombredis.length==0){
        errortext+= "Por favor ingresa un nombre para el disfraz que está buscando \n";
    }
    
    if(descripcion.length>500){
        errortext1+="Su descripción excede el número máximo de carácteres permitido (500)";}
        
    
    if(categoria==0){
        
        errortext+= "Por favor ingresa una categoría para el disfraz que está buscando \n";
    }
    if(talla==0){
        errortext+="Por favor ingresa una talla para el disfraz que está buscando \n";
    }
    
    
    if (nombre.length==0){
        errortext+="Por favor ingresa un nombre de contacto para el disfraz que está buscando \n"
    }
    if (nombre.length<3 && nombre.length!=0 || nombre.length >8 ){
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
    
    
    
    if(errortext.length==0){
        errortext+="Su pedido fue publicado en nuestra plataforma !";
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