<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cristhian Andres Mamani Mujica">
    <meta name="description" content="Tarea de Diseño Web Pagina resposiba">
    <meta name="keywords" content="desarrollo web">
    <link rel="stylesheet" href="css/PagResponciva.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" class="tabla-estilos">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" class="bootstrap-estilos">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
        <h2>Método de pago</h2>
        <div class="row">
            <!-- Tarjeta del producto -->
            <div class="col">
                <div class="card" style="width: 250px;">
                    <img src="css/imgP/iconoWow.png" class="card-img-top" alt="Nombre del producto" style="width: 250px;">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del producto</h5>
                        <p class="card-text">Precio del producto</p>
                    </div>
                </div>
            </div>
            <!-- Formulario de método de pago -->
            <div class="col">
                <form>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="tarjetaCredito">
                        <label class="form-check-label" for="tarjetaCredito">
                            Tarjeta de crédito
                        </label>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="qr">
                        <label class="form-check-label" for="qr">
                            QR
                        </label>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="visa">
                        <label class="form-check-label" for="visa">
                            Visa
                        </label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="paypal">
                        <label class="form-check-label" for="paypal">
                            PayPal
                        </label>
                    </div>
                    <!-- Aquí puedes añadir más métodos de pago -->
                </form>
            </div>
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