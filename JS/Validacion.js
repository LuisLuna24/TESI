function validateInput(event) {
    const key = event.key;
    const regex = /^[a-zA-Z .]+$/; // Expresión regular para solo letras
    
    if (!regex.test(key)) {
      // Si la tecla presionada no es una letra, se evita la entrada
      event.preventDefault();
    }
  }


  function myFunction(event) {
    const key = event.key;
    const regex = /^[a-zA-Z .@0-9_]+$/; // Expresión regular para solo letras
    
    if (!regex.test(key)) {
      // Si la tecla presionada no es una letra, se evita la entrada
      event.preventDefault();
    }
  }

  function validateInt(event) {
    const key = event.key;
  
    // Verificar si la tecla presionada es un número (0-9) o teclas especiales como backspace, delete, flechas de dirección, etc.
    const isNumber = /^\d$/.test(key) || ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight'].includes(key);
  
    if (!isNumber) {
      // Si la tecla presionada no es un número, se evita la entrada
      event.preventDefault();
    }
    
  }

  function limitInputLength(input, maxLength) {
    if (input.value.length > maxLength) {
      input.value = input.value.slice(0, maxLength); // Recortar el valor al máximo permitido
    }
  }

const checkbox = document.getElementById('myCheckbox');
const button = document.getElementById('myButton');
const boton=document.getElementsByClassName("Btn_Registrar");

checkbox.addEventListener('change', function() {
  button.disabled = !checkbox.checked;
  if (!checkbox.checked) {
    boton.style.border="5px solid red";
    
  }
});

function validarCheckbox() {
  var checkbox = document.getElementById('myCheckbox');
  var button = document.getElementById('myButton'); 
  var letras = document.getElementById('invalido');
  if (!checkbox.checked) {
    button.style.border="2px solid red";
    button.style.color="red";
    letras.style.opacity="1";
    button.disabled = true;
  } else {
    button.disabled = false;
  }
}

