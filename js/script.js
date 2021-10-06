document.getElementById("icon-menu").addEventListener("click",mostrar_menu);

function mostrar_menu(){
    document.getElementById("move-content").classList.toggle('move-container-all');    //toggle agrega y elimina la clase
    document.getElementById("show-menu").classList.toggle('show-lateral');
}