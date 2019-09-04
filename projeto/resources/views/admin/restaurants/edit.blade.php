<h1>Updating restaurant</h1>

<hr>

<form action="{{route('restaurant.update', ['id' => $restaurant->id])}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Restaurant Name</label> <br>
        <input type="text" name="name" value="{{$restaurant->name}}">
    </p>

    <p>
        <label>Address</label> <br>
        <input type="text" name="address" value="{{$restaurant->address}}">
    </p>

    <p>
        <label>Tell about the restaurant</label> <br>
        <textarea name="description" cols="30" rows="10">{{$restaurant->description}}</textarea>
    </p>

    <p>
        <input type="submit" value="Update">
    </p>
</form>