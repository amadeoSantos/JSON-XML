<?php
$serie_pino=$_POST['serie_pino'];
$nombre_comun=$_POST['nombre_comun'];
$nombre_cientifico=$_POST['nombre_cientifico'];
$especie=$_POST['especie'];
$edad=$_POST['edad'];
$lugar_coleccion=$_POST['lugar_coleccion'];
$altura=$_POST['altura'];
$grosor=$_POST['grosor'];
$longitud=$_POST['longitud'];
$diametro_copa=$_POST['diametro_copa'];
$conexion=mysqli_connect("localhost","root","","bd");
$insertar="INSERT INTO pinos( serie_pino,nombre_comun, nombre_cientifico, especie, edad, lugar_coleccion, altura, grosor, longitud, diametro_copa) 
VALUES ( '$serie_pino','$nombre_comun','$nombre_cientifico', '$especie', '$edad', '$lugar_coleccion', '$altura','$grosor', '$longitud', '$diametro_copa')";
//buscamos los datos si es que existen 
$verifica_pino = mysqli_query($conexion, "SELECT * FROM pino where serie_pino='$serie_pino'");

//se guardara
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo '<script> 
    alert("Error"); 
    window.history.go(-1);
    </script>'; //muestra la alerta
    exit;
}else{
    echo '<script> 
    alert("Registrado con éxito"); 
    window.history.go(-1);
    </script>'; //muestra la alerta
    exit;
}
mysqli_close($conexion);
?>