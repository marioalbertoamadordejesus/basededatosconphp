<?php
$servername = "localhost";
$database = "usuarios";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Conexion fallida: " . mysqli_connect_error());
}
 
echo "Conexion satisfactoria";

//Crear una variable para guardar el insert de los datos 
$sql = "INSERT INTO alumnos (id,nombre,apellido_paterno,apellido_materno,edad) VALUES (3, 'erick páncho', 'lopez','lopez',29)";
//apertura la conexion e ingresa los datos 
if (mysqli_query($conn, $sql)) {
      echo "datos ingresados correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql2 = "SELECT * FROM alumnos";
if (mysqli_query($conn, $sql2)) {
    echo "hay datos solicitados solo muestralos";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 
?>