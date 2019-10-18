<?php 


require_once("correspondencias.php");

require_once('db_config.php');

    
        $mysqli = DbConfig::getConnection();

        $jsonChile=parseJsonComunas();

        $query="SELECT id,comuna, nombre_disfraz, categoria, talla, nombre_contacto FROM disfraz GROUP BY comuna";
        $query2="SELECT id,comuna, nombre_disfraz, categoria, talla, nombre_contacto FROM disfraz ORDER BY comuna";

        $citiesresult=array();

         $result = $mysqli->query($query);
         $result2 = $mysqli->query($query2);
         while ( $line = mysqli_fetch_assoc($result)) {
             $citiesresult[getComuna($mysqli,$line['comuna'])]="0";

         }

        while ( $line = mysqli_fetch_assoc($result2)) {
            $val=(int)$citiesresult[getComuna($mysqli,$line['comuna'])];
            $val=$val+1;
             $citiesresult[getComuna($mysqli,$line['comuna'])]=(string)$val;

         }


        foreach($citiesresult as $key=>$val){
            foreach($jsonChile as $locComuna){
                if($locComuna['name']==$key){
                    
                    
                    echo "-".$key;
                    echo $lat=$locComuna['lat'];
                    echo $lng=$locComuna['lng'];
                    echo $val;
                
                    
                    //$value=$citiesresult[$locComuna['name']];
                    //echo $lng;
                    //echo $lat;
                    break;
                }
            
 

      
            
        }
        }
        
        
    



function parseJsonComunas(){
	$strJsonFileContents = file_get_contents("chile.json");
	$array = json_decode($strJsonFileContents, true);
	return $array;
}
   
?>