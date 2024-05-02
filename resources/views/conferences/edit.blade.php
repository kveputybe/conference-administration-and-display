<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="createConteiner w-50 d-flex flex-column border border-secondary pl-5 pt-2">
            <form action="{{ route('conferences.update', ['id' => $conference->id]) }}" method="POST" >
            @csrf
            @method('PUT')
            <input class="form-control w-50 mt-3" type="text" name="title" value="{{old('title', $conference->title)}}"><br>
            <textarea class="form-control mt-1 w-75 " name="description" >{{old('description', $conference->description)}}</textarea></br>
            <div class="d-flex">
                <input class="form-control w-50 h-25" type="datetime-local" name="date" value="{{old('date', $conference->date)}}">
                <input class="form-control w-25 h-25 customMarginInput" type="text" name="addres" value="{{old('addres', $conference->addres)}}"><br></br>
            </div>
            <button class="mb-4 btn btn-success mt-3" type="submit">{{ __('app.updateConference') }}</button>
            </form>
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger w-50">{{$error}}</div>
                @endforeach
            @endif
        </div>
        
    </div>
</body>
</html>