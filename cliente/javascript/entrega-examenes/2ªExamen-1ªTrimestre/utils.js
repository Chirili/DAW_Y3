function JustLetters(e) {
  let condicion =
    (e.keyCode >= 97 && e.keyCode <= 122) ||
    (e.keyCode >= 65 && e.keyCode <= 90);
  return (condicion = condicion || " ñÑáÁéÉíÍóÓúÚ".indexOf(e.key) != -1);
}
function ToUpperCase(){
    this.value = this.value.toUpperCase();
}
function CheckNifInput(e){
    console.log(e.keyCode);
    if(this.value.length >9){
        return false;
    }
    if(this.value.length < 8 && e.keyCode >= 48 && e.keyCode <= 57){
        return true;
    }else{
        if(this.value.length == 8 && e.keyCode >= 65 && e.keyCode <= 90){
            console.log("funciona");
            return true;
        }
        return false;
    }
}
function ValidateNif(nif) {
  let letters = "TRWAGMYFPDXBNJZSQVHLCKET";
  let number = nif.substr(0, 8) % 23;
  if (nif.length < 9) return false;
  return letters[number] == nif[8].toUpperCase();
}

function CheckUserInput(){
    console.log(this.value.length < 20);
    return (this.value.length < 20);
}
function ValidateDate(day, month, year) {
  let date = new Date(year, month - 1, day);
  return (date.getDate() == day &&date.getMonth() == month - 1 &&date.getFullYear() == year);
}

function resolveAjax(method, url,jsonObject,callback){
    let pAjax = new XMLHttpRequest();

    pAjax.open(method,url);
    pAjax.send(jsonObject);
    pAjax.onreadystatechange = () =>{
        if(pAjax.readyState == 4){
           callback(pAjax.responseText);
        }
    }
    
}