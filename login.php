<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristhian Andres Mamani Mujica">
    <meta name="description" content="Tarea de Diseño Web Página Responsiva">
    <meta name="keywords" content="desarrollo web">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilo.css">
    <title>World Of Games Inicio</title>
    <script>
    function Validar() {
        var nombre = document.getElementById('nombre').value;
        var contraseña = document.getElementById('contraseña').value;

        if (nombre == 'cristhian' && contraseña == '123') {
            window.location.href = 'inicio.php';
            return false;
        }
        return true;
    }
    </script>
</head>
<body>
    <div class="wrapper">
        <form action="" method="post" onsubmit="return Validar();">
            <h1>World Of Games</h1>
            <h2>iniciar sesión</h2>
            <div class="input-box">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            </div>
            <div class="input-box">
                <input type="password" name="contrasena" id="contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn">INICIAR SESIÓN</button>
        </form>
    </div>
</body>
</html>




