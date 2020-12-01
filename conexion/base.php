<?php

// Se define la cadena de conexión
$dsn = "Driver={SQL Server}; Server=LAPTOP-SH2I8EFC; Database=horarios; Integrated Security=SSPI;Persist Security Info=False;";

$connsaiiut = odbc_connect( $dsn, '', '');

/*
$conn=odbc_connect('northwind','','');
$sql="SELECT * FROM personas";
$rs=odbc_exec($conn,$sql);

if( $connsaiiut ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
*/
?>