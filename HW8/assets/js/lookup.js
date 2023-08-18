//JS
function calculate()
{
    var num1=document.getElementById('firstNumber');
    var num2=document.getElementById('secondNumber');
    var output=document.getElementById('output');
    var answer=num1.value*num2.value;
    //output.innerHTML='<h3>You entered: '+fname.value+' '+lname.value+'</h3';
    output.innerHTML='<h3>Your result is: '+answer+'</h3';
}
