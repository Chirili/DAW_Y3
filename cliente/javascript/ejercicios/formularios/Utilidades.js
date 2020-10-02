function ValidateNif(nif){
    let letters = 'TRWAGMYFPDXBNJZSQVHLCKET';
    let number = nif.substr(0,8) % 23;
    console.log(number);
    if(nif.length < 9) return false;
    return (letters[number] == nif[8].toUpperCase());
}

function JustLetters(e) {
    var condicion = (((e.keyCode >= 97) && (e.keyCode <= 122)) || ((e.keyCode >= 65) && (e.keyCode <= 90)));
    return condicion = condicion || (" ñÑáÁéÉíÍóÓúÚ".indexOf(e.key) != -1);
}

function LettersToUpperCase(){
    this.value = this.value.toUpperCase();
}
function ValidateDate(day,month,year){
    if(month > 12 || month <= 0 || day > 31 || day <= 0 || year == 0){
        return false;
    }
    switch(month-1){
        case 1:
            return (day <= (year % 4 == 0 && y % 100) ? 29:28);
        case 8 : case 3 : case 5 : case 10 :
            return (day <= 30);
        default:
            return (day <= 31);
    }

}
function OnlyNumbers(e){
    return ('0123456789'.indexOf(e.key) != -1);
}