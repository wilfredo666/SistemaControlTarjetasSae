<?php
$path=parse_url($_SERVER['REQUEST_URI']);
//directorio + archivo
$ruta=$path["query"];
//dividiendo la ruta del directorio con el archivo
$dirArch=explode("-",$ruta);
var_dump($dirArch);
/*array(2) { [0]=> string(22) "assest/files/archivos/" [1]=> string(10) "texto.docx" }*/
// assest/files/archivos/texto.docx
/*header("Content-disposition: attachment; filename=nombre_del_archivo.extension");
header("Content-type: MIME");
readfile("nombre_del_archivo.extension");*/
?>