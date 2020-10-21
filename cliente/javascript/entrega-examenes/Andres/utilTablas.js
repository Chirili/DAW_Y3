function genTabla(aTabla){
    let tabla = document.createElement('table');
    for(let i = 0; i < aTabla.length; i++){
        let fila = document.createElement('tr');
        tabla.appendChild(fila);
        for(let j = 0; j < aTabla[i].length; j++){
            let columna = document.getElementById('td');
            columna.innerHTML = aTabla[i][j];
            fila.appendChild(columna);
        }
    }
    return tabla;
}
function aDeTabla(tabla){
    let array = [];
    if(arguments.length == 0){
        return [];
    }
    for(let i = 0; i < tabla.children[0].children.length;i++){
        for(let j = 0; j < tabla.children[0].children[i].children.length;j++){
           array = [...array,tabla.children[0].children[i].children[j].firstChild.nodeValue];
        }
    }
   return array;
}