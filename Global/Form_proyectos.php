<head>
    <link rel="stylesheet" href="CSS/Fom_proyectos.css">
</head>
<body>
    <section method="post" class="Form_Registro">
        <form action="" method="post" class="Form_Registro_Contenedor">
            <div class="Form_Registro_Titulo">
                <h1 class="Form_Titulo_h1">CCAI TESI</h1>
                <div class="Contenedor_Imagen">
                    <img src="img/img2.jpg" alt="">
                </div>
                <p>Contactate con nosotros</p>
                <div class="Redes_Sociales">
                    <a href=""><img class="facebook2"src="img/facebook.svg" alt=""></a>
                    <a href=""><img class="youtube2"src="img/youtube.svg" alt=""></a>
                    <a href=""><img class="tesi2"src="img/tesi.svg" alt=""></a>
                </div>
            </div>
            <div class="Form_Registro_Preguntas">
                <label class="Registros_Label">Nombre Completo:</label>
                <input type="text" class="Registro_Texto" placeholder="Nombre">
                <label class="Registros_Label">Empresa:</label>
                <input type="text" class="Registro_Texto" placeholder="Empresa o Cargo">
                <label class="Registros_Label">Correo:</label>
                <input type="email" class="Registro_Texto"placeholder="Correo electronico">
                <label class="Registros_Label">Numero de Telefono:</label>
                <input type="text" class="Registro_Texto" placeholder="Numero de telefono">
                <label class="Registros_Label">Mensaje:</label>
                <Textarea class=Registro_Area placeholder="Escribe mensaje"></Textarea>
                

                <div class="Form_Botones">
                    <nav>
                        <input class="Check" type="checkbox" name="" id="myCheckbox">Accepto terminos de <a href="privacidad.php">Privacidad</a></input>
                    </nav>
                    <input type="button" value="Enviar" class="boton_enviar">
                </div>
            </div>
        </form>
    </section>
</body>