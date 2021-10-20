/*Accedemos a la galería y a todas las imágenes para generar el efecto Lightbox*/

/*Ejecutamos el código cuando la página se haya cargado*/
document.addEventListener('DOMContentLoaded',()=> {

    /*Guardamos en un arreglo todos los elementos de la clase 'materialboxed'*/
    const imgLightBox=document.querySelectorAll('.materialboxed');

    /*Usamos Materialize*/
    M.Materialbox.init(imgLightBox,{
        inDuration:500,     /*Valores en milisegundos*/
        outDuration:500
    });
});       