<div id="popup-dryclean" class="modalForm" 
style="display: block"
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
                        <img class="svg" src="{{ asset('assets/img/dryclean-img.svg') }}" alt="">
                        <h3>Химчистка</h3>
                    </div>
                    <button id="popUp" class="btn btn-cta popup-feedback-btn">оставить заявку</button>
                </div>
                <div class="popup-services__content-left-bottom">
                    <p>Предварительную стоимость химчистки можно оценить по фото</p>
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
