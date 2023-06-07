<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Servicios.css">
</head>
<body>
<!--===============================================================================================
                                            Tituo
==================================================================================================-->
    <header>
        <?php require('Global/cabesera.php'); ?> 
        <div  class="tituloCCAI">
            <div id="divTitulo" class="divTitulo">
                <h1>Servicios</h1>
                <label>Bienvenido</label>
            </div>
        </div>
    </header>
<!--===============================================================================================
                                            Parte 1
==================================================================================================-->
    <section class="Servicios">
    <h1>Nuestros Servicios</h1>
        <nav class="Servicios_Contenedor">
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1>Titulo</h1>
                    <p>Parrafo</p>
                </div>
            </div>
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1>Titulo</h1>
                    <p>Parrafo</p>
                </div>
            </div>
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1>Titulo</h1>
                    <p>Parrafo</p>
                </div>
            </div>
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1>Titulo</h1>
                    <p>Parrafo</p>
                </div>
            </div>

        </nav>
    </section>

<!--===============================================================================================
                                            Parte 2
==================================================================================================-->
<section id="Explorar" class="Explorar">
        <h1 class="Explorar_Titulo">Explorar Web</h1>
        <nav class="Explorar_Todas_Targetas">
            <div class="Explorar_Targetas">
                <img src="img/services.svg" alt="">
                <div class="Explorar_Targetas_Textos">
                    <h1>Nuestros<br>Servicios</h1>
                    <p>Informacion a qui</p>
                </div>
                <a class="Explorar_Boton" href="servicios.php">Leer Más</a>
            </div>
            <div class="Explorar_Targetas">
                <img src="img/services.svg" alt="">
                <div class="Explorar_Targetas_Textos">
                    <h1>Nuestros<br>Servicios</h1>
                    <p>Informacion a qui</p>
                </div>
                <a class="Explorar_Boton" href="servicios.php">Leer Más</a>
            </div>
            <div class="Explorar_Targetas">
                <img src="img/services.svg" alt="">
                <div class="Explorar_Targetas_Textos">
                    <h1>Nuestros<br>Servicios</h1>
                    <p>Informacion a qui</p>
                </div>
                <a class="Explorar_Boton" href="servicios.php">Leer Más</a>
            </div>
            <div class="Explorar_Targetas">
                <img src="img/services.svg" alt="">
                <div class="Explorar_Targetas_Textos">
                    <h1>Nuestros<br>Servicios</h1>
                    <p>Informacion a qui</p>
                </div>
                <a class="Explorar_Boton" href="servicios.php">Leer Más</a>
            </div>
        </nav>
        
    </section>
<!--===============================================================================================
                                            Parte final
==================================================================================================-->
    <footer class="fin">
        <?php require('Global/footer.php');?>
    </footer>
</body>
</html>