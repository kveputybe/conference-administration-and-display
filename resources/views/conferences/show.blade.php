
@extends('layouts.app')
@section('content')

<h1 class="d-flex justify-content-center m-5 pt=5">{{ __('app.conference') }}</h1>
        @foreach ($conferences as $conference)
        <div class="conteiner d-flex justify-content-center">
        <div class='conferenceConteiner w-50 border border-secondary pt-2 customHightDescription'>
            <h3>{{ $conference->title }}</h3>
            <textarea class="border border-2 p-1 mt-3 rounded-3 w-75 text-secondary " disabled>{{$conference->description}}</textarea><br>
            <div>{{ __('app.address') }} {{ $conference->addres }}<br>
             {{ __('app.time') }}{{ $conference->date }} </div>
            </br>
            @guest
            @else
            <div class='conteiner d-flex mb-2'>
                <a href="{{ route('conferences.edit', ['id' => $conference->id]) }}" class="btn btn-primary">{{__('app.editConference')}}</a>
                <form method="POST" action="{{ route('conferences.delete', ['id' => $conference->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger customMarginDelete">{{ __('app.delete')}}</button>
                </form>
            </div>
            @endguest
      
        </div>
    </div>
        <br></br>
        @endforeach
 @endsection('content')
