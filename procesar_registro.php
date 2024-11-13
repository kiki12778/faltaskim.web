<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <!-- Enlace a tu archivo CSS -->
    <link rel="stylesheet" href="styles.css">
</style>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <div class="user-icon">👤</div>
            <h1>¡Correcto!</h1>
           <font face="Arial"><p></p></font>
        </div>
        <div class="form-section">
           <center><h2>Datos Registrados</h2></center>
            <!-- Formulario con Bootstrap, Font Awesome y validación -->
             <?php


$conexion=mysqli_connect('localhost','root','') or die("Problemas en la conexion");

mysqli_select_db($conexion,'faltas') or die("Problemas en la seleccion de la base de datos");

mysqli_query($conexion,"INSERT INTO estudiantes(matricula,nombre,ap_p,ap_m,grupo,turno) values
   ('$_REQUEST[matricula]','$_REQUEST[nombre]','$_REQUEST[ap_p]','$_REQUEST[ap_m]','$_REQUEST[grupo]','$_REQUEST[turno]')",)
or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El Alumno fue registrado.";


?>
                <a href="menu.php" class="btn btn-secondary w-100">Volver al Menú</a>
            </form>
        </div>
    </div>
</body>
</html>

















































