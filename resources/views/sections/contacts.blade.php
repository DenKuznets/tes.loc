<section id="contacts">
    <div class="containers contacts">
        <h2>Как с нами связаться</h2>
        <div class="contacts__text">
            <div class="contacts__text-contacts">
                <h3>Наши контакты</h3>
                <p href="">
                    <img class="svg" src="{{ asset('assets/img/location-icon.svg') }}" alt="">
                    Тульская обл., г. Ефремов, ул. Свердлова, д. 67
                </p>
                <a href="mailto:tulenergoservis@yandex.ru">
                    <img class="svg" src="{{ asset('assets/img/mail-icon.svg') }}" alt="">
                    tulenergoservis@yandex.ru
                </a>
                <a class="header__top-phone" href="tel:+74874165666">
                    <img class="svg" src="{{ asset('assets/img/phone-icon.svg') }}" alt="">
                    8(48741)6–56–66
                </a>
            </div>
            <div class="contacts__text-form">
                <h3 class="modal-title">Напишите нам</h3>
                <p class="modal-text">Оставьте свой номер телефона, и мы поможем воплотить вашу мечту в реальность</p>
                <form class="modal-form">
                    <input class="modal-form-input" type="text" name="name" placeholder="Имя" id="inputName"
                        required>
                    <input class="modal-form-input" type="text" name="phone" placeholder="Телефон" id="inputPhone"
                        required>
                    <div class="modal-checkbox">
                        <input type="checkbox" id="checkbox">
                        <label>Согласен на обработку персональный данных</label>
                    </div>
                    <div class="modal-button">
                        <button class="btn btn-cta" id="sendMail" disabled>Оставить заявку</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="contacts__map"></div>
    </div>
</section>
