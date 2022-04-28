<div class="form-group row">
    <label for="{{ $input['label'] }}" class="col-md-4 col-form-label text-md-right">{{ __($input['label']) }}</label>

    <div class="col-md-6">
        <input id="{{ $input['name'] }}" type="text" class="form-control @error($input['name']) is-invalid @enderror" name="{{ $input['name'] }}"
               value="" required autocomplete="{{ $input['name'] }}" autofocus>
    </div>
</div>