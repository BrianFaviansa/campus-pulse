let loginform = document.querySelector('.login-form');
let navbar = document.querySelector('.navbar');


document.querySelector('#login-btn').onclick = () =>{
    loginform.classList.toggle('active');
    navbar.classList.remove('active');
}

document.querySelector('#menu').onclick = () =>{
    navbar.classList.toggle('active');
    loginform.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    loginform.classList.remove('active');
}

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    grabCursor:true,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
    },
    breakpoints: {
        0:{
            slidesPerView: 1,
        },
        768:{
            slidesPerView: 2,
        },
        991:{
            slidesPerView: 3,
        },
    },
});

// Menambahkan event listener untuk setiap item FAQ
document.querySelectorAll('.faq-list ul li').forEach(item => {
    item.addEventListener('click', function() {
      // Menghapus kelas "active" dari semua item FAQ
      document.querySelectorAll('.faq-list ul li').forEach(item => {
        item.classList.remove('active');
      });
  
      // Menambahkan kelas "active" ke item yang diklik
      this.classList.add('active');
    });
  });
  

  var swiper = new Swiper(".featured-slider", {
    loop: true,
    centeredSlides: true,
    spaceBetween: 20,
    autoplay:{
        delay: 9500,
        disableOnInteraction:false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        450:{
            slidesPerView: 2,
        },
        768:{
            slidesPerView: 3,
        },
        1200:{
            slidesPerView: 4,
        },
    },
});

// JavaScript for Swiper initialization

document.addEventListener("DOMContentLoaded", function() {
    var mySwiper = new Swiper(".featured-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
