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
    <h1 class="Servicios-Titulo">Nuestros Servicios</h1>
    <p>El centro CAI busca brindar soluciones tecnológicas y mejorar las condiciones de ejecución de procesos de las empresas y distintos sectores de la<br> zona, con el objetivo de investigar, diseñar e innovar procesos y productos.</p>
        <nav class="Servicios_Contenedor">
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1>Arquitectura 4.0</h1>
                    <p>•	Pruebas de concreto.<br>
                        •	Diseño de planos.<br>
                        •	Presupuesto de construcción<br>
                    </p>
                </div>
            </div>
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1 class="Servicios_Targetas_Texto_Titulo">Industria 4.0</h1>
                    <p>
                        •	Inteligencia artificial.<br>
                        •	Desarrollo de software.<br>
                        •	Base de datos.<br>
                        •	Automatización y control.<br>
                        •	Ciberseguridad.<br>
                        •	Internet de las cosas.<br>
                        •	Computo forense.<br>
                        •	Redes.<br>
                        •	Realidad virtual aumentada.<br>
                    </p>
                </div>
            </div>
            <div class="Servicios_Targetas">
                <div class="Servicios_Targetas_Img">
                    <img src="img/sistemas.jpg" alt="">
                </div>
                <div class="Servicios_Targetas_Texto">
                    <h1>Gestión clínica hospitalaria </h1>
                    <p>•	Mantenimiento correctivo y preventivo de equipos y dispositivos médicos.<br>
                        •	Dispositivos de prueba para equipos médicos.<br>
                        •	Diseño de sistemas de gestión digital para documentación clínica.<br>
                    </p>
                </div>
            </div>
        </nav>
    </section>

<!--===============================================================================================
                                            Parte 2
==================================================================================================-->
<section id="Explorar" class="Actividades">
        <h1 class="Actividades_Titulo">Nuestras Actividades</h1>
        <nav class="Actividades_Todas_Targetas">
            <div class="Actividades_Targetas">
                <div class="">

                </div>
                <div>

                </div>
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