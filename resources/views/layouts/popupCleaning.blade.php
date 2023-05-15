<div id="popup-cleaning" class="modalForm" 
{{-- style="display: block" --}}
>
    <div class="modal-content-form popup-services">
        <span class="closeForm">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.12485 12.0106L0 2.87786L2.85522 0.0201559L11.9801 9.15293L21.125 0L24 2.87745L14.855 12.0304L23.959 21.1423L21.1038 24L11.9998 14.8881L2.89619 23.9996L0.0212416 21.1221L9.12485 12.0106Z"
                    fill="#C4CDDE" />
            </svg>
        </span>

        <div class="popup-services__content">
            <div class="popup-services__content-left">
                <div class="popup-services__content-left-top">

                    <div class="popup-services__header">
                        <img class="svg" src="{{ asset('assets/img/cleaning-img.svg') }}" alt="">
                        <h3>Уборка</h3>
                    </div>
                    <button id="popUp" class="btn btn-cta popup-feedback-btn">оставить заявку</button>
                </div>
                <div class="popup-services__content-left-bottom">
                    <p>Стоимость Обслуживания домов, квартир, офисов на постоянный основе обсуждается индивидуально.</p>
                    <p class="important-paragraph">
                        Минимальный выезд составляет 4 000 ₽
                    </p>
                </div>
            </div>
            <div class="popup-services__content-right">
                <h4>Уборка после ремонта</h4>
                <ul>
                    <li>
                        <span class="popup-services__list-item-name">Однушка (до 40–45 м²)</span>
                        <span class="popup-services__list-item-price">от 8 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Двушка (до 50–60 м²)</span>
                        <span class="popup-services__list-item-price">от 8 500 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Трёшка (до 60–70 м²)</span>
                        <span class="popup-services__list-item-price">от 9 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Более 70 м²</span>
                        <span class="popup-services__list-item-price">от 170 ₽/м²</span>
                    </li>
                </ul>
                <h4>Генеральная уборка</h4>
                <ul>
                    <li>
                        <span class="popup-services__list-item-name">Однушка (до 40–45 м²)</span>
                        <span class="popup-services__list-item-price">от 7 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Двушка (до 50–60 м²)</span>
                        <span class="popup-services__list-item-price">от 7 500 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Трёшка (до 60–70 м²)</span>
                        <span class="popup-services__list-item-price">от 8 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Более 70 м²</span>
                        <span class="popup-services__list-item-price">от 120 ₽/м²</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Уборка санузла</span>
                        <span class="popup-services__list-item-price">от 3 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Уборка кухни</span>
                        <span class="popup-services__list-item-price">от 3 500 ₽</span>
                    </li>
                </ul>
                <h4>Разовая поддерживающая уборка</h4>
                <ul>
                    <li>
                        <span class="popup-services__list-item-name">Однушка (до 40–45 м²)</span>
                        <span class="popup-services__list-item-price">от 4 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Двушка (до 50–60 м²)</span>
                        <span class="popup-services__list-item-price">от 4 500 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Трёшка (до 60–70 м²)</span>
                        <span class="popup-services__list-item-price">от 5 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">Более 70 м²</span>
                        <span class="popup-services__list-item-price">от 70 ₽/м²</span>
                    </li>
                </ul>
                <h4>Регулярная поддерживающая уборка</h4>
                <ul>
                    <li>
                        <span class="popup-services__list-item-name">
                            Однушка (до 40–45 м²)
                        </span>
                        <span class="popup-services__list-item-price">
                            от 3 500 ₽
                        </span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">
                            Двушка (до 50–60 м²)
                        </span>
                        <span class="popup-services__list-item-price">
                            от 4 000 ₽
                        </span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">
                            Трёшка (до 60–70 м²)
                        </span>
                        <span class="popup-services__list-item-price">
                            от 4 500 ₽
                        </span>
                    </li>
                    <li>
                        <span class="popup-services__list-item-name">
                            Более 70 м²
                        </span>
                        <span class="popup-services__list-item-price">
                            от 70 ₽/м²
                        </span>
                    </li>
                </ul>

            </div>
        </div>


        {{-- мишина форма обратной связи, не удаляй, вдруг понадобится --}}
        {{-- <h2 class="modal-title">Оставьте заявку, мы обязательно свяжемся с вами!</h2>
        <p class="modal-text">Оставьте свой номер телефона, и мы поможем воплотить вашу мечту в реальность</p>
        <form class="modal-form">
            <input class="modal-form-input" type="text" name="name" placeholder="Имя" id="inputName" required>
            <input class="modal-form-input" type="text" name="phone" placeholder="Телефон" id="inputPhone" required>
            <div class="modal-checkbox">
                <input type="checkbox" id="checkbox">
                <label>Согласен на обработку персональный данных</label>
            </div>
            <div class="modal-button">
                <button class="btn btn-cta" id="sendMail" disabled>Оставить заявку</button>
            </div>
        </form> --}}
    </div>
</div>
