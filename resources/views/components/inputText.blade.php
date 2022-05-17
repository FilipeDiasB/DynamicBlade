<div id="inputText-{{ $input['id'] }}">
        <label class>
            <span class="block text-sm font-medium text-slate-700">{{ $input['label'] }}</span>
            <input id="{{ $input['name'] }}" type="text"
                   class="form-control mt-1block w-full px-3 py-2 bg-white border border-slate-300 rounded-lg text-sm shadow-sm placeholder-slate-400
       focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error($input['name']) is-invalid @enderror" name="{{ $input['name'] }}"
                   value="" required autocomplete="{{ $input['name'] }}" placeholder="{{ $input['placeholder'] }}"
                   autofocus>
            <p class="mt-2 peer-invalid:visible text-red-600 text-sm">
                @if($errors->has($input['name']))
                    {{ $errors->first($input['name']) }}
                @endif
            </p>
        </label>
</div>