<?php
//Creamos la conexión
$conexion=mysqli_connect("localhost","root","","bd");

//generamos la consulta
$sql = "SELECT * FROM pinos";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$pinos = array(); //creamos un array
while($row = mysqli_fetch_array($result)) 
{ 	
	$serie_pino=$row['serie_pino'];
	$nombre_comun=$row['nombre_comun'];
	$nombre_cientifico= $row['nombre_cientifico'] ;
	$especie=$row['especie'];
    $edad=$row['edad'];
    $lugar_coleccion=$row['lugar_coleccion'];
    $altura=$row['altura'];
    $longitud=$row['longitud'];
    $diametro_copa=$row['diametro_copa'];

	
	$pinos[] = array('serie_pino'=> $serie_pino, 
                    'nombre_comun'=> $nombre_comun,
                     'nombre_cientifico'=> $nombre_cientifico,
					'especie'=> $especie, 
                    'edad'=> $edad,
                    'lugar_coleccion'=> $lugar_coleccion,
                    'altura'=> $altura,
                    'longitud'=> $longitud,
                    'diametro_copa'=> $diametro_copa,

                );

}
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

//Creamos el JSON
$json_string = json_encode($pinos);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'usuarios.json';
file_put_contents($file, $json_string);
*/

?>