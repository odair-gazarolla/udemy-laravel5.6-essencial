<h2>Restaurants</h2>

<a href="{{route('restaurant.new')}}">New</a>

<hr>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Created At</th>
			<th>Act</th>
		</tr>
	</thead>
	<tbody>
		@foreach($restaurants as $restaurant)
			<tr>
				<td>{{$restaurant->id}}</td>
				<td>{{$restaurant->name}}</td>
				<td>{{$restaurant->created_at}}</td>
				<td>
					<a href="{{route('restaurant.edit', ['id' => $restaurant->id])}}">EDIT</a>
					<a href="{{route('restaurant.remove', ['id' => $restaurant->id])}}">DELETE</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>