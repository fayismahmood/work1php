var mySwiper = new Swiper('.newCarsBikes .swiper-container', {
  
    // If we need pagination
    pagination: {
      el: '.newCarsBikes .swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.newCarsBikes .swiper-button-next',
      prevEl: '.newCarsBikes .swiper-button-prev',
    },
  
  })




  var NewsSwiper = new Swiper('.news .swiper-container', {
  
    // If we need pagination
    pagination: {
      clickable: true,
      el: '.news .swiper-pagination',
    },
  
  
  })


  
  var CompareSwiper = new Swiper('.compare .swiper-container', {
    slidesPerView: 3,
    // If we need pagination
    navigation: {
      nextEl: '.compare .swiper-button-next',
      prevEl: '.compare .swiper-button-prev',
    },
  
  
  })



  var swiper = new Swiper('.roundCircl .swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 80,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.roundCircl .swiper-pagination',
    },
  });