@error($field)
    <div class="fv-plugins-message-container invalid-feedback">
        <div data-field="product_name" data-validator="notEmpty">{{ $message }}</div>
    </div>
@enderror
