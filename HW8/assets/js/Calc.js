//JS
function calculate()
{
    //get variables from site
    var num1=document.getElementById('firstNum');
    var num2=document.getElementById('secondNum');
    var opp=document.getElementById('opp-select');
    //designate output string
    var output=document.getElementById('output');
    var message="";
    var answer;
    //calculate result 
    //parse opp value
    if(opp.value=="+"){
        answer=parseFloat(num1.value)+parseFloat(num2.value);
        //answer=num1.value+num2.value;
    }
    else if(opp.value=="-"){
        answer=parseFloat(num1.value)-parseFloat(num2.value);
    }
    else if(opp.value=="×"){
        answer=parseFloat(num1.value)*parseFloat(num2.value);
    }
    else if(opp.value=="÷"){
        if(parseFloat(num2.value)!=0){
            answer=parseFloat(num1.value)/parseFloat(num2.value);
        }
        else{
            message="<h3>CANNOT DIVIDE BY 0</h3>"
        }
    }
    else{
        message="<h3>PLEASE ENTER A VALID OPPERATOR</h3>"
    }
   // output.innerHTML='<h3>Your result is: '+answer+'</h3>';
    //output.innerHTML='<h3></h3>'+num1.value+opp.value+num2.value+'<h3>=answer<h3>';
    if(message=="")
    {
        message='<h3>'+num1.value+opp.value+num2.value+'='+answer+'</h3>';
    }
    output.innerHTML=message;
}

var out = document.getElementById('submit');
//out.onclick = calculate;
out.addEventListener('click', calculate, false);
