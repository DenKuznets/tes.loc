<footer id="footer">
    <div class="containers footer ">
        <div class="footer__content">
            <div class="footer__block1">
                <div class="header__logo">
                    <a {{-- href="{{ route('index') }}" --}}>
                        <img class="svg logo-img" src="{{ asset('assets/img/logo-footer.svg') }}" alt="">
                        <div class="header__logo-text">
                            <div class="header__logo-text-top">ООО «ТУЛЭНЕРГОСЕРВИС»</div>
                            <div class="header__logo-text-bottom">Ремонт машин и оборудования</div>
                        </div>
                    </a>
                </div>
                <ul class="nav nav__list-header">
                    <li class="nav__item-header"><a href="#services">Услуги</a></li>
                    <li class="nav__item-header"><a href="#about">О компании</a></li>
                    <li class="nav__item-header"><a href="#contacts">Контакты</a></li>
                    <li class="nav__item-header"><button>Обратный звонок</button></li>
                </ul>
            </div>
            <div class="footer__block2">
                <div class="footer__rights">© <?php echo date('Y'); ?>, Все права защищены</div>
                <div class="footer__policy"><a href="#">Политика конфиденциальности</a></li>
                </div>
                <div class="footer__alexmedia">Сайт разработан компанией <a href="https://alex-media.ru/">ALEX–MEDIA</a>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('layouts.popupAddServ')
    @include('layouts.popupCleaning')
    @include('layouts.popupDryclean')
    @include('layouts.popupWindows')
    @include('layouts.popupFeedBack') --}}
</footer>
