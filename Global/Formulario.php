
<head>
    <link rel="stylesheet" href="CSS/Formulario.css">
</head>
<body>
<Section class="Registro">
        <form class="form-registro">
            <h4>Formulario Registro</h4>
            <input class="controls" type="text" name="Nombre" id="Nombres" placeholder="Ingrese su Nombre Completo" onkeydown="validateInput(event)">
            <input class="controls" type="text" name="Empresa o Cargo" id="Empresa o Cargo" placeholder="Ingrese su Empresa o Cargo" onkeydown="validateInput(event)">
            <input class="controls" type="email" name="Correo Electronico" id="Correo Electronico" placeholder="Correo Electronico" onkeydown="myFunction(event)">
            <select class="controls" name="Servicios">
                <optgroup label="seleccionar servicio">
                    <option>Servicio 1</option>
                    <option>Servicio 2</option>
                    <option>Servicio 3</option>
                    <option>Servicio 4</option>
                    <option>Servicio 5</option>
                </optgroup>
            </select>
            <select class="controls" name="seleccionar">
                <optgroup label="selecciona">
                    <option>Comunidad TESI</option>
                    <option>Externo</option>
                </optgroup>
            </select>
            <input class="controls" type="text" name="Numero de telefono" id="Numero de telefono" placeholder="Numero de telefono" onkeydown="validateInt(event)" oninput="limitInputLength(this, 10)">
            <textarea class="controls_Area" type="text" name="Mensaje" id="Mensaje" placeholder="Mensaje" onkeydown="validateInput(event)"></textarea>
            <nav class="Hola">
                <input type="checkbox" name="" id="myCheckbox" onclick="validarCheckbox()">Estoy deacuerdo con <a href="privacidad.php">Terminos y Condiciones</a></input>
            </nav>
            <h1 class="invalido" id="invalido">Primero hacepte terminos y condiciones</h1>
            <button class="Btn_Registrar" id="myButton" onclick="validarCheckbox()">Registrar
                <div class="star-1">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                </div>
                <div class="star-2">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                </div>
                <div class="star-3">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                </div>
                <div class="star-4">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                </div>
                <div class="star-5">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                </div>
                <div class="star-6">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                </div>
            </button>
            
        </form>
    </Section>
        <script src="JS/Validacion.js"></script>
</body>
</html>