// coding for all page  




// coding for navbar

// open navbar when clicked
function openNav() {
     document.getElementById("myMobileNav").style.height = "100vh";
     setTimeout(function(){
          document.getElementById("openOne").style.display = "none";
          document.getElementById("openTwo").style.display = "none";
          document.getElementById("openThree").style.display = "none";
     }, 
     500);
}

// close navbar when clicked
function closeNav() {
     document.getElementById("myMobileNav").style.height = "0px";
     document.getElementById("openOne").style.display = "flex";
     document.getElementById("openTwo").style.display = "flex";
     document.getElementById("openThree").style.display = "flex";
}






// Coding for home page




// hero image scroll slider
const slider = document.querySelector('.hero__list');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', e => {
     isDown = true;
     slider.classList.add('active');
     startX = e.pageX - slider.offsetLeft;
     scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', _ => {
     isDown = false;
     slider.classList.remove('active');
});
slider.addEventListener('mouseup', _ => {
     isDown = false;
     slider.classList.remove('active');
});
slider.addEventListener('mousemove', e => {
     if (!isDown) return;
     e.preventDefault();
     const x = e.pageX - slider.offsetLeft;
     const SCROLL_SPEED = 3;
     const walk = (x - startX) * SCROLL_SPEED;
     slider.scrollLeft = scrollLeft - walk;
});






