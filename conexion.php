/* <?php

//$_servername = "localhost\SQLEXPRESS"; 


//$connectionInfo = array('database' =>"" );
//$conn = sqlsrv_connect($_servername, $connectionInfo);
//if ($conn) {
 // echo "Conexion establecido.<br/> ";
//else{
 // echo "Conexion no se pudo conectar .<br/>";
  //die(print_r(sqlsrv_errors(),true));




<?php
$serverName = "localhost\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"dbName");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>