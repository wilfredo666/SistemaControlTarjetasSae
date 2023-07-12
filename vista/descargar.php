<?php
$path=parse_url($_SERVER['REQUEST_URI']);
//directorio + archivo
$ruta=$path["query"];
//dividiendo la ruta del directorio con el archivo
$dirArch=explode("-",$ruta);
var_dump($dirArch);

//nombre del archivo
$nameFile=$dirArch[1];
//ruta del archivo
$ruteFile=$dirArch[0];

//array(2) { [0]=> string(22) "assest/files/archivos/" [1]=> string(10) "texto.docx" }

// assest/files/archivos/texto.docx
header("Content-disposition: attachment; filename=$nameFile");
header("Content-type: application/pdf");
readfile($nameFile);
?>