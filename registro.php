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
        <div  class="tituloCCAI">
            <div id="divTitulo" class="divTitulo">
                <h1>Registrate</h1>
                <label>Bienvenido registra tu residencia y/o servicio social</label>
            </div>
        </div>
    </header>
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
    <section class="Registro">
        <nav class="Registro_TItulo">
            <h1>Registro</h1>
        </nav>
        <nav class="Registro_Contenedor">
            <div>
                <label class="Registro_Label">Nombre:</label>
                <input type="text"  id="myInput" onkeydown="validateInput(event)" class="Registro_text">
                <label class="Registro_Label">Apellido:</label>
                <input type="text" id="myInput" onkeydown="validateInput(event)"class="Registro_text">
                <label class="Registro_Label">Correo</label>
                <input type="email" id="myInput" onkeydown="validateInput(event)"class="Registro_text">
                <label class="Registro_Label">Carrera o División</label>
                <input type="email" class="Registro_text">
                <label class="Registro_Label">Servicio:</label>
                <select class="Registro_text">
                    <option>Estancia Investigacion</option>
                    <option>Servicio Social</option>
                    <option>Residencia Profecional</option>
                </select>
                <label class="Registro_Label">Interno o Extero</label>
                <select class="Registro_text">
                    <option>Comunidad TESI</option>
                    <option>Externo</option>
                </select>
                <label class="Registro_Label">Motivo</label>
                <textarea cols="30" rows="10" class="Registro_area"></textarea>
            </div>
        </nav>

    </section>

<!--===============================================================================================
                                            Parte final
==================================================================================================-->
    <footer class="fin">
        <?php require('Global/footer.php');?>
    </footer> 
    
    <script src="JS/Validacion.js"></script>
</body>
</html>