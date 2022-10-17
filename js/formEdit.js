const modal_container = document.getElementById('modal_container');


document.querySelectorAll(".edita").forEach((boton)=>{
    boton.addEventListener("click",modificarDatos)
})

function modificarDatos(evento){
    console.log("hola");
    modal_container.classList.add('show');

}

document.querySelector("#close").addEventListener("click",function(e){

    modal_container.classList.remove('show');
})
