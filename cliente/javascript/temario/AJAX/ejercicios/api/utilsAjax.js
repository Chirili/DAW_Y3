const AJAXRes = (metodo, url, callback) => {
  const peticion = new XMLHttpRequest();

  peticion.open(metodo, url);
  peticion.send();

  peticion.onreadystatechange = () => {
    if (peticion.readyState == 4 && peticion.status == 200) {
      callback(JSON.parse(peticion.responseText));
    }
  };
};

const resolveNextPage = (nextPage, callBack)=>{
  
};

