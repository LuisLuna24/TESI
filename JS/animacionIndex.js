window.addEventListener('scroll',function(){
    let animacion2 = this.document.getElementById('Instalaciones');
    let posicion = animacion2.getBoundingClientRect().top;

    let tamañopantalla = this.window.innerHeight;

    if(posicion < tamañopantalla){
        animacion2.style.animation = 'mover1 1s ease-out';
    }
})

window.addEventListener('scroll',function(){
    let animacion2 = this.document.getElementById('Servicios');
    let posicion = animacion2.getBoundingClientRect().top;

    let tamañopantalla = this.window.innerHeight;

    if(posicion < tamañopantalla){
        animacion2.style.animation = 'mover1 1s ease-out';
    }
})

window.addEventListener('scroll',function(){
    let animacion2 = this.document.getElementById('Explorar');
    let posicion = animacion2.getBoundingClientRect().top;

    let tamañopantalla = this.window.innerHeight;

    if(posicion < tamañopantalla){
        animacion2.style.animation = 'mover1 1s ease-out';
    }
})

window.addEventListener('scroll',function(){
    let animacion2 = this.document.getElementById('Impacto');
    let posicion = animacion2.getBoundingClientRect().top;

    let tamañopantalla = this.window.innerHeight;

    if(posicion < tamañopantalla){
        animacion2.style.animation = 'mover1 1s ease-out';
    }
})