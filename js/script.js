// Menu Toggle
const menuBtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

menuBtn.addEventListener('click', () => {
  menuBtn.classList.toggle('fa-times');
  navbar.classList.toggle('active');
});

// Remove menu on scroll
window.addEventListener('scroll', () => {
  menuBtn.classList.remove('fa-times');
  navbar.classList.remove('active');
});

// Initialize Swiper
var swiper = new Swiper(".home-slider", {
  loop:true,
  navigation: {
   
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween: 20,
  autoHeight:true,
  grabCursor:true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.addEventListener("click", () => {
  let boxes = [...document.querySelectorAll('.packages .box-container .box3')];
  
  for (let i = currentItem; i < currentItem + 3 && i < boxes.length; i++) {
    boxes[i].style.display = 'inline-block';
  }

  currentItem += 3;

  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = 'none';
  }
});
