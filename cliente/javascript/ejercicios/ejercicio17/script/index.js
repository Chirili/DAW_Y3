
window.onload = () => {
    let container = document.getElementById('info');

    container.onmousedown = function(event){
        container.style.position = 'absolute';
        container.style.zIndex = 1000;


        document.body.append(container);

        function moveAt(pageX, pageY) {
            container.style.left = pageX - container.offsetWidth / 2 + 'px';
            container.style.top = pageY - container.offsetHeight / 2 + 'px';
        }

        moveAt(event.pageX, event.pageY);

        function onMouseMove(event) {
            moveAt(event.pageX, event.pageY);
        }

        document.addEventListener('mousemove', onMouseMove);
        container.ondragstart = function(){
            return false;
        }
        container.onmouseup = function () {
            document.removeEventListener('mousemove', onMouseMove);
            container.onmouseup = null;
        };
    }
    
    
}

function informacion(event){
    const {clientX, clientY, screenX, screenY} = event;
    muestraInformacion(["Raton","Pantalla: ["+screenX+","+screenY+"]","Raton: ["+clientX+","+clientY+"]"])
}

function muestraInformacion(mensaje) {
    document.getElementById("info").innerHTML = '<h1>' + mensaje[0] + '</h1>';
    for (var i = 1; i < mensaje.length; i++) {
        document.getElementById("info").innerHTML += '<p>' + mensaje[i] + '</p>';
    }
}

document.onmousemove = informacion;