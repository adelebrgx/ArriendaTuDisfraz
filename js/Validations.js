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
        option.value=ciudades[i];
        x.add(option, x[0]);
        cont++;
        }
        
        
        
    }
    
function myCity2(value) {
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
        option.value=values[i];
        x.add(option, x[0]);
        cont++;
        }
    
 
    
        
  
}    
      
function mySize1(value) {
 
  var x = document.getElementById("talla");
  x.options.length=0;
    var tallas;
  
  if (value==1 || value==2 || value==3){
      tallas=["Seleciona una talla","O meses","3 meses","6 meses","12 meses","2-3 años","4-5 años","6-7 años","8-9 años","10-11 años","12-14 años"];
  }
  else if (value==4 || value==5 || value==6) { 
      tallas=["Seleciona una talla","XS","S","M","L","XL","XXL"];
      
  }
 else{
     tallas=["Seleciona una talla"];
 }
      
      var cont=0; 
      for (i=0; i<tallas.length; i++){
        var option= document.createElement("option");
        option.text=tallas[i];
        option.value=tallas[i];
        x.add(option, x[0]);
        cont++;   
    }


}

function mySize2(value) {
 
  var x = document.getElementById("talla-solicitante");
  x.options.length=0;
    var tallas;
  
  if (value==1 || value==2 || value==3){
      tallas=["Seleciona una talla","O meses","3 meses","6 meses","12 meses","2-3 años","4-5 años","6-7 años","8-9 años","10-11 años","12-14 años"];
  }
  else if (value==4 || value==5 || value==6) { 
      tallas=["Seleciona una talla","XS","S","M","L","XL","XXL"];
      
  }
 else{
     tallas=["Seleciona una talla"];
 }
      
      var cont=0; 
      for (i=0; i<tallas.length; i++){
        var option= document.createElement("option");
        option.text=tallas[i];
        option.value=tallas[i];
        x.add(option, x[0]);
        cont++;   
    }


}


    

 

   
    
function errorAgregar(){
    var result=true;
    var region=document.getElementById("region").value;
    var comuna=document.getElementById("comuna").value;
    
    var nombredis=document.getElementById("nombre-disfraz").value;
    var descripcion=document.getElementById("descripcion-disfraz").value;
    var categoria=document.getElementById("categoria").value;
    var talla=document.getElementById("talla").value;
    
    var nombre=document.getElementById("nombre").value;
    var correo=document.getElementById("email").value;
    var celular=document.getElementById("celular").value;
    var image= document.getElementById("Foto");
    
    
    var foto1=document.getElementById("foto-1");
    var foto2=document.getElementById("foto-2");
    var foto3=document.getElementById("foto-3");
    var foto4=document.getElementById("foto-4");

    console.log(talla);
    
    
    var optionTalla=["O meses","3 meses","6 meses","12 meses","2-3 años","4-5 años","6-7 años","8-9 años","10-11 años","12-14 años"];
    var errortext="";
    var errortext1="\n";
    
    
    
    if (region==0){
        errortext+= "Por favor ingresa su región \n" ;

        result=false;
    }
    if (comuna=="Seleciona una comuna" || comuna==0){
        errortext+= "Por favor ingresa su comuna \n" ;
        result=false;
    }
    
    if(nombredis.length==0){
        errortext+= "Por favor ingresa un nombre para su disfraz \n";
        result=false;
    }
    
    if(descripcion.length>500){
        errortext1+="Su descripción excede el número máximo de carácteres permitido (500)";
        result=false;
    }
        
    
    if(categoria==0){
        
        errortext+= "Por favor ingresa una categoría para su disfraz \n";
        result=false;
    }
    if(talla=="Seleciona una talla" || talla==0){
        errortext+="Por favor ingresa una talla para su disfraz \n";
        result=false;
    }
     
    if (nombre.length<3 || nombre.length >8){
        errortext1+="Su nombre debe contener al menos 3 caracteres y a lo más 80 \n";
        result=false;
    }
    if(!isValidPhone(celular)){
        if(celular.length==0){
            errortext+="Por favor ingresa un celular de contacto \n";
            result=false;
        }
        else{
            errortext1+="Su número de celular no cumple el formato esperado, por favor reescribelo!";
            result=false;
        }
        
    }
    if (!validateEmail(correo)){
        if(correo.length==0){
            errortext+="Por favor ingresa un correo de contacto \n";
            result=false;
        }
        else{
            errortext1+="Su correo no cumple el formato esperado, por favor reescribelo!";
            result=false;
        }
    }
    
    if(image==null && foto1==null && foto2 ==null && foto3==null && foto4==null){
        errortext+="Por favor ingresa al menos una foto";
        console.log("hello");
        result=false;
    }
    
    
    if (result==false){
       window.alert(errortext+errortext1);
        
    }
    
    return result;
    }

    
function errorPublicar(){
    
    var result=true;
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
        result=false;
    }
    if (resultR.length>5){
        errortext1+= "Por favor ingresa a los mas 5 regiones donde está buscando un disfraz \n" ;
        result=false;
    }
    if (resultC.length==0){
        errortext+= "Por favor ingresa al menos una comuna donde está buscando un disfraz \n" ;
        result=false;
    }
    if(resultC.length>5){
        errortext1+= "Por favor ingresa a los mas 5 comunas donde está buscando un disfraz \n" ;
        result=false;
    }
    if(nombredis.length==0){
        errortext+= "Por favor ingresa un nombre para el disfraz que está buscando \n";
        result=false;
    }
    
    if(descripcion.length>500){
        errortext1+="Su descripción excede el número máximo de carácteres permitido (500)";
        result=false;
    }
    if(categoria==0){
        errortext+= "Por favor ingresa una categoría para el disfraz que está buscando \n";
        result=false;
    }
    if(talla==0){
        errortext+="Por favor ingresa una talla para el disfraz que está buscando \n";
        result=false;
    }  
    if (nombre.length==0){
        errortext+="Por favor ingresa un nombre de contacto para el disfraz que está buscando \n";
        result=false;
    }
    if (nombre.length<3 && nombre.length!=0 || nombre.length >8 ){
        errortext1+="Su nombre debe contener al menos 3 caracteres y a lo más 80 \n";
        result=false;
    }
    if(!isValidPhone(celular)){
        
        console.log(isValidPhone(celular));
        if(celular.length==0){
            errortext+="Por favor ingresa un celular de contacto \n";
            result=false;
        }
        else{
            errortext1+="Su número de celular no cumple el formato esperado, por favor reescribelo!";
            result=false;
        }
        
    }
    if (!validateEmail(correo)){
        if(correo.length==0){
            errortext+="Por favor ingresa un correo de contacto \n";
            result=false;
        }
        else{
            errortext1+="Su correo no cumple el formato esperado, por favor reescribelo!";
            result=false;
        }
    }    
    
    if(result==false){
        window.alert(errortext+errortext1);
    }
    console.log(result);    
    return result;
    }
    
function isValidPhone(p) { 
      var phoneRe = /^\d+$/;
      return phoneRe.test(p);
}   



    
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());}
    