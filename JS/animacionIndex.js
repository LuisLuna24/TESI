

window.addEventListener('scroll',function(){
    let animacion2 = this.document.getElementById('Servicios');
    let posicion = animacion2.getBoundingClientRect().top;

    let animacion3= this.document.getElementById('Contacto_Index');
    let posicion2= animacion3.getBoundingClientRect().top;

    let tamañopantalla = this.window.innerHeight;

    if(posicion < tamañopantalla){
        animacion2.style.animation = 'mover1 1s ease-out';
        
    }
    if(posicion2 < tamañopantalla){
        animacion3.style.animation = 'mover1 1s ease-out';
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