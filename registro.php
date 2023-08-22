<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/registro.css">
</head>
<body>
<!--===============================================================================================
                                            Tituo
==================================================================================================-->
    <header>
        <?php require('Global/cabesera.php'); ?> 
    </header>
    <div  class="tituloCCAI">
        <div id="divTitulo" class="divTitulo">
            <h1>Registrate</h1>
            <label>Bienvenido registra tu residencia y/o servicio social</label>
        </div>
    </div>
<!--===============================================================================================
                                            Parte 1
==================================================================================================-->
    <section class="Registro_Presentacion">
        <nav class="Registro_Presentacion_Titulo">
            <h1>¡Registrate!</h1>
            <p>Registra tu residencia, servicio social o estancia de investigacion</p>
        </nav>
        <nav class="Registro_Presentacion_Contenedor">
            <img src="img/img1.jpg" alt="">
            <img src="img/img3.jpg" alt="">
            <img src="img/img6.jpg" alt="">
            <img src="img/img2.jpg" alt="">
            <img src="img/img5.jpg" alt="">
            <img src="img/img4.jpg" alt="">
        </nav>
    </section>
<!--===============================================================================================
                                            Parte 1
==================================================================================================-->
    <?php require('Global/Formulario.php'); ?> 

<!--===============================================================================================
                                            Parte final
==================================================================================================-->
    <footer class="fin">
        <?php require('Global/footer.php');?>
    </footer> 
    
    <script src="JS/Validacion.js"></script>
</body>
</html>