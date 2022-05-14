<div {!! $attributes->merge(['class' => 'mb-10']) !!}>
    <label class="required form-label">{{ $label }}</label>
    {{ $slot }}
</div>
