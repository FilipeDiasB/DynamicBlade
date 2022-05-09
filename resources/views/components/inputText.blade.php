<div id="inputText-{{ $input['id'] }}"{{ $attributes }}>
<label for="{{ $input['label'] }}" class="ml-2">{{ __($input['label']) }}</label>
<input id="{{ $input['name'] }}" type="text"
       class="form-control {{ $attributes }}  @error($input['name']) is-invalid @enderror" name="{{ $input['name'] }}"
       value="" required autocomplete="{{ $input['name'] }}" placeholder="{{ $input['placeholder'] }}"
       autofocus>
</div>