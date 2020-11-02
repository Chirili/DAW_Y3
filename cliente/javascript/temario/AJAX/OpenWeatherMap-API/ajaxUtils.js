function resolveAjax(method, url,callback){
    let pAjax = new XMLHttpRequest();

    pAjax.open(method,url);
    pAjax.send();

    pAjax.onreadystatechange = () =>{
        if(pAjax.readyState == 4){  
           callback(JSON.parse(pAjax.responseText));
        }
    }
}