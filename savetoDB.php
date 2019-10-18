<?php 

require_once("correspondencias.php");
require_once('db_config.php');




function savePedido($nombre, $descripcion,$categoria, $talla,$nombresol,$email,$celular,$region,$comuna){
    $result=true;

    $mysqli = DbConfig::getConnection();
    $stmt = $mysqli->prepare("INSERT INTO pedido (nombre_disfraz, descripcion, categoria, talla, fecha_ingreso, nombre_solicitante, email_solicitante,celular_solicitante, comuna_solicitante) VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiissssi", $nombre_db, $descripcion_db,$categoria_db, $talla_db,$fecha_db,$nombresol_db,$email_db,$celular_db,$comuna_db);

    $nombre_db=$nombre;
    echo $nombre_db;
    $descripcion_db=$descripcion;
    echo $descripcion_db;
    $categoria_db=$categoria;
    echo $categoria_db;
    $talla_db=getIdTalla($mysqli, $talla);
    echo $talla_db;
    $nombresol_db=$nombresol;
    echo $nombresol_db;
    $email_db=$email;
    echo $email_db;
    $celular_db=$celular;
    echo $celular_db;
    $comuna_db=getIdComuna($mysqli, $comuna);
    echo $comuna_db;
    $fecha_db=date('Y-m-d H:i:s');
    echo $fecha_db;
    
    if(!$stmt->execute()){$result=false;}
    
    $mysqli->close();
    return $result;
    

    
}
    

function saveDisfraz($nombre, $descripcion,$categoria, $talla,$nombresol,$email,$celular,$region,$comuna, $fotos ){
    $result=true;


    $mysqli = DbConfig::getConnection();
    
    
    $stmt = $mysqli->prepare("INSERT INTO disfraz (comuna, nombre_disfraz, descripcion, categoria, talla, fecha_ingreso, nombre_contacto, email_contacto, celular_contacto) VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("issiissss",$comuna_db, $nombre_db, $descripcion_db,$categoria_db, $talla_db,$fecha_db,$nombresol_db,$email_db,$celular_db);

    $nombre_db=$nombre;
    $descripcion_db=$descripcion;
    $categoria_db=$categoria;
    $talla_db=getIdTalla($mysqli, $talla);
    $nombresol_db=$nombresol;
    $email_db=$email;
    $celular_db=$celular;
    $comuna_db=getIdComuna($mysqli, $comuna);
    $fecha_db=date('Y-m-d H:i:s');

    
    	
    if(!$stmt->execute()){$result=false;}
        
    
	$last_id = $mysqli->insert_id;
    
    
    
    foreach ($fotos as $val) {
        $stmt = $mysqli->prepare("INSERT INTO foto_disfraz (ruta_archivo,nombre_archivo,disfraz_id) VALUES (?,?,?)");
        $stmt->bind_param("ssi",$path_db,$nombre_db,$id_db);
        uploadImage($val);
        $path_db='./uploads/'.$_FILES[$val]['name'];
        $nombre_db=$_FILES[$val]['name'];
        $id_db=$last_id;
        
        if (!$stmt->execute()){
            $result=false;
        }
    
}
    
    $mysqli->close();
    return $result;
}


function uploadImage($name){
    $uploaddir = './uploads/';
    $uploadfile = $uploaddir . basename($_FILES[$name]['name']);
    if (!file_exists($uploaddir)){
				mkdir($uploaddir, 0777, true);
			}
    move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile); 
}

?>
