<?php

$valorBuscado=$_POST['dato'];
$tipo=$_POST['tipo'];


$ruta="Location: consultarUsuarios.php?b=".$valorBuscado."&t=".$tipo;


header($ruta);

?>