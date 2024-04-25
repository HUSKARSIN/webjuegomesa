
<?php
require_once('conexionadmin.php');

$mensaje = "";
$conexion = Conexion::conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion']) && $_POST['accion'] == 'Suscribirse') {
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : null;
    $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : null;
    $correo = isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : null;
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : null;
    $gustos = isset($_POST['gusto']) ? implode(", ", $_POST['gusto']) : null;

    if (!empty($nombre) && !empty($telefono) && !empty($correo) && !empty($genero) && !empty($gustos)) {
        try {
            $stmt = $conexion->prepare("INSERT INTO usuario (nombre, correo, telefono, genero, gustos) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $correo);
            $stmt->bindParam(3, $telefono);
            $stmt->bindParam(4, $genero);
            $stmt->bindParam(5, $gustos);
            $stmt->execute();
            $stmt = null;
            $mensaje = "¡Te has registrado correctamente!";
        } catch (PDOException $e) {
            $mensaje = "Error: " . $e->getMessage();
        }
    } else {
        $mensaje = "Llene todos los campos del formulario.";
    }
}
?>
<!---->
<!---->
<!---->
<!---->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cristhian Andres Mamani Mujica">
    <meta name="description" content="Tarea de Diseño Web Página responsive">
    <meta name="keywords" content="desarrollo web">
    <link rel="stylesheet" href="css/PagResponciva.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" class="tabla-estilos">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" class="bootstrap-estilos">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>World Of Games Inicio</title>
</head>
<body>
    <div class="contenedor">
    <!--<header class="fila">
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
        </header>-->
        <header class="fila">
    <div id="logo" class="col-lg-2 col-md-2 col-sm-3 col-xs-12"><img alt="Logo de World Of Games" class="cabezahed" src="css/imgP/iconowog.jpeg" width="100px"></div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"><h1>World Of Games</h1></div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img class="iconosPie" src="css/imgP/youtuve.png" width="50px">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img class="iconosPie" src="css/imgP/face.png" width="50px">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <img class="iconosPie" src="css/imgP/insta.png" width="50px">
            </div>
           
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
                <h2>Suscríbete a nuestra página</h2>
                <hr>
                <br>
                <div id="base-datos">
                    <?php echo $mensaje; ?>
                    <?php
                        $stmt = $conexion->prepare("SELECT nombre, correo, telefono, genero, gustos FROM usuario");
                        $stmt->execute();
                        echo "<style>";
                        echo "table#tablaUsuarios td, table#tablaUsuarios th {";
                        echo "border: 1px solid #000;";
                        echo "margin: 2px;";
                        echo "}";
                        echo "</style>";
                        echo "<table id=\"tablaUsuarios\" class=\"display tabla-borde\">";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Nombre</th>";
                        echo "<th>Correo</th>";
                        echo "<th>Teléfono</th>";
                        echo "<th>Género</th>";
                        echo "<th>Gustos</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$fila['nombre']}</td>";
                            echo "<td>{$fila['correo']}</td>";
                            echo "<td>{$fila['telefono']}</td>";
                            echo "<td>{$fila['genero']}</td>";
                            echo "<td>{$fila['gustos']}</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        ?>
                        <br>
                    <form method="POST" id="formulario" enctype="multipart/form-data">
                            <label>Nombre:</label>
                            <input type="text" name="nombre" required>
                            <br>
                            <br>
                            <label>Correo: </label>
                            <input type="email" name="correo" required>
                            <br>
                            <br>
                            <label>Teléfono:</label>
                            <input type="tel" name="telefono" required>
                            <br>
                            <br>
                            <label>Género:</label>
                            <div>
                                <input type="radio" name="genero" value="masculino" checked> Masculino
                                <input type="radio" name="genero" value="femenino"> Femenino
                            </div>
                            <br>    
                            <label>Gustos de Juegos de Mesa:</label>
                            <div>
                                <input type="checkbox" name="gusto[]" value="accion"> Acción
                                <input type="checkbox" name="gusto[]" value="aventura"> Aventura
                                <input type="checkbox" name="gusto[]" value="ciencia_ficcion"> Ciencia Ficción
                                <input type="checkbox" name="gusto[]" value="familiar"> Familiar
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="accion" id="accion" class="btn btn-success" value="Suscribirse">
                            </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="fila">
          <div id="logo" class="col-lg-2 col-md-2 col-sm-3 col-xs-12">WorldOfGames@gmail.com</div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"><img src="imgP/local.png"width="15px">Av.Siglo XX frente al colegio Mejillones</div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">+591 70781433</div> 
        </footer>
    </div>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#tablaUsuarios').DataTable();
        });
    </script>
</body>
</html>
