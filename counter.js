var value = 0;

    /* Plus and minus functions that increments and decrements the value of the input box by getting
	its value by element id, modifying the value and then setting the value of the element */    

    function addvalue(price){
        value = document.getElementById("count").value; 
        value ++;
         document.getElementById("count").value = value;
	 document.getElementById("subtotal").innerHTML = "Subtotal: $" + (value * price).toFixed(2);
	
    }

    function minusvalue(price){
      if (document.getElementById("count").value > 0) {
	 value = document.getElementById("count").value; 
        value --;
        document.getElementById("count").value = value;
	document.getElementById("subtotal").innerHTML = "Subtotal: $" + (value * price).toFixed(2);
      }  
    }


    /* If the value is changed calculate the subtotal */

    function qtyChange(val,price) {
    if(val >= 0){
    document.getElementById("subtotal").innerHTML = "Subtotal: $" + (val * price).toFixed(2);
    }
    else{
    document.getElementById("count").value = 0;
    document.getElementById("subtotal").innerHTML = "Subtotal: $" + (0).toFixed(2);
    }
    }

    /* Ensures the qty input is a postive integer else it displays an error message*/	
    function validateForm() {

    if (document.getElementById("count").value > 0) {
	return true;}
    else{
        document.getElementById("error").style.display = "block";
	document.getElementById("count").style.borderColor = "red";
        return false;
      }
    }
