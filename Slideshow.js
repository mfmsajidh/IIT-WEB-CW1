var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;

}
//---------------------------------------------Basic Java Script---------------------------------------
    

//----------------------Validation Part for Java Script-------------------------------------------

      function validate(txtname){

                var a = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/

                if(txtname.value.match(a) && txtuname.value.match(a) && txtaddress.value.match(a))
                {

                }

                else
                {
                    document.getElementById("txtname").style.color = "Red";
                    document.getElementById("txtname").value = "Enter a Suitable name";

                    document.getElementById("txtuname").style.color = "Red";
                    document.getElementById("txtuname").value = "Enter a Suitable User name";

                    document.getElementById("txtaddress").style.color = "Red";
                    document.getElementById("txtaddress").value = "Enter a  Suitable Address";
                }
                 
            }    