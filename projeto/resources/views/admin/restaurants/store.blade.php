@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Inserting restaurant</h1>

        <hr>

        <form action="{{route('restaurant.store')}}" method="post">
            {{csrf_field()}}
            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
            <p class="form-group">
                <label>Restaurant Name</label>
                <input type="text" name="name" class="form-control @if ($errors->has('name')) is-invalid @endif">
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control @if($errors->has('address')) is-invalid @endif">
                @if ($errors->has('address'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('address')}}</strong>
                    </span>
                @endif
            </p>

            <p class="form-group">
                <label>Tell about the restaurant</label>
                <textarea
                    name="description"
                    class="form-control
                    @if($errors->has('description')) is-invalid @endif"></textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('description')}}</strong>
                    </span>
                @endif
            </p>

            <input type="submit" value="Register" class="btn btn-success btn-lg">
        </form>
    </div>

@endsection