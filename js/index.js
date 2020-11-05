function exibir_categoria(categorias) {
  
    let elementos = document.getElementsByClassName('bloco_produtos');
    console.log(elementos);
    for (var i=0; i<elementos.length; i++) {
        console.log(elementos [i].id);
        if(categorias == elementos [i].id)
            elementos [i].style = "display:inline-block";
        else
            elementos [i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('bloco_produtos');
    
    for (var i=0; i<elementos.length; i++) {
        elementos [i].style = "display:inline-block";
        }
};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 260)
        imagem.width = 130;
    else
        imagem.width = 260;
}

function mouseSelection(item) {
    item.style.cursor = "pointer";
}