<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="diseñojus2.css">
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
            <center><h2>Justificación Exitosa</h2></center>
            <!-- Formulario con Bootstrap, Font Awesome y validación -->
            <?php
                $conexion = mysqli_connect('localhost', 'root', '') or die("Problemas en la conexión");
                mysqli_select_db($conexion, 'faltas') or die("Problemas en la selección de la base de datos");

                mysqli_query($conexion, "INSERT INTO justificacion(id_falta, fec_creacion, fec_justificacion, falta_dia, falta_hora, justificacion, fecha_falta) 
                    VALUES ('$_REQUEST[id_falta]', '$_REQUEST[fec_creacion]', '$_REQUEST[fec_justificacion]', '$_REQUEST[falta_dia]', '$_REQUEST[falta_hora]', '$_REQUEST[justificacion]', '$_REQUEST[fecha_falta]')")
                or die("Problemas en el select" . mysqli_error($conexion));

                mysqli_close($conexion);
                echo "Justificación Hecha.";
            ?>
            <a href="menu.php" class="btn btn-secondary w-100">Volver al Menú</a>
        </div>
    </div>
</body>
</html>
