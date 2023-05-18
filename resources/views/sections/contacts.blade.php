<section id="contacts">
    <div class="containers contacts">
        <h2>Как с нами связаться</h2>
        <div class="contacts__text">
            <div class="contacts__text-contacts">
                <h3>Наши контакты</h3>
                <a class="header__top-phone" href="tel:+74874165666">
                    <img class="svg" src="{{ asset('assets/img/phone-icon-white.svg') }}" alt="">
                    +7(48741)6–56–66
                </a>
                <a href="mailto:tulenergoservis@yandex.ru">
                    <img class="svg" src="{{ asset('assets/img/mail-icon-white.svg') }}" alt="">
                    tulenergoservis@yandex.ru
                </a>
                <p href="">
                    <img class="svg" src="{{ asset('assets/img/location-icon-white.svg') }}" alt="">
                    Тульская обл., г. Ефремов, ул. Свердлова, д. 67
                </p>
            </div>
            <div class="contacts__text-form">
                <h3 class="">Напишите нам</h3>
                <form class="">
                    <div class="contacts__text-form-inputs">
                        <input class="" type="text" name="name" placeholder="Имя" id="inputName"
                            required>
                        <input class="" type="text" name="phone" placeholder="+7 (000) 000 00-00"
                            id="inputPhone" required>
                        <textarea name="text" id="inputComments" placeholder="Опишите ваши пожелания"></textarea>
                    </div>

                    <div class="contacts__text-form-checkbox">
                        <input type="checkbox" id="checkbox">
                        <label>Согласен на обработку персональный данных</label>
                    </div>
                    <div class="">
                        <button class="btn" id="sendMail" disabled>Оставить заявку</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="contacts__map">
            <div id="ymaps"></div>
        </div>
    </div>
</section>
