function resolveAjax(method, url,callback){
    let pAjax = new XMLHttpRequest();

    pAjax.open(method,url);
    pAjax.send();
    let imagen = '<img src="./espera.gif" id="gif">'
    document.querySelector('#cargando').innerHTML = imagen;
    pAjax.onreadystatechange = () =>{
        if(pAjax.readyState == 4){
            document.querySelector('#gif').remove();
           callback(JSON.parse(pAjax.responseText));
        }
    }
}