<section class="qna mb-40">
    <ul class="qna__list">
        @foreach ($items as $item)
            <li class="qna__list-item js-list-item">
                <div class="qna__list-title js-dropdown-list">
                    {{ $item->question ?? '-' }}
                </div>
                <div class="qna__dropdown">
                    {!! $item->answer ?? '-' !!}
                </div>
            </li>
        @endforeach
    </ul>
</section>
