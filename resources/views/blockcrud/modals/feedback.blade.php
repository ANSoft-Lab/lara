@if (isset($link))
    <a class="js-open-modal {{ $btn_class ?? '' }}" data-modal="feedback-{{ $rand_str = Str::random(20) }}">{{$modal_title}}</a>
@else
    <button class="{{ $btn_class ?? 'cooperation__link' }} js-open-modal" data-modal="feedback-{{ $rand_str = Str::random(20) }}">{{ $modal_title ?? 'Оставить заявку' }}</button>
@endif
<div class="modal__overlay js-overlay m-hidden" id="feedback-{{ $rand_str }}">
    <div class="modal">
        <div class="modal__close js-modal-close"></div>
        <h2 class="modal__title">
            Проконсультроваться с нашим<br>специалистом
        </h2>
        <div class="form-area">
            <form action="{{ route('feedback_send', [], false) }}" class="modal__form">
                <div class="modal__group">
{{--                    <label for="name" class="modal__label">Ваше имя*</label>--}}
                    <input id="name" type="text" name="name" class="modal__input" required placeholder="Ваше имя">
                </div>
                <div class="modal__group">
{{--                    <label for="phone" class="modal__label">Телефон*</label>--}}
                    <input id="phone" type="text" name="phone" class="modal__input" required placeholder="Телефон">
                    <input type="hidden" name="required[]" value="phone">
                </div>
                <div class="modal__group">
{{--                    <label for="message" class="modal__label">Ваш вопрос</label>--}}
                    <textarea id="message" name="message" class="modal__input modal__input--textarea" rows="5" placeholder="Комментарий (не обязательно)" style="border: 1px solid #272727;"></textarea>
                </div>
                <div><label><input type='checkbox' name='agree'> согласен на обработку персональных данных</label></div><br/>
                <div class="modal__message">Мы&nbsp;рады, что вы&nbsp;проявили интерес к&nbsp;Партнерской программе. В&nbsp;ближайшее время мы&nbsp;свяжемся с&nbsp;вами!</div>
                <div class="errors-area"></div>
                <button type="button" class="modal__btn js_send mt-3">Отправить</button>
            </form>
        </div>
    </div>
</div>
