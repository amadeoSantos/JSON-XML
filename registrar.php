<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar Pinos</title>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloRegistrar.css">
  </head>
  <body background= background1.jpg> 
    <div id="container">
        <h2>REGISTRAR</h2> <br>
      
        <form action="validarPino.php" method="post">
            <input type="" name="serie_pino" placeholder="SERIE PINO" required> <br>
            <input type="" name="nombre_comun" placeholder="NOMBRE COMUN" required> <br>
            <input type="" name="nombre_cientifico" placeholder="NOMBRE CIENTIFICO" required><br>
            <input type="" name="especie" placeholder="ESPECIE" required><br>
            <input type="" name="edad" placeholder="EDAD" required><br>
            <input type="" name="lugar_coleccion" placeholder="LUGAR DE COLECCIÓN" required><br>
            <input type="" name="altura" placeholder="ALTURA" required><br>
            <input type="" name="grosor" placeholder="GROSOR" required>
            <input type="" name="longitud" placeholder="LONGITUD" required>
            <input type="" name="diametro_copa" placeholder="DIAMETRO DE COPA" required>
                <br>
            <button>Limpiar</button>
            <button type="submit" value="Registrar">Registrar</button>
        </form>
    </div>
  </body>
</html>
