<head>
    <link rel="stylesheet" href="CSS/Fom_proyectos.css">
    
</head>
<body>
    <section  class="Form_Registro">
    <form class="Form_Registro_Contenedor" id="Formulario">
            <div class="Form_Registro_Titulo">
                <h1 class="Form_Titulo_h1">CCAI TESI</h1>
                <div class="Contenedor_Imagen">
                    <img src="img/img2.jpg" alt="">
                </div>
                <p>Contactate con nosotros</p>
                <div class="Redes_Sociales">
                    <div class="Redes_Sociales_facebook">
                        <a href=""><img src="img/facebook.svg" alt=""></a>
                        <label class="titulo_facebook">Facebook</label>
                    </div>
                    <div class="Redes_Sociales_youtube">
                        <a href=""><img src="img/youtube.svg" alt=""></a>
                        <label class="titulo_youtube">Youtube</label>
                    </div>
                    <div class="Redes_Sociales_tesi">
                        <a href=""><img src="img/tesi.svg" alt=""></a>
                        <label class="titulo_tesi">Tesi</label>
                    </div>
                </div>
            </div>
            <div class="Form_Registro_Preguntas">
                <label class="Registros_Label">Nombre Completo:</label>
                <input type="text" class="Registro_Texto" placeholder="Nombre" onkeydown="validateInput(event)">
                <label class="Registros_Label">Empresa:</label>
                <input type="text" class="Registro_Texto" placeholder="Empresa o Cargo" onkeydown="validateInput(event)">
                <label class="Registros_Label">Correo:</label>
                <input type="email" class="Registro_Texto"placeholder="Correo electronico" onkeydown="myFunction(event)">
                <label class="Registros_Label">Numero de Telefono:</label>
                <input type="text" class="Registro_Texto" placeholder="Numero de telefono" onkeydown="validateInt(event)" oninput="limitInputLength(this, 10)">
                <label class="Registros_Label">Mensaje:</label>
                <Textarea class=Registro_Area placeholder="Escribe mensaje" onkeydown="validateInput2(event)" oninput="limitInputLength(this, 300)" ></Textarea>
                

                <div class="Form_Botones">
                    <nav class="nav_form">
                        <input class="Check" type="checkbox" name="" id="myCheckbox" onclick="validarCheckbox()">Accepto terminos de <a href="privacidad.php">Privacidad</a></input>
                    </nav>
                    <h1 class="invalido" id="invalido">Acepte terminos de Privacidad</h1>

                    
                </div>
                <input type="submit" class="boton_enviar" id="myButton" onclick="validarCheckbox()"></input>
            </div>
         </form>
    </section>

    <script src="JS/Form_Proyectos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>



        