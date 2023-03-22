@props(['locales', 'locale'])
<p>
    <span>{{ __('Locale')}}:</span>
    <select wire:model="locale">
        @foreach($locales as $value => $title)
            <option value="{{ $value}}" @if($value === $locale) selected @endif>{{ $title }}</option>
        @endforeach
    </select>
</p>
