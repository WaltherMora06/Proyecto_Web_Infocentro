<?php

define('servidor', 'localhost');
define('Puerto', 3307);
define('Usuario', 'root');
//define('Pass', );
define('bd', 'webform');

$cn = mysqli_connect(servidor, Usuario, bd, Puerto);
if ($cn) {
   echo "Conexion Exitosa";
} else {
   echo "Error de Conexion" . mysqli_error();
};