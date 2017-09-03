<?php

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

require_once 'driver.php';

$enlace = new DMysqli();

//$estado = $enlace->query("insert into noticias VALUES(DEFAULT, '" . $titulo . "','" . $contenido ."') ");
//
//if ($estado == true){
//    echo 'Exito agregando noticia';
//}
//else {
//    echo 'Fallo al agregar noticia';
//}



$exito = $enlace->query("delete from noticias where id=2");
if ($exito == true){
    echo 'Exito eliminando noticias';
}
else {
    echo 'Fallo al eliminar noticias';
}

$noticias = $enlace->multiples_datos("SELECT * FROM noticias");


$noticias = $enlace->datos("select * from noticias where id = 1");


?>