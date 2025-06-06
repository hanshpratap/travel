let menu= document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  
  });

// var swiper = new Swiper(".reviews-slider", {
//   loop: true,
//   spaceBetween: 20,
//   autoHeight: true,
//   grabCursor: true,
//   breakpoints: {
//     640: {
//       slidesPerView: 1,
//     },
//     768: {
//       slidesPerView: 2,
//     },
//     1024: {
//       slidesPerView: 3,
//     },
//   },
// });
  // Initialize Swiper after the DOM content is fully loaded
// const swiper = new Swiper('.reviews-slider', {
//   loop: true,
//   spaceBetween: 20,
//   slidesPerView: 1,
//   breakpoints: {
//     768: {
//       slidesPerView: 2,
//     },
//     1024: {
//       slidesPerView: 3,
//     },
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     clickable: true,
//   },
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// });


// let loadMoreBtn = document.querySelector('.packagers .load-mores .btns');
// let currentItem = 3;


// loadMoreBtn.onclick = () => {
//   let boxes = [...document.querySelectorAll('.packagers .boxes-containers .boxes')];

//   for (var i = currentItem; i < currentItem + 3; i++) {
//     boxes[i].style.display = 'inline-block';
//   }

//   currentItem += 3;

//   if (currentItem >= boxes.length) {
//     loadMoreBtn.style.display = 'none';
//   }
// };
let loadMoreBtn = document.querySelector('.packagers .load-more .btn');
let currentItem = 3;

let boxes = [...document.querySelectorAll('.packagers .boxes-containers .boxes')];

// Hide boxes beyond the first 3 initially
boxes.forEach((box, index) => {
  if (index >= currentItem) box.style.display = 'none';
});

loadMoreBtn.onclick = () => {
  for (let i = currentItem; i < currentItem + 3 && i < boxes.length; i++) {
    boxes[i].style.display = 'inline-block';
  }

  currentItem += 3;

  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = 'none';
  }
};

 