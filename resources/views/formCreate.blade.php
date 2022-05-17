<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DynamicBlade</title>
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}"/>
</head>
<body>
@include('header')
<div class="mt-4">
<form action="{{ route('salvarHM') }}" method="post" class="app_form">
    @csrf

    @foreach($form->inputs as $input)
        <x-dynamic-component :component="$input['component']" :input="$input"/>
    @endforeach

    <button class="bg-sky-600 hover:bg-sky-700 rounded rounded-lg text-white p-1 shadow shadow-sm">salvar</button>

</form>
</div>
<script src="{{ url(mix('js/app.js')) }}"></script>
<script src="{{ url(mix('js/jquery.js')) }}"></script>
<script>

    let homem = $('#inputText-1');
    let mulher = $('#inputText-2');

    homem.addClass('d-none');

    $('#input-3').on('click', function (){
        if ($(this).prop('checked')){
            mulher.addClass('d-none')
            homem.removeClass('d-none')
        } else {
            homem.addClass('d-none')
            mulher.removeClass('d-none')
        }
    });

    $('#input-4').on('click', function (){
        if ($(this).prop('checked')){
            homem.addClass('d-none')
            mulher.removeClass('d-none')
        } else {
            mulher.addClass('d-none')
            homem.removeClass('d-none')
        }
    })
    // $('#input-3').on('click', function () {
    //     if ($(this).prop("checked")) {
    //         mulher.prop("disabled", true)
    //         homem.prop("disabled", false)
    //     } else {
    //         mulher.prop("disabled", false)
    //         homem.prop("disabled", true)
    //     }
    // });
    //
    // $('#input-4').on('click', function () {
    //     if ($(this).prop("checked")) {
    //         homem.prop("disabled", true)
    //         mulher.prop("disabled", false)
    //     } else {
    //         homem.prop("disabled", false)
    //         mulher.prop("disabled", true)
    //     }
    // });
</script>
</body>
</html>

