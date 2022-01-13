<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modificar Pino</title>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloRegistrar.css">
  </head>
  <body background= background1.jpg> 
  <div id="containe1">
      <h2>MODIFICAR</h2>
      
    <?php
    $conexion=mysqli_connect("localhost","root","","bd");
        if(isset($_POST['enviar'])){
            //Aqui entra cuando se presiona el boton 
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
            //update productos
            $sql="update pinos set serie_pino='".$serie_pino."',nombre_comun='".$nombre_comun."',
            nombre_cientifico='".$nombre_cientifico."',especie='".$especie."',edad='".$edad."',
            lugar_coleccion='".$lugar_coleccion."',altura='".$altura."',grosor='".$grosor."'
            ,longitud='".$longitud."',diametro_copa='".$diametro_copa."' where serie_pino='".$serie_pino."'";
            
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                        alert('Los datos se actualizaron correctamente');
                        location.assign('consultarPino.php');
                        </script>";
            }else{
                echo "<script language='JavaScript'>
                        alert('Los datos NO se actualizaron correctamente');
                        location.assign('consultarPino.php');
                        </script>";
            }
            mysqli_close($conexion);

        }else{
            //Aqui entra si no se presiona el boton enviar
            $serie_pino=$_GET['serie_pino'];
            $sql="select * from pinos where serie_pino='$serie_pino'";
            $resultado=mysqli_query($conexion,$sql);    

            $mostrar=mysqli_fetch_assoc($resultado);
            $serie_pino=$mostrar["serie_pino"];
            $nombre_comun=$mostrar["nombre_comun"];
            $nombre_cientifico=$mostrar["nombre_cientifico"];
            $especie=$mostrar["especie"];
            $edad=$mostrar["edad"];
            $lugar_coleccion=$mostrar["lugar_coleccion"];
            $altura=$mostrar["altura"];
            $grosor=$mostrar["grosor"];
            $longitud=$mostrar["longitud"];
            $diametro_copa=$mostrar["diametro_copa"];

            mysqli_close($conexion);
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

        <input type="text" name="nombre_comun" placeholder="NOMBRE COMUN" required value="<?php echo $nombre_comun; ?>">
        <input type="text" name="nombre_cientifico" placeholder="NOMBRE CIENTIFICO" required value="<?php echo $nombre_cientifico; ?>">
        <input type="text" name="especie" placeholder="ESPECIE" required value="<?php echo $especie; ?>">
        <input type="text" name="edad" placeholder="EDAD" required value="<?php echo $edad; ?>">
        <input type="text" name="lugar_coleccion" placeholder="LUGAR DE COLECCIÓN" required value="<?php echo $lugar_coleccion; ?>">
        <input type="text" name="altura" placeholder="ALTURA" required value="<?php echo $altura; ?>">
        <input type="text" name="grosor" placeholder="GROSOR" required value="<?php echo $grosor; ?>">
        <input type="text" name="longitud" placeholder="LONGITUD" required value="<?php echo $longitud; ?>">
        <input type="text" name="diametro_copa" placeholder="DIAMETRO DE COPA" required value="<?php echo $diametro_copa; ?>">
        <input type="hidden" name="serie_pino" value="<?php echo $serie_pino; ?>"> <br>

       <button input type="submit" name="enviar" value="ACTUALIZAR">ACTUALIZAR</button> 
      
       <button input type="submit" name="regresar" value="REGRESAR">REGRESAR</button>


    </form>
    <?php
        }  if(isset($_POST['regresar'])){
            header("location:consultarPino.php");
        }
    ?>
</div>
  </body>
</html>