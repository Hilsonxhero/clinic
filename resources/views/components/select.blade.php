<select {!! $attributes->merge(['class' => 'form-select']) !!} name="{{ $name }}" data-control="select2"
    data-placeholder="{{ $placeholder }}">
    {{ $slot }}
</select>
