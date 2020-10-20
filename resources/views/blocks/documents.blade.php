<section class="about">
    <h2 class="about__title about__title_underline{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}">Документация</h2>
    <ul class="about__checklist">
        @forelse ($items as $document)
            <li class="about__checklist-item">
                <a href="{{ Storage::url($document->path) }}" target="_blank">
                    {{ $document->name }}
                </a>
            </li>
        @empty

        @endforelse
    </ul>
</section>
