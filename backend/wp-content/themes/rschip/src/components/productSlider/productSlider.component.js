const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    centeredSlides: true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: false,
    navigation: {
        nextEl: '.js--swiper-button-next',
        prevEl: '.js--swiper-button-prev',
    },
});

const galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 0,
    slidesPerView: 1,
    loop: false,
    thumbs: {
        swiper: galleryThumbs,
    },
});
