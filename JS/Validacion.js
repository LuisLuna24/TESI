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

 
