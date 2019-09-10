@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restaurants</h1>

    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="col-4">
                @if ($restaurant->photos->count())
                    <img src="{{ asset('/images/' . $restaurant->photos()->first()->photo) }}" alt="" class="img-fluid">
                @endif
                <h3>
                    <a href="{{ route('home.single', ['slug' => $restaurant->slug]) }}"> {{ $restaurant->name }} </a>
                </h3>
                <p>
                    {{ str_limit($restaurant->description, 150, '...') }}
                </p>
            </div>
        @endforeach
    </div>

    {{ $restaurants->links() }}
</div>
@endsection
