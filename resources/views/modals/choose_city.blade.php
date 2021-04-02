@if(request()->path() !== 'affiliate')

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
            <div class="modal__group">
                <input id="city-voronezh" type="radio" name="city" value="voronezh" class="modal__checkbox">
                <label for="city-voronezh" class="modal__label js-city">Воронеж</label>
            </div>
            <div class="modal__group">
                <input id="city-kazan" type="radio" name="city" value="kazan" class="modal__checkbox">
                <label for="city-kazan" class="modal__label js-city">Казань</label>
            </div>
            <div class="modal__group">
                <input id="city-samara" type="radio" name="city" value="samara" class="modal__checkbox">
                <label for="city-samara" class="modal__label js-city">Самара</label>
            </div>
            <div class="modal__group">
                <input id="city-krasnodar" type="radio" name="city" value="krasnodar" class="modal__checkbox">
                <label for="city-krasnodar" class="modal__label js-city">Краснодар</label>
            </div>
            <button type="button" class="modal__btn js_set_city">Выбрать</button>
        </form>
    </div>
</div>

@endif