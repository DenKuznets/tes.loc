<header class="">
    <div class="header">
        <div class="header__top">
            <div class="containers header__top-content ">
                <p href="">
                    <img class="svg" src="{{ asset('assets/img/location-icon.svg') }}" alt="">
                    Тульская обл., г. Ефремов, ул. Свердлова, д. 67
                </p>
                <a href="mailto:tulenergoservis@yandex.ru">
                    <img class="svg" src="{{ asset('assets/img/mail-icon.svg') }}" alt="">
                    tulenergoservis@yandex.ru
                </a>
                <a class="header__top-phone" href="tel:+79066275666">
                    <img class="svg" src="{{ asset('assets/img/phone-icon.svg') }}" alt="">
                    +7 906 627-56-66
                </a>
            </div>
        </div>
        <div class="header__bottom fixedHeader ">
            <div class="containers header__bottom-content ">
                <div class="header__logo">
                    <a {{-- href="{{ route('index') }}" --}}>
                        <img class="svg logo-img" src="{{ asset('assets/img/logo.svg') }}" alt="">
                        <div class="header__logo-text">
                            <div class="header__logo-text-top">ООО «ТУЛЭНЕРГОСЕРВИС»</div>
                            <div class="header__logo-text-bottom">Ремонт машин и оборудования</div>
                    </div>
                    </a>
                </div>
                <div class="header__nav">
                    <ul class="nav nav__list-header">
                        <li class="nav__item-header"><a href="#services">Услуги</a></li>
                        <li class="nav__item-header"><a href="#about">О компании</a></li>
                        <li class="nav__item-header"><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
                <a class="header__bottom-phone" href="tel:+79066275666">
                    <img class="svg" src="{{ asset('assets/img/phone-icon.svg') }}" alt="">
                    +7 906 627-56-66
                </a>
            </div>
        </div>
    </div>
</header>