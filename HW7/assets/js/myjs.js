//JS
var today = new Date();
var hourNow = today.getHours();
var greeting;
var output=document.getElementByID('greeting');
if(hourNow>=18)
{
    greeting='Good evening';
}
else if(hourNow>=12)
{
    greeting='Good afternoon';
}
else if (hourNow>0)
{
    greeting='Good Moring';
}
else
{
    greeting='Welcome';
}
document.getElementById('greeting').innerHTML=greeting;
//output.innerHTML=greeting;
