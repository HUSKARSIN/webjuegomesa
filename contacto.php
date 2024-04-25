<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cristhian Andres Mamani Mujica">
    <meta name="description" content="Tarea de Diseño Web Pagina resposiba">
    <meta name="keywords" content="desarrollo web">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" class="tabla-estilos">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" class="bootstrap-estilos">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/PagResponciva.css">
    <title>World Of Games Inicio</title>
</head>
<body>
<div class="contenedor">
<header class="fila">
          <div id="logo" class="col-lg-2 col-md-2 col-sm-3 col-xs-12"><img alt="Logo de World Of Games" class="cabezahed" src="css/imgP/iconowog.jpeg" width="100px"></div>
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"><h1>World Of Games</h1></div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img class="iconosPie" src="css/imgP/youtuve.png" width="50px">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img class="iconosPie" src="css/imgP/face.png" width="50px">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img class="iconosPie" src="css/imgP/insta.png" width="50px">
                </div>       
            </div>
        </header>
        <section id="seccion4" class="fila">
        <aside id="izq" class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <ul>
        <li><a href="inicio.php" style="text-decoration:none; color:white;"><strong>INICIO</strong></a></li>
        <li><a href="catalogo.php" style="text-decoration:none; color:white;"><strong>CATÁLOGO</strong></a></li>
        <li><a href="contacto.php" style="text-decoration:none; color:white;"><strong>CONTACTOS</strong></a></li>
        <li><a href="suscribirse.php" style="text-decoration:none; color:white;"><strong>SUSCRIBIRSE</strong></a></li>
        <li><a href="venta.php" style="text-decoration:none; color:white;"><strong>COMPRAR</strong></a></li>
        <li><a href="login.php" style="text-decoration:none; color:white;"><strong>LOGIN</strong></a></li>
    </ul>
</aside>

    <main class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="container">  
              
            <h2>Contactos de la pagina</h2>
            <?php
                include 'conexionadmin.php';
                $class = new Conexion();
                $conn = $class->conectar();
                $sql = "SELECT * FROM contactos";
                $result = $conn->query($sql);
                echo "<table class=\"table table-striped tabla-estilos\">";

                echo "<thead>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Teléfono</th>";
                echo "<th>Email</th>";
                echo "</tr>";
                echo "</thead>";
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['correo'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
            <div id="mapa" style="height: 400px; margin-top: 20px;">
    <iframe
        width="400px"
        height="400px"
        frameborder="0"
        style="border:0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.9792993092643!2d-66.13955668499567!3d-17.4213951879136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910f68e4c2bb435f%3A0x47c86c724ed4ed2c!2sAv.%20Siglo%20XX%2C%20La%20Paz!5e0!3m2!1sen!2sbo!4v1637187624467!5m2!1sen!2sbo"
        allowfullscreen
    ></iframe>
</div>
        </div> 
    </main>
    </section>
        <footer class="fila">
          <div id="logo" class="col-lg-2 col-md-2 col-sm-3 col-xs-12">WorldOfGames@gmail.com</div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"><img src="imgP/local.png"width="15px">Av.Siglo XX frente al colegio Mejillones</div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">+591 70781433</div> 
        </footer>
    </div>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>