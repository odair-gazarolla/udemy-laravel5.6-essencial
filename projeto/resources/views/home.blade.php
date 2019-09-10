@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restaurants</h1>

    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="col-4">
                <h3>
                    <a href="{{ route('home.single', ['restaurant' => $restaurant]) }}"> {{ $restaurant->name }} </a>
                </h3>
                <p>
                    {{ $restaurant->description }}
                </p>
            </div>
        @endforeach
    </div>

    {{ $restaurants->links() }}
</div>
@endsection
