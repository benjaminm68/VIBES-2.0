// FILTRE GALLERY
$(document).ready(function(){
  $('.button').click(function(){
    event.preventDefault();
    var name = $(this).attr('data-filter');
    if(name == "all"){
      $('.filter').show('2000');
    }
    else{
      $('.filter').not('.'+name).hide('2000')
      $('.filter').filter('.'+name).show('2000')
    }
  });

  $('.filtre_content a').click(function(){
    $(this).addClass('ACTIVE').siblings().removeClass('ACTIVE')
  });

  (function() {
    var $gallery = new SimpleLightbox('.gallery a', {});
})();

// MESSAGE SUCCES OU FAIL FORMULAIRE PHP
if($('.success').text() == ""){
  $('.success').css('display', 'none');
}

if($('.fail').text() == ""){
  $('.fail').css('display', 'none');
  }

});
      

// ACCORDION

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }   
  });  
}  

// SLIDER
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}