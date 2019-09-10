@extends('layouts.app')

@section('title')
    Restaurant Details
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2>{{ $restaurant->name }}</h2>
                <hr>
                <p>{{ $restaurant->description }}</p>
                <p>
                    <address>Address: {{ $restaurant->address }}</address>
                </p>
            </div>

            <hr>

            <div class="col-12">
                <h2>Menus</h2>
                <ul class="list-group">
                    @foreach($restaurant->menus as $menu)
                        <li class="list-group-item">
                            {{ $menu->name }}
                            R$ {{ $menu->price }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-12">
                <h2>Photos</h2>
                <div class="row">
                    @if($restaurant->photos->count())

                        @foreach($restaurant->photos as $photo)
                            <div class="col-4">
                                <img src="{{ asset('/images/' . $photo->photo) }}" class="img-fluid">
                            </div>
                        @endforeach

                    @else

                        <div class="col-12">
                            <span class="alert alert-warning">No images</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection