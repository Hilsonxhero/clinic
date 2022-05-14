<input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control mb-2 js-tags-input']) !!}
    type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
    data-blacklist='PHP' />

<x-validation-error field='{{ $name }}'></x-validation-error>
