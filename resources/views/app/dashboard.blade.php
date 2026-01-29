@extends('app.layout')

@section('content')
    <div class="w-full">
        @foreach ($user->links as $item)
        <div class="border-1 border-gray-50 p-5 w-full">
            item
        </div>
        @endforeach
    </div>
@endsection