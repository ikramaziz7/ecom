const wrapper = document.querySelector( ".wrapper");
const loginLink = document.querySelector( ".login-link");
const registerLink = document.querySelector( ".register-link");
const btnPopup = document.querySelector( ".btnLogin-popup");
const iconClose = document.querySelector( ".icon-close");
registerLink.addEventListener('clic' , ()=>{
    wrapper.classList.add('active');
})
loginLink.addEventListener('clic' , ()=>{
    wrapper.classList.remove('active');
})
btnPopup.addEventListener('clic' , ()=>{
    wrapper.classList.add('active-popup');
})
iconClose.addEventListener('clic' , ()=>{
    wrapper.classList.add('active-popup');
})
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
}



//js de produit
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', () => {
      alert('Item added to cart');
  });
});