
// function downloadOnClick(endere){
//     var objFra = document.open(endere);
//     objFra.contentWindow.focus();
//     objFra.contentWindow.print();
// }

function commentOnClick(){
    var alerta;
    var com = prompt("Nós dê um comentario!", "Comentario");
    if (com == null || com == ""){
        alerta = "Comentario vazio.";
    } else {
        alerta = "Obrigada pelo comentario!";
    }
    document.getElementById("buttonRespon").innerHTML = alerta;
}

var inputVue = new Vue({
    el: '#imgVue',
    data:{
        meMouse: 'Pagina carregada ' + new Date().toLocaleString()
    }
})