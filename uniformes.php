<?php include("db.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniformes Escolares</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" sizes="16x16" href="imagenes/favicon-16x16.png">
</head>
<body>
    <header>
        <div id="nav-div">
            <div id="div-icononav">
                <a href="index.html"><img id="img-nav" src="imagenes/logo_blanco.png" alt="logo-nav"></a>
            </div>
            <div id="botones-nav">
                <a class="boton-nav" href="index.html">Inicio</a>
            </div>
        </div>
    </header>
    <main>
        <div style="width: 100%; height: 65px;"></div>
        <div id="secciones-productos">
            <div class="botones-secciones">
                <a class="boton-section-select" href="uniformes.php">UNIFORMES</a>
                <a class="boton-section" href="promos.html">PROMOCIONES</a>
            </div>
        </div>
        <hr>
        <section id="uniformes-section">
            <div class="productos">
                <?php
                $query = "SELECT * FROM uniformes";
                $resultado = $conexion->query($query);

                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        $nombre = htmlspecialchars($fila['nombre_uniforme']);
                        $precio = number_format($fila['precio'], 0, ',', '.');
                        $imagen = htmlspecialchars($fila['imagen_uniforme']);

                        echo "
                        <div class='producto'>
                            <img class='producto-img' src='imagenes/productos/$imagen' alt='$nombre'>
                            <p>$nombre</p>
                            <p>\$$precio</p>
                            <a href='#' style='text-decoration: none;' onclick=\"enviarWhatsapp('$nombre')\">
                                <div class='boton-contacto'>
                                    <img src='imagenes/whatsapp.png' alt='whatsapp-logo'>
                                    <p class='texto-wsp'>Enviar Whatsapp</p>
                                </div>
                            </a>
                        </div>";
                    }
                } else {
                    echo '<p>No hay uniformes cargados aún.</p>';
                }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <section id="contact-section">
            <div id="contactos-div">
                <div style="display: flex; align-items: center;">
                    <img id="logo-contact" src="imagenes/logo_blanco.png" alt="">
                </div>
                <div>
                    <h1 style="font-size: 20px; padding: 0px 0px 15px 0px;">CONTACTO</h1>
                    <div class="icono-footer">
                        <img src="imagenes/telefono.png" alt="telefono">
                        <h4>3794-930175</h4>
                    </div>
                    <div class="icono-footer">
                        <img src="imagenes/email.png" alt="email">
                        <h4>benjajara2100@gmail.com</h4>
                    </div>
                    <div class="icono-footer">
                        <img src="imagenes/direccion.png" alt="dirección">
                        <h4>San Miguel Corrientes, Argentina</h4>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script>
        function enviarWhatsapp(NombreProducto) {
            const mensaje = `Hola, estoy interesado en el producto ${NombreProducto} ¿Podrías darme más información?`;
            const url = `https://wa.me/5493794930175?text=${encodeURIComponent(mensaje)}`;
            window.open(url, '_blank');
        }
    </script>
</body>
</html>