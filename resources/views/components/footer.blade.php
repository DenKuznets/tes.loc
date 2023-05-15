<footer id="footer">
    <div class="containers footer ">
        <div class="footer__content">
            <div class="footer__block1">
                <div class="footer__logo">
                    <a {{-- href="{{route("index)}}" --}}>
                        <img class="svg" src="{{ asset('assets/img/footer-logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="footer__disclaimer">Цены на сайте не являются публичной офертой</div>
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
    @include('layouts.popupAddServ')
    @include('layouts.popupCleaning')
    @include('layouts.popupDryclean')
    @include('layouts.popupWindows')
    @include('layouts.popupFeedBack')
</footer>
