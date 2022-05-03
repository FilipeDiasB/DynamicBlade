<div {{ $attributes }}>
    <label for="{{ $input['label'] }}" class="ml-1">{{ __($input['label']) }}</label>
    <div class="form-group row">
        <div class="col-md-6">
            <input id="{{ $input['name'] }}" type="text"
                   class="form-control  @error($input['name']) is-invalid @enderror" name="{{ $input['name'] }}"
                   value="" required autocomplete="{{ $input['name'] }}" placeholder="{{ $input['placeholder'] }}"
                   autofocus>
        </div>
    </div>
</div>
