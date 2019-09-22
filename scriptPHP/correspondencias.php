<?php

function getCategoria($db, $id ){
    $query="SELECT descripcion FROM categoria WHERE id='$id' " ;
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    return $row["descripcion"];
}

function getTalla($db, $id ){
    $query="SELECT descripcion FROM talla WHERE id='$id' " ;
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    return $row["descripcion"];
}

function getIdTalla($db, $desc){
    $descp=limpiar($db,$desc);
    $query="SELECT id FROM talla WHERE descripcion='$descp' " ;
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    return $row["id"];
}

function getComuna($db, $id ){
    
    $query="SELECT nombre FROM comuna WHERE id='$id' " ;
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    return $row["nombre"];
}

function getIdComuna($db, $nombre){
    $ids=limpiar($db, $nombre);
    $query="SELECT id FROM comuna WHERE nombre='$nombre' " ;
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    return $row["id"];
}

function getRegion($db, $id){
    $query="SELECT region_id FROM comuna WHERE id='$id' " ;
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    $value=$row["region_id"];
    $query2="SELECT nombre FROM region WHERE id='$value' ";
    $result2=$db->query($query2);
    $row2= $result2->fetch_assoc();
    return $row2['nombre'];
}

function getPath($db, $id){
    $query="SELECT ruta_archivo FROM foto_disfraz WHERE disfraz_id='$id'";
    $result=$db->query($query);
    $row= $result->fetch_assoc();
    return $row['ruta_archivo'];
}

function limpiar($db, $str){
	return htmlspecialchars($db->real_escape_string($str));
}


?>