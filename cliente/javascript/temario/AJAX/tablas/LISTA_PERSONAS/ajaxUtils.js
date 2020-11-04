function resolveAjax(method, url,jsonObject,callback){
    let pAjax = new XMLHttpRequest();

    pAjax.open(method,url);
    pAjax.send(jsonObject);
    pAjax.onreadystatechange = () =>{
        if(pAjax.readyState == 4){
           callback(JSON.parse(pAjax.responseText));
        }
    }
    
}