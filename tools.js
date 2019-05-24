function errorDisplay(error,message){
  console.log("yes");
  document.getElementById(error).style.display = "block";
  document.getElementById(error).innerHTML = message;
} 

function visaValue(value){
value = value.replace(/\s/g, '');
var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
console.log("no");

	if(visaRegEx.test(value)){
	document.getElementById("visa").style.display = "inline";
	}
	else{
	document.getElementById("visa").style.display = "none";

	}
} 


function getID(){
if (document.getElementById('Small').checked) {
  rate_value = document.getElementById('Small').value;
}
if (document.getElementById('Medium').checked) {
  rate_value = document.getElementById('Medium').value;
}
if (document.getElementById('Large').checked) {
  rate_value = document.getElementById('Large').value;
}
if (document.getElementById('ExtraLarge').checked) {
  rate_value = document.getElementById('ExtraLarge').value;
}
if (document.getElementById('ExtraExtraLarge').checked) {
  rate_value = document.getElementById('ExtraExtraLarge').value;
}
console.log(rate_value);
}

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}