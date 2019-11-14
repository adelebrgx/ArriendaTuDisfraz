<?php 
require_once("correspondencias.php");
require_once('db_config.php');

$mysqli = DbConfig::getConnection();


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
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/search.js"></script>
       
        
    <script>
        
           
        
        
        
        
        
    </script>
    </head>
    <body>
        
        
        <div class="volver">
            <a class="btn btn-primary" href="index.php" role="button"><i class="fa fa-arrow-left" ></i> Volver</a>
        </div>
        
            <?php

                    $id=$_POST['id'];
        
                    $query="SELECT ruta_archivo FROM foto_disfraz WHERE disfraz_id='$id'";
                    $result=$mysqli->query($query);
                     
                
                        while($line=mysqli_fetch_assoc($result)){
                            echo " </tr>
                          </tbody>
                        </table>

                        


                        <div class='images'>
                            <div class='popup' onclick='throwImage();'><img src=".$line['ruta_archivo']." alt='No se pudó desplegar el imagen' height='320' width='240' >
                            <img id='myPopup' src=".$line['ruta_archivo']." height='320' width='240' class='popuptext'>
                            </div>
                        </div>";
                                
                                }
                        
                        ?>
        
        
        
        

    
    </body>


</html>
