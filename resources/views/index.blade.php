@foreach($form->inputs as $input)
    <x-dynamic-component :component="$input['component']" :input="$input"/>
@endforeach