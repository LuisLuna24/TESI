function validateInput(event) {
    const key = event.key;
    const regex = /^[a-zA-Z @]+$/; // Expresión regular para solo letras
    
    if (!regex.test(key)) {
      // Si la tecla presionada no es una letra, se evita la entrada
      event.preventDefault();
    }
  }