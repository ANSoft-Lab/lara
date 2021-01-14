@if (isset($link))
    <a class="js-open-modal" data-modal="feedback-{{ $rand_str = Str::random(20) }}" style="cursor: pointer">{{$modal_title}}</a>
@else
    <button class="{{ $btn_class ?? 'cooperation__link' }} js-open-modal" data-modal="feedback-{{ $rand_str = Str::random(20) }}">{{ $modal_title ?? 'Оставить заявку' }}</button>
@endif
<div class="modal__overlay js-overlay m-hidden" id="feedback-{{ $rand_str }}">
    <div class="modal">
        <div class="modal__close js-modal-close"></div>
        <h2 class="modal__title">
            {{ $modal_title ?? 'Оставить заявку' }}
        </h2>
        <div class="form-area">
            <form action="{{ route('feedback_send', [], false) }}" class="modal__form">
                <div class="modal__group">
                    <label for="name" class="modal__label">Ваше имя*</label>
                    <input id="name" type="text" name="name" class="modal__input" required>
                </div>
                <div class="modal__group">
                    <label for="phone" class="modal__label">Телефон*</label>
                    <input id="phone" type="text" name="phone" class="modal__input" required>
                    <input type="hidden" name="required[]" value="phone">
                </div>
                <div class="modal__group">
                    <label for="message" class="modal__label">Ваш вопрос</label>
                    <textarea id="message" name="message" class="modal__input" required rows="5" style="border: 1px solid black"></textarea>
                </div>
                <div class="errors-area">

                </div>
                <button type="button" class="modal__btn js_send mt-3">Отправить</button>
            </form>
        </div>
    </div>
</div>
