const petiAJAX = (metodo, url, callback) => {
  const peticion = new XMLHttpRequest();

  peticion.open(metodo, url);
  peticion.send();

  peticion.onreadystatechange = () => {
    if (peticion.readyState == 4 && peticion.status == 200) {
      console.log(peticion.responseText);
      callback(JSON.parse(peticion.responseText));
    }
  };

  
};
