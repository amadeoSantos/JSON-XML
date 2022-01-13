<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultar Pinos</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, se eliminán los datos');
        }
    </script>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloConsultarUsuario.css">
  </head>
  <body background= fondo2.jpg>
    <div id="container"> 
    <br>
      <h2 style="text-align:center">PINOS</h2>
      <br>
      <br>
    <table style="text-align:center" align="center" width="65%" cellspacing="0" cellpadding="6" bgcolor="DAFDCD" border="2" bordercolor="black">
        <tr>
            <td bgcolor="#32B814" ><b>Opciones</b> </td>
            <td bgcolor="#32B814"><b>Serie de pino</b> </td>
            <td bgcolor="#32B814"><b>Nombre común</b></td>
            <td bgcolor="#32B814"><b>Nombre científico</b></td>
            <td bgcolor="#32B814"><b>Especie</b> </td>
            <td bgcolor="#32B814"><b>Edad</b> </td>
            <td bgcolor="#32B814"><b>Lugar de colección</b> </td>
            <td bgcolor="#32B814"><b>Altura</b> </td>
            <td bgcolor="#32B814"><b>Grosor</b> </td>
            <td bgcolor="#32B814"><b>longitud</b> </td>
            <td bgcolor="#32B814"><b>Diámetro de copa</b> </td>
            
        </tr>
        <?php
        $conexion=mysqli_connect("localhost","root","","bd");
            $sql="SELECT * from pinos";
            $result=mysqli_query ($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
            <td>  
            <button> <?php echo "<a href='modificarPino.php?serie_pino=".$mostrar['serie_pino']."'>EDITAR</a>"; ?></button>
                <button> <?php echo "<a href='eliminarPino.php?serie_pino=".$mostrar['serie_pino']."'
                    onclick='return confirmar()'>ELIMINAR</a>"; ?> </button>

            </td>
            <td><?php echo $mostrar['serie_pino'] ?></td>
            <td><?php echo $mostrar['nombre_comun'] ?></td>
            <td><?php echo $mostrar['nombre_cientifico'] ?></td>
            <td><?php echo $mostrar['especie'] ?></td>
            <td><?php echo $mostrar['edad'] ?></td>
            <td><?php echo $mostrar['lugar_coleccion'] ?></td>
            <td><?php echo $mostrar['altura'] ?></td>
            <td><?php echo $mostrar['grosor'] ?></td>
            <td><?php echo $mostrar['longitud'] ?></td>
            <td><?php echo $mostrar['diametro_copa'] ?></td>      
    </tr>
    <?php
    }
    ?>
    </table>
  </body>
</html>

