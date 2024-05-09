@extends('layouts.app')
@section('content')

    <div class="container d-flex justify-content-center">
        <div class="createConteiner w-50 d-flex flex-column border border-secondary pl-5 pt-2">
            <form action="{{ route('conferences.store') }}" method="POST" >
            @csrf
            <input class="form-control w-50 mt-3" type="text" name="title" placeholder={{ __('app.title') }}><br>
            <textarea class="form-control mt-1 w-75 " name="description" placeholder={{ __('app.description') }}></textarea></br>
            <div class="d-flex">
                <input class="form-control w-50 h-25" type="datetime-local" name="date" >
                <input class="form-control w-25 h-25 customMarginInput" type="text" name="addres" placeholder={{ __('app.address') }}><br></br>
            </div>
            <button class="mb-4 btn btn-success mt-3" type="submit">{{ __('app.createConference') }}</button>
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
@endsection('content')