@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Updating restaurant</h1>

        <hr>

        <form action="{{route('restaurant.update', ['id' => $restaurant->id])}}" method="post">
            {{csrf_field()}}
            <p class="form-group">
                <label>Restaurant Name</label>
                <input
                    type="text"
                    name="name"
                    value="{{$restaurant->name}}"
                    class="form-control  @if($errors->has('name')) is-invalid @endif">
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </p>

            <p class="form-group">
                <label>Address</label>
                <input
                    type="text"
                    name="address"
                    value="{{$restaurant->address}}"
                    class="form-control @if($errors->has('address')) is-invalid @endif">
                @if ($errors->has('address'))
                    <span class="invalid-feedback">
                        {{$errors->first('address')}}
                    </span>
                @endif
            </p>

            <p class="form-group">
                <label>Tell about the restaurant</label>
                <textarea
                    name="description"
                    class="form-control @if($errors->has('description')) is-invalid @endif"
                    >{{$restaurant->description}}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        {{$errors->first('description')}}
                    </span>
                @endif
            </p>

            <p>
                <input type="submit" value="Update" class="btn btn-success btn-lg">
            </p>
        </form>
    </div>

@endsection