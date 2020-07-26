function getValue(result) {
    var number1 = parseFloat(document.getElementById("num1").value);
    var number2 = parseFloat(document.getElementById("num2").value);
    var r;

    switch (result) {
        case '1':
            r = number1 + number2;
            break;
        case '2':
            r = number1 - number2;
            break;
        case '3':
            r = number1 * number2;
            break;
        case '4':
            r = number1 / number2;
            break;
        case '5':
            r = number1 % number2;
            break;
        default:
            break;

    }
    document.getElementById("nateg").value=r;


}