<section class="about">
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
