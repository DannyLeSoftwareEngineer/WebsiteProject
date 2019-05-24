/* Changes the display style of the collapsible sibling element based on its current display style*/


 var coll = document.getElementsByClassName("collapsible");
 var i;
function clicked(value){

        for (i = 0; i < coll.length; i++) {
   
                value.classList.toggle("active");
                var content = value.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
   
        }
}