/*
function testAjax() {
var xhr = getXMLHttpRequest(); // Voyez la fonction getXMLHttpRequest() définie dans la partie précédente
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("variable1=y");
}

function checkboxtest() {
var elementcb3 = document.getElementById('checkbox3');
    if (elementcb3.checked) {
    alert ('Checked!!!!')
}
else {
    alert ('Not checked !!!!!')
}
}
*/
function fctdevice1() {
var elementcb1 = document.getElementById('checkbox1');
var xhr = getXMLHttpRequest();
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb1.checked) {
    xhr.send("variable1=a");
}
else {
    xhr.send("variable1=b")
}
}

function fctdevice2() {
var elementcb2 = document.getElementById('checkbox2');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb2.checked) {
    xhr.send("variable1=c");
}
else {
    xhr.send("variable1=d")
}
}

function fctdevice3() {
var elementcb3 = document.getElementById('checkbox3');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb3.checked) {
    xhr.send("variable1=e");
}
else {
    xhr.send("variable1=f")
}
}

function fctdevice4() {
var elementcb4 = document.getElementById('checkbox4');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb4.checked) {
    xhr.send("variable1=g");
}
else {
    xhr.send("variable1=h")
}
}

function fctdevice5() {
var elementcb5 = document.getElementById('checkbox5');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb5.checked) {
    xhr.send("variable1=i");
}
else {
    xhr.send("variable1=j")
}
}

function fctdevice6() {
var elementcb6 = document.getElementById('checkbox6');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb6.checked) {
    xhr.send("variable1=k");
}
else {
    xhr.send("variable1=l")
}
}

function fctdevice7() {
var elementcb7 = document.getElementById('checkbox7');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb7.checked) {
    xhr.send("variable1=m");
}
else {
    xhr.send("variable1=n")
}
}

function fctdevice8() {
var elementcb8 = document.getElementById('checkbox8');
var xhr = getXMLHttpRequest(); 
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb8.checked) {
    xhr.send("variable1=k");
}
else {
    xhr.send("variable1=l")
}
}