//Botón de menú responsive con nav lateral

document.getElementById("icon-menu").addEventListener("click",mostrar_menu);

function mostrar_menu(){
    document.getElementById("move-content").classList.toggle('move-container-all');    //toggle agrega y elimina la clase
    document.getElementById("show-menu").classList.toggle('show-lateral');
}

//Código para la funcionalidad del botón de subir para el scroll

document.getElementById("button-up").addEventListener("click",scrollUp);
function scrollUp(){
    var currentScroll=document.documentElement.scrollTop || document.body.scrollTop;        //Guardamos en la variable la posición del scroll
    if(currentScroll>0){

        //Preparamos la animación para subir lentamente hacia el inicio de la página
        window.requestAnimationFrame(scrollUp);
        window.scrollTo(0,currentScroll-(currentScroll/10));
        buttonUp.style.transform="scale(0)";    //Hacemos desaparacer el botón al hacerle click
    }
}


//Establecer la posición en la que se va a ver el botón y en la que va a desaparecer
buttonUp=document.getElementById("button-up");

//Función para saber la posición en la que estamos durante el scroll
window.onscroll=function(){
    var scroll=document.documentElement.scrollTop;

    //Ejecutamos el código en función de la posición durante el scroll
    if(scroll>500){
        buttonUp.style.transform="scale(1)";    //Hacemos aparacer el botón
    }else if(scroll<500){
        buttonUp.style.transform="scale(0)";    //Hacemos desaparacer el botón
    }
}


//SCRIPTS DE LOS FORMULARIOS DE LOGIN - REGISTER

//Ejecutamos la función al hacer click en el botón "Iniciar Sesión"
document.getElementById("btn__iniciar-sesion").addEventListener("click",iniciarSesion);

//Ejecutamos la función al hacer click en el botón "Registrarse"
document.getElementById("btn__registrarse").addEventListener("click",register);

//Ejecutamos la función al hacer "Resize" de la página
window.addEventListener("resize",anchoPagina);

//Declaración de variables
var contenedor_login_register=document.querySelector(".contenedor__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
var caja_trasera_login=document.querySelector(".caja__trasera-login");
var caja_trasera_register=document.querySelector(".caja__trasera-register");

//Función que se ejecuta a medida que hacemos "Resize" de la página
function anchoPagina(){
    if(window.innerWidth>850){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

//Ejecutamos la función de "Resize" para corregir la aparición de texto indebido en el contenedor "caja_trasera_login"  y "caja_trasera_register", al recargar la página
anchoPagina();

//Función que muestra el FORMULARIO DE LOGIN
function iniciarSesion(){

    //Responsive Design
    if(window.innerWidth>850){
        formulario_register.style.display="none";
        contenedor_login_register.style.left="10px";
        formulario_login.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.opacity="0";
    }else{  //Dispositivos de pantalla pequeña
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
        formulario_login.style.display="block";
        caja_trasera_register.style.display="block";
        caja_trasera_login.style.display="none";
    }
}

//Función que muestra el FORMULARIO DE REGISTRO
function register(){

    //Responsive Design
    if(window.innerWidth>850){
        formulario_register.style.display="block";
        contenedor_login_register.style.left="410px";
        formulario_login.style.display="none";
        caja_trasera_register.style.opacity="0";
        caja_trasera_login.style.opacity="1";
    }else{   //Dispositivos de pantalla pequeña
        formulario_register.style.display="block";
        contenedor_login_register.style.left="0px";
        formulario_login.style.display="none";
        caja_trasera_register.style.display="none";
        caja_trasera_login.style.display="block";
        caja_trasera_login.style.opacity="1";
    }
}