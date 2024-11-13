<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '') or die("Problemas en la conexión");
mysqli_select_db($conexion, 'faltas') or die("Problemas en la selección de la base de datos");

// Insertar los datos en la base de datos
mysqli_query($conexion, "INSERT INTO justificacion (id_falta, fec_creacion, fec_justificacion, falta_dia, falta_hora, justificacion, fecha_falta) 
    VALUES ('$_REQUEST[id_falta]', '$_REQUEST[fec_creacion]', '$_REQUEST[fec_justificacion]', '$_REQUEST[falta_dia]', '$_REQUEST[falta_hora]', '$_REQUEST[justificacion]', '$_REQUEST[fecha_falta]')")
or die("Problemas en el insert " . mysqli_error($conexion));

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir a la página de éxito
header("Location: exito.php");
exit;
?>
