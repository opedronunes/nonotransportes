const swiper = new Swiper('.swiper', {
    // Optional parameters
    //direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 4,
          spaceBetween: 40
        }
      },
  
    // If we need pagination
    /*
    pagination: {
      el: '.swiper-pagination',
    },
    */
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    /*
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    */
  });