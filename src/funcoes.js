
function commentOnClick(){
    var alerta;
    var com = prompt("Nós dê um comentario!", "");
    if (com == null || com == ""){
        alerta = "Comentario vazio.";
    } else {
        alerta = "Obrigada pelo comentario!";
    }   
    document.getElementById("buttonRespon").innerHTML = alerta;
    return com;
}

var imgVue = new Vue({
    el: '#imgVue',
    data:{
        meMouse: 'Pagina carregada ' + new Date().toLocaleString()
    }
})