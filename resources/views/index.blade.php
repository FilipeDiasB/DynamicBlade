<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DynamicBlade</title>
</head>
<body>
@foreach($form->inputs as $input)
    <x-dynamic-component :component="$input['component']" :input="$input" class="mt-2 ml-2"/>
@endforeach

@foreach($form->radios as $radio)
    <x-dynamic-component :component="$radio['component']" :radio="$radio" class="ml-2"/>
@endforeach


</body>
<script src="{{ url(mix('backend/assets/js/jquery.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/libs.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/scripts.js')) }}"></script>

<script>

    $(document).ready(function(){
       $('#homem').on('click', function (){
           if ($(this).prop("checked")){
               $('#mulherInput').prop("disabled", true)
           } else {
               $('#mulherInput').prop("disabled", false)
           }
       });

        $('#mulher').on('click', function (){
            if ($(this).prop("checked")){
                $('#homemInput').prop("disabled", true)
            } else {
                $('#homemInput').prop("disabled", false)
            }
        });

    });

</script>
</html>

