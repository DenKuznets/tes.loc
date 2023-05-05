<section id="hero" style="min-height: 300px">
    <div class="hero containers">
        <div class="hero__content">
            <div class="hero__text animate__animated">
                <h1 class="">Пустой проект</h1>
                <p>Если не обновляются секции view, чисти папку storage/framework/sessions</p>
                <p>Фотки использующиеся через asset в blade кидай сначала в resources/src/assets/img а затем запускай npm run build. Это закинет их в public/assets/img</p>
                <p>Сделай копию .env.example. Перименуй ее в .env. В .env поменяй APP_URL=http://template на имя домена</p>
                <button id="popUp">ПОПАП ТЕСТ</button>
            </div>
        </div>
    </div>
    @include('layouts/popUpTest')
</section>
