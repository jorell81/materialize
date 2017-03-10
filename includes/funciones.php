<?php

function ObtenerNombreUsuario($identificador)
{
	//global $database_conexionenergy, $conexionenergy;
	mysql_select_db($database_conexionenergy, $conexionenergy);
	$query_ConsultaFuncion = sprintf("SELECT users.nombre FROM tienda.users WHERE users.idusers = %s", $identificador);
	$ConsultaFuncion = mysql_query($query_ConsultaFuncion, tienda) or die(mysql_error());
	$row_ConsultaFuncion = mysql_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysql_num_rows($ConsultaFuncion);

	return $row_ConsultaFuncion['nombre']; 
	mysql_free_result($ConsultaFuncion);
}


?>