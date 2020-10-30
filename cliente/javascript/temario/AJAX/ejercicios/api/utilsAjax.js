const AJAXRes = (metodo, url, callback) => {
  const peticion = new XMLHttpRequest();

  peticion.open(metodo, url);
  peticion.send();
  let imagen = '<img src="./espera.gif" id="gif">'
  document.querySelector('#gifContainer').innerHTML = imagen;
  peticion.onreadystatechange = () => {
    if (peticion.readyState == 4 && peticion.status == 200) {
      document.querySelector('#gif').remove();
      callback(JSON.parse(peticion.responseText));
    }
  };
};
