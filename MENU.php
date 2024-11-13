<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERVICIO SOCIAL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(d.png); /* Fondo oscuro */
            margin: 0;
            padding: 0;
            color: #000000; /* Color de texto negro */
            animation: fadeIn 1.5s; /* Efecto de aparición para el cuerpo */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        header {
            width: 80%;
            text-align: center;
            padding: 20px;
            background-color: rgb(209, 14, 5); /* Color rojo sólido */
            border-radius: 8px;
            margin: 20px auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra suave */
            transform: translateY(-20px);
            animation: slideIn 0.5s forwards; /* Efecto de deslizamiento */
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav select {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo del select con algo de transparencia */
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transición de fondo */
        }

        nav select:hover {
            background-color: rgba(255, 255, 255, 1); /* Fondo más opaco al pasar el ratón */
        }

        .barnav {
            list-style: none;
            padding: 0;
            display: inline-block; /* Cambio para centrar el menú */
        }

        .barnav li {
            display: inline;
            margin-right: 20px;
        }

        /* Contenedor principal */
        .container {
            display: flex;
            justify-content: space-between;
            margin: 30px auto;
            width: 80%;
            opacity: 0; /* Inicialmente oculto para la animación */
            animation: fadeInUp 1s forwards; /* Efecto de aparición con deslizamiento */
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Estilo del contenedor izquierdo con imagen de fondo y forma triangular */
        .left-section {
            width: 50%;
            background-image: url('joven.jpg'); /* Ruta de la imagen a usar */
            background-size: cover;
            background-position: center;
            clip-path: polygon(0 0, 100% 0, 80% 100%, 0 100%); /* Forma triangular */
            position: relative;
            height: 400px; /* Ajusta la altura según sea necesario */
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.7); /* Sombra interna */
        }

        /* Estilo del contenedor derecho */
        .right-section {
            width: 45%;
            padding: 20px;
            background-color:rgba(255, 255, 255, 0.95); /* Fondo blanco */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            text-decoration-color: black;
            border-radius: 10px;
            transform: scale(0); /* Escala inicial para la animación */
            animation: popIn 0.5s forwards; /* Efecto de aparición */
        }

        @keyframes popIn {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .right-section h3 {
            margin-bottom: 20px;
            color: rgb(209, 14, 5); /* Color de encabezados */
        }

        /* Estilo del aside */
        aside {
            background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco con algo de transparencia */
            padding: 15px;
            border-radius: 10px;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0; /* Inicialmente oculto para la animación */
            animation: fadeIn 1s forwards; /* Efecto de aparición */
        }

        aside h3 {
            margin-top: 0; /* Elimina margen superior */
            color: rgb(209, 14, 5); /* Color de encabezados */
        }

        /* Estilo de los enlaces */
        a {
            color: rgb(209, 14, 5); /* Color rojo */
            text-decoration: none; /* Sin subrayado */
            transition: color 0.3s ease; /* Transición de color */
        }

        a:hover {
            color: #ffdd57; /* Color dorado al pasar el ratón */
            text-decoration: underline; /* Subrayado al pasar el ratón */
        }

        /* Estilo de la ventana emergente */
        .modal {
            display: block; /* Visible por defecto para que aparezca al cargar */
            position: fixed; /* Fijo en la pantalla */
            z-index: 1; /* Asegura que esté por encima de otros elementos */
            left: 0;
            top: 0;
            width: 100%; /* Ancho completo */
            height: 100%; /* Altura completa */
            overflow: auto; /* Permite el desplazamiento si es necesario */
            background-color: rgb(0,0,0); /* Fondo negro */
            background-color: rgba(0,0,0,0.4); /* Fondo negro con opacidad */
        }

        /* Estilo del contenido de la ventana emergente */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* Margen superior */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Ancho de la ventana emergente */
            border-radius: 10px;
            animation: slideIn 0.5s forwards; /* Animación de aparición */
        }

        /* Botón para cerrar la ventana emergente */
        .close {
            color: #aaa;
            float: right; /* Alinear a la derecha */
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black; /* Cambia el color al pasar el ratón */
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilo de los campos del formulario */
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: black; /* Color de texto negro en los campos */
        }

        /* Estilo del botón de enviar */
        button {
            background-color: rgb(209, 14, 5); /* Color del botón */
            color: white; /* Texto blanco */
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transición de fondo */
        }

        button:hover {
            background-color: #ff5733; /* Color más claro al pasar el ratón */
        }
    </style>
</head>

<body>
    <header>
        <h1>SERVICIO SOCIAL</h1>
    </header>

    <nav>
    <ul class="barnav">
        <label for="opcion">
            <img src="vato-removebg-preview.png" width="100" height="100" alt="Logo" align="center">
        </label>
        <select name="opcion" id="opcion" onchange="location = this.value;">
            <option value="">Seleccione una opción</option>
            <option value="cambio1.php">Cambiar información del alumno</option>
            <option value="altaser.php">Alta de Alumno</option>
            <option value="servicio.php" selected>Cambiar información de servicio</option>
            <option value="reporte.php">Reporte de horas</option>
            <option value="KIKI.php">Dar de Baja a un alumno</option>
             <option value="consultalum1.php">Consulta tu Información</option>
        </select>
    </ul>
</nav>


    <div class="container">
        <div class="left-section"></div>
        <div class="right-section">
            <h3>Nuestro Objetivo </h3>
            <p>
                En un mundo donde cada hora cuenta, nos comprometemos a ser el firme respaldo de nuestros estudiantes en su travesía por el servicio social. 
            </p>
            <p>
                Nuestro propósito es crear un entorno seguro y confiable que garantice la salvaguarda de sus horas de servicio, brindando un apoyo incondicional que no solo valida su esfuerzo, sino que también impulsa su desarrollo personal y profesional.
            </p>
        </div>
    </div>

    <aside>
        <h3>Aclarando</h3>
        <p>Solo se validarán las horas si todos los campos de información son llenados.</p>
    </aside>

   

    <script>
        
    </script>
</body>
</html>