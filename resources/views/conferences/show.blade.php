<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<h1 class="d-flex justify-content-center m-5 pt=5">{{ __('app.conference') }}</h1>
        @foreach ($conferences as $conference)
        <div class="conteiner d-flex justify-content-center">
        <div class='conferenceConteiner w-50 border  border-secondary pt-2'>
            <h3>{{ $conference->title }}</h3>
            <div class="border border-2 mt-3 rounded-1 w-75 text-secondary">{{$conference->description}}</div><br>
            <div>{{ __('app.address') }}{{ $conference->addres }}<br>
             {{ __('app.time') }}{{ $conference->date }} </div>
            </br>  
        </div>
    </div>
        <br></br>
        @endforeach
</body>
</html>