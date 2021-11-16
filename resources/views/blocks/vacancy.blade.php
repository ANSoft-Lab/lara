<div class="sale__item js-filter-item" data-city="city_{{ $vacancy->city_id }}" data-category="category_{{ $vacancy->category_id }}">
    <div class="sale__box">
        <div class="sale__top">
        <div class="sale__wrap">
            <div class="sale__subtitle"><span>{{ $vacancy->name }}</span></div>
            <div class="sale__price">{{ $vacancy->salary ?? 'по договоренности' }}</div>
        </div>
        <button class="sale__btn">Свернуть<span></span></button>
        </div>
    </div>
    
    <div class="sale__bottom">
        <div class="sale__bottom-left">
        @if(! empty($vacancy->duties))
            <div class="sale__bottom-box sale__bottom-box_item-2">
                <div class="sale__caption">Обязанности</div>
                <div>{!! $vacancy->duties !!}</div>
            </div>
        @endif

        @if(! empty($vacancy->requirements))
            <div class="sale__bottom-box">
                <div class="sale__caption">Требования к кандидату:</div>
                <div>{!! $vacancy->requirements !!}</div>
            </div>
        @endif

        @if(! empty($vacancy->conditions))
            <div class="sale__bottom-box">
                <div class="sale__caption">Условия</div>
                <div>{!! $vacancy->conditions !!}</div>
            </div>
        @endif

        @if(! empty($vacancy->additional))
            <div class="sale__bottom-box">
                <div>{!! $vacancy->additional !!}</div>
            </div>
        @endif
        </div>

        <div class="sale__bottom-inner">
        <a href="#vacancy_form_{{ $vacancy->id }}" class="sale__bottom-btn">Откликнуться</a>
        </div>
        
        <section class="response" id="form-{{ $vacancy->id }}">
        <div class="container">
            <div class="response__wrap">
            <div class="response__descr">{{ $vacancy->name }}</div>
            <div class="response__title">
                Заполните форму, <br />
                чтобы откликнуться
            </div>
            <form id="vacancy_form_{{ $vacancy->id }}" enctype="multipart/form-data" action="{{ route('feedback_send', [], false) }}" class="response__form" method="post">
                <input class="response__input" name="name" type="text" placeholder="ФИО" maxlength="30" />
                <input class="response__input" name="phone" type="text" placeholder="+7 (___) ___-__-__" />
                <input type="hidden" name="feedbackable_id" value="{{ $vacancy->id }}" />
                <input type="hidden" name="feedbackable_type" value="App\Models\Vacancy" />
                <div class="response__file">
                    <input type="text" class="response__castom response__castom_link" name="file_url" placeholder="Файл резюме или ссылка на него">
                <div class="response__castom">
                <!-- response__castom_active-cancel -->
                <!-- response__castom_active -->
                <input type="file" class="vacancy__file__input" onChange="console.log(this.value)" placeholder="Файл резюме" accept="{{ App\Models\Vacancy::getAcceptString() }}" name="uploaded_file" id="vacancy_file_{{ $vacancy->id }}" />
                <label for="vacancy_file_{{ $vacancy->id }}"><div class="response__image"></div></label>
                </div>
                </div>
                <textarea
                    class="response__textarea"
                    name="message"
                    cols="30"
                    rows="10"
                    maxlength="300"
                    placeholder="Комментарий"
                    ></textarea>
            
            <div class="errors-area"></div>
            <div class="response__bottom">
                <button class="response__btn js_send">Отправить</button>
                <div class="response__checkbox">
                    <input type="checkbox" id="agree-checkbox-{{ $vacancy->id }}" name="agree" />
                    <label for="agree-checkbox-{{ $vacancy->id }}">Согласен на обработку персональных данных</label>
                </div>
            </div>
            </form>
            <div class="response__bottom-wrap" style="display: none">
            <div class="response__bottom-image">
                <img src="/vacancies/icons/response-bottom.svg" alt="icons" />
            </div>

            <div class="response__bottom-title">Отклик отправлен!</div>
            <div class="response__bottom-text">
                Мы рады, что вы проявили интерес к вакансии. В ближайшее время мы свяжемся с вами!
            </div>

            <button class="response__bottom-btn js_close_box">Закрыть</button>
            </div>
            </div>

        </div>
        </section>
    </div>
    </div>
