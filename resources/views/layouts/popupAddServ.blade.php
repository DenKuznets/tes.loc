<div id="popup-addserv" class="modalForm">
    <div class="modal-content-form popup-addserv">
        <span class="closeForm">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.12485 12.0106L0 2.87786L2.85522 0.0201559L11.9801 9.15293L21.125 0L24 2.87745L14.855 12.0304L23.959 21.1423L21.1038 24L11.9998 14.8881L2.89619 23.9996L0.0212416 21.1221L9.12485 12.0106Z"
                    fill="#C4CDDE" />
            </svg>
        </span>

        <div class="popup-addserv__content">
            <div class="popup-addserv__content-left">
                <div class="popup-addserv__header">
                    <img class="svg" src="{{ asset('assets/img/add-serv-img.svg') }}" alt="">
                    <h3>Доп. услуги</h3>
                </div>
                <button id="popUp" class="btn btn-cta popup-feedback">оставить заявку</button>
            </div>
            <div class="popup-addserv__content-right">
                <h4>Мытьё бытовой техники</h4>
                <ul>
                    <li>
                        <span class="popup-addserv__list-item-name">Холодильник</span>
                        <span class="popup-addserv__list-item-price">500–1 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Духовка</span>
                        <span class="popup-addserv__list-item-price">500–900 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Микроволновка</span>
                        <span class="popup-addserv__list-item-price">350–400 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Посудомойка</span>
                        <span class="popup-addserv__list-item-price">400–700 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Стиральая машинка</span>
                        <span class="popup-addserv__list-item-price">400–1 000 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Чайники, тостеры</span>
                        <span class="popup-addserv__list-item-price">300–500 ₽</span>
                    </li>
                </ul>
                <h4>Работа по дому</h4>
                <ul>
                    <li>
                        <span class="popup-addserv__list-item-name">Мытьё детского стульчика/столика</span>
                        <span class="popup-addserv__list-item-price">300–600 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Мытьё мест кормления/туалета и домиков животных</span>
                        <span class="popup-addserv__list-item-price">300–600 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Мытьё мебели внутри</span>
                        <span class="popup-addserv__list-item-price">от 100 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Очищение сложных осветительных приборов</span>
                        <span class="popup-addserv__list-item-price">от 300 ₽</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Мытьё посуды и глажка белья</span>
                        <span class="popup-addserv__list-item-price">почасовая 500 ₽/час</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Cнять/развесить тюль, шторы</span>
                        <span class="popup-addserv__list-item-price">от 200 ₽/шт</span>
                    </li>
                    <li>
                        <span class="popup-addserv__list-item-name">Мытьё кухонного гарнитура или отдельных полок, шкафчиков внутри</span>
                        <span class="popup-addserv__list-item-price">от 170 ₽/шт</span>
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
