$(document).ready(function(){
    $('#search').focus();
  
    $('#search').on('keyup', function(){
      var search = $('#search').val()
      if(search.length > 2){
          console.log(search);
          var xhttp = new XMLHttpRequest();
          xhttp.open('POST', "search.php", true);
          xhttp.onreadystatechange = function () { // this is what happens when an answer is returned 
          if(xhttp.readyState === 4 && xhttp.status === 200) { 
              
              
           document.getElementById("results").innerHTML = xhttp.responseText;
         }
           };
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhttp.send("search="+search);
                }
      
    
    
    
    
    
    
    });
   
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        var result=xhr.responseText;
                        console.log(result);
                        var newResult=result.split("-");
                        console.log(newResult);
                        var j=1;
                        while(newResult[j]!=null){
                            var nameString=newResult[j];
                            var lngStr="-"+newResult[j+1];
                            var latStr="-"+newResult[j+2];
                            var index=latStr.length;
                            
                            var count=latStr[index-1];
                            console.log(count);
                            
                            var lng=parseFloat(lngStr);
                            var lat=parseFloat(latStr);
                            console.log(name);
                            console.log(lng);
                            console.log(lat);
                            
                            var marker = L.marker([lng, lat],{title: "Cantidad de Fotos: "+count}).addTo(map);
                            marker.bindPopup(nameString);
                            marker.on('click', function () {
                                console.log(marker.getPopup().getContent());
                            });
                            j+=3;
                        }
                        //console.log(newResult);

                        //document.getElementById("cities").innerHTML = xhr.responseText;
                    }
    }
                       
    
            xhr.open("GET", "cities.php");
                xhr.send();
                
    

    
});