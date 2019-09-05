<h1>Inserting restaurant</h1>

<hr>

<form action="{{route('restaurant.store')}}" method="post">
    {{csrf_field()}}
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
    <p>
        <label>Restaurant Name</label> <br>
        <input type="text" name="name">
        @if ($errors->has('name'))
            <br>{{$errors->first('name')}}
        @endif
    </p>

    <p>
        <label>Address</label> <br>
        <input type="text" name="address">
        @if ($errors->has('address'))
            <br>{{$errors->first('address')}}
        @endif
    </p>

    <p>
        <label>Tell about the restaurant</label> <br>
        <textarea name="description" cols="30" rows="10"></textarea>
        @if ($errors->has('description'))
            <br>{{$errors->first('description')}}
        @endif
    </p>

    <p>
        <input type="submit" value="Register">
    </p>
</form>