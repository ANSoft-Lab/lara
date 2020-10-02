<button class="cooperation__link js-open-modal" data-modal="feedback">Оставить заявку</button>
<div class="modal__overlay js-overlay m-hidden" id="feedback">
    <div class="modal">
        <div class="modal__close js-modal-close"></div>
        <h2 class="modal__title">
            Оставить заявку
        </h2>
        <form action="" class="modal__form">
            <div class="modal__group">
                <label for="name" class="modal__label">Ваше имя</label>
                <input id="name" type="text" name="name" class="modal__input">
            </div>
            <div class="modal__group">
                <label for="phone" class="modal__label">Телефон</label>
                <input id="phone" type="text" name="phone" class="modal__input">
            </div>
            <button type="button" class="modal__btn js_send">Отправить</button>
        </form>
    </div>
</div>
