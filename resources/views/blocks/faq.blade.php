{{--<section class="qna mb-40">--}}
{{--    <h2 class="about__title mb-20">Часто задаваемые вопросы</h2>--}}
{{--    <ul class="qna__list">--}}
{{--        @foreach ($items as $item)--}}
{{--            <li class="qna__list-item js-list-item">--}}
{{--                <div class="qna__list-title js-dropdown-list">--}}
{{--                    {{ $item->question ?? '-' }}--}}
{{--                </div>--}}
{{--                <div class="qna__dropdown">--}}
{{--                    {!! $item->answer ?? '-' !!}--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</section>--}}
<Qna :faq="{{$items}}"></Qna>
