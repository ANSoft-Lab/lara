<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Финансы и страхование FINIST</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" type="image/png" href="/icon/favicon.png"/>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <div class="modal__overlay js-overlay m-hidden" id="choose-city">
		<div class="modal">
            <div class="modal__close js-modal-close"></div>
            <h2 class="modal__title">
                Выберите Ваш регион
            </h2>
            <form action="" class="modal__form">
                <div class="modal__group">
                    <input id="msk" type="radio" name="city" value="moscow" class="modal__checkbox">
                    <label for="msk" class="modal__label js-city">Москва</label>
                </div>
                <div class="modal__group">
                    <input id="spb" type="radio" name="city" value="spb" class="modal__checkbox">
                    <label for="spb" class="modal__label js-city">Санкт-Петербург</label>
                </div>
                <div class="modal__group">
                    <input id="nnv" type="radio" name="city" value="nn" class="modal__checkbox">
                    <label for="nnv" class="modal__label js-city">Нижний Новгород</label>
                </div>
                <div class="modal__group">
                    <input id="ryz" type="radio" name="city" value="ryazan" class="modal__checkbox">
                    <label for="ryz" class="modal__label js-city">Рязань</label>
                </div>
                <button type="button" class="modal__btn js_set_city">Выбрать</button>
            </form>
		</div>
	</div>
    <script src="/js/app.js"></script>
</body>
</html>
