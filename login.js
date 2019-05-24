/* Adds a focus class to the parent element that causes the element to shift position */

function isFocused(object){
  $(object).parents('.form-group').addClass('focused');
}

/* When the user leaves the input field this function checks if the field is empty or if its the email field,
   it checks if it fits an email regular expression and based on this infomation it adds or removes a class
   that changes the colour of the field. This only provides an indication of correct and irrcorrect inputs to the user 
   and does not validate the form */
  
function isBlur(object){
  var inputValue = $(object).val();
  if ( inputValue == "" ) {
    $(object).removeClass('filled');
    $(object).addClass('incorrect');
    $(object).parents('.form-group').removeClass('focused');  
  } 
  else if(object.id === "first" ){
    if(!isValidEmailAddress(inputValue)){
  
      $(object).addClass('incorrect');}
     else {

     $(object).removeClass('incorrect');
    $(object).addClass('filled');
  }
  }
  else {

     $(object).removeClass('incorrect');
    $(object).addClass('filled');
  }
} 


/* Tests an email input against an email regular expression */
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};