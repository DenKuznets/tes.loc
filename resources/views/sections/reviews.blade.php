<section id="reviews">
    <img src="{{ asset('assets/img/flower-3.svg') }}" alt="" class="flower flower-3">
    <div class="containers reviews">
        <div class="h2-wrapper">
            <h2>Отзывы</h2>
            <img class="star" src="{{ asset('assets/img/star.svg') }}" alt="">
        </div>
        <div class="reviews__slider">
            <div class="swiper reviews__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__card-image">
                            <img src="{{ asset('assets/img/rev-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__card-image">
                            <img src="{{ asset('assets/img/rev-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__card-image">
                            <img src="{{ asset('assets/img/rev-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__card-image">
                            <img src="{{ asset('assets/img/rev-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="reviews__swiper-button-prev swiper-button-prev"></div>
                <div class="reviews__swiper-button-next swiper-button-next"></div>
            </div>
            <!-- If we need pagination -->
            <div class="reviews__swiper-pagination swiper-pagination"></div>
        </div>
        <button class="btn reviews__btn">БОЛЬШЕ ОТЗЫВОВ</button>
    </div>


</section>
