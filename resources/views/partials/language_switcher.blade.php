<div>
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span style="border:3px solid red">{{ $locale_name }}</span>
        @else
            <a href="{{ url('locale/'.$available_locale) }}">
                <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>
