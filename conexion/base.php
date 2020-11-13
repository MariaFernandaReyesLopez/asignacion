<?php
echo "entra";
$serverName = "LAPTOP-SH2I8EFC"; //serverName
echo "pasa server";
$connectionInfo = array( "Database"=>"horarios", "UID"=>"Fernanda", "PWD"=>"fernanda1823");
echo "pasa conexion";
$conn = sqlsrv_connect( $serverName, $connectionInfo);
echo "pasa a final";

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>