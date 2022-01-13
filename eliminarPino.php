<?php
     $conexion=mysqli_connect("localhost","root","","bd");
     $serie_pino=$_GET['serie_pino'];
     
    
    //delete from produtos where id=$id
    $sql="delete from pinos where serie_pino='".$serie_pino."'";
    $resultado=mysqli_query($conexion,$sql); 

    if($resultado){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminarón correctamente');
                location.assign('consultarPino.php');
                </script>";
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se eliminarón correctamente');
                location.assign('consultarPino.php');
                </script>";
    }
?>