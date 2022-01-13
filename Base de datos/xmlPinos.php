<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "bd";
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8


$query = "SELECT * FROM pinos";
    $result = mysqli_query($conexion, $query);
	$cadena= mysql_XML($result);
	echo $cadena;

function mysql_XML($resultado)
{
	// creamos el documento XML		
	//header ("Content-type: text/xml");
	$contenido = '&lt; bd &gt;';
	
	while ($row = mysqli_fetch_array($resultado)) {
		$contenido.="&lt;pinos&gt;";
		$contenido.="&lt;nombre_comun&gt;".$row['nombre_comun']."&lt;/nombre_comun&gt;";
		$contenido.="&lt;nombre_cientifico&gt;".$row['nombre_cientifico']."&lt;/nombre_cientifico&gt;";
		$contenido.="&lt;especies&gt;".$row['especie'] ."&lt;/especie&gt;";
		$contenido.="&lt;edad&gt;".$row['edad']."&lt;/edad&gt;";
        $contenido.="&lt;lugar_coleccion&gt;".$row['lugar_coleccion']."&lt;/lugar_coleccion&gt;";
        $contenido.="&lt;altura&gt;".$row['altura']."&lt;/altura&gt;";
        $contenido.="&lt;longitud&gt;".$row['longitud']."&lt;/longitud&gt;";
        $contenido.="&lt;diametro_copa&gt;".$row['diametro_copa']."&lt;/diametro_copa&gt;";



		$contenido.="&lt;/pinos&gt;";		
	}

	$contenido.='&lt; /bd &gt;';
	//var_dump($contenido);
	echo $contenido;	
	return $contenido;
}

?>