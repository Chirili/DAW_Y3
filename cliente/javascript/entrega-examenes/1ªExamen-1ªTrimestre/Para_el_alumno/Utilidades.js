function ValidateNif (nif)
{
    let letters = 'TRWAGMYFPDXBNJZSQVHLCKET';
    let number = nif.substr(0, 8) % 23;
    if (nif.length < 9) return false;
    return (letters[number] == nif[8].toUpperCase());
}

function JustLetters (e)
{
    var condicion = (((e.keyCode >= 97) && (e.keyCode <= 122)) || ((e.keyCode >= 65) && (e.keyCode <= 90)));
    return condicion = condicion || (" ñÑáÁéÉíÍóÓúÚ".indexOf(e.key) != -1);
}
function HeightField (height)
{
    if (!(height.includes(",")) || (height.split(",").length > 2))
    {
        return false;
    }
    height = height.split(",");
    if (height[0].length == 1 && height[1].length == 1 || height[1].length == 2)
    {
        return true;
    }
    return false;
}
/*
function LettersToUpperCase ()
{
    this.value = this.value.toUpperCase();
}
*/
function ValidateDate (day, month, year)
{
    let date = new Date(year, month - 1, day);
    return (date.getDate() == day && date.getMonth() == month - 1 && date.getFullYear() == year);
}
function OnlyNumbers (e)
{
    return ('0123456789'.indexOf(e.key) != -1);
}
function OnlyNumbersWComma (e)
{
    return ('0123456789,'.indexOf(e.key) != -1);
}
function OnlyNumbersWP (e)
{
    return ('0123456789.'.indexOf(e.key) != -1);
}
function ecKeys (e) {
    if(e.key == "-"){
        if(this.value.search("-") == 0){
            return false;
        }
        this.value = "-" + this.value.replace("-","");
        
    }
}
