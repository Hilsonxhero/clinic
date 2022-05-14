<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control mb-2']) !!} type="{{ $type }}" name="{{ $name }}"
    placeholder="{{ $placeholder }}" />

<x-validation-error field='{{ $name }}'></x-validation-error>
