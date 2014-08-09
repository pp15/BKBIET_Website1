/*var elementA = document.getElementById('buttonA');
elementA.addEventListener('click', function() {alert('Letter A sent');}, false);

var elementB = document.getElementById('buttonB');
elementB.addEventListener('click', function() {alert('Letter B sent');}, false);
*/

/*
function getRadioValue(id) {
var radioBtn = document.getElementById(id);
alert(radioBtn.value);
$('formLight2').submit();
} */

/*$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});

$('form').submit(function(){
	alert($(this["options"]).val());
    return false;
});*/

function testAjax() {
var xhr = getXMLHttpRequest(); // Voyez la fonction getXMLHttpRequest() définie dans la partie précédente
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("variable1=y");
}

function fctdevice3() {
var elementcb3 = document.getElementById('checkbox3');
var xhr = getXMLHttpRequest(); // Voyez la fonction getXMLHttpRequest() définie dans la partie précédente
xhr.open("POST", "ajax.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
if (elementcb3.checked) {
    xhr.send("variable1=e");
}
else {
    xhr.send("variable1=f")
}
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

/*var elementCb3 = document.getElementById('checkbox3');
elementCb3.addEventListener('click', function() {var checkbox3 = document.getElementById('checkbox3');
    if (checkbox3.checked) {
    alert ('Checked!!!!')
}
else {
    alert ('Not checked !!!!!')
}}, false);*/