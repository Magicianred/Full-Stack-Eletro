function exibir_categoria(categoria) {
    //alert(categoria);
    let elementos = document.getElementsByClassName('box_produtos');
    console.log(elementos);
    for (var i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:block";
        else
            elementos[i].style = "display:none";
    }
}

function exibir_todos(categoria) {
    let elementos = document.getElementsByClassName('box_produtos');
    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:block";
    }

}

function destaqueOn(obj) {
    obj.style.cursor = "pointer";
    obj.style.boxShadow = "0 6px 9px 0 rgba(1, 0, 0, 0.5)"
}

function destaqueOff(obj) {
    obj.style.cursor = "default";
    obj.style.boxShadow = "0 0px 0px 0 rgba(1, 0, 0, 0.5)"
}