/* Maintains an index of the array of slides which forms a slideshow, the index is incremented by 1
   every 3 seconds and a sets all slides display style to none and the index slide display style to block
   once the index is out of the range of the array of slides the index value is reset to 1 */

var slideIndex = 0;

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides fade");
 
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
   
    setTimeout(showSlides, 3000); 
}