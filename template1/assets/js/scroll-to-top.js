// Get the button
let mybutton = document.getElementById("scrollTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display='inline';
    mybutton.classList.add('et-visible');
    mybutton.classList.remove('et-hidden');
  } else {
    mybutton.classList.remove('et-visible');
    mybutton.classList.add('et-hidden');
    mybutton.style.display='none';
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}