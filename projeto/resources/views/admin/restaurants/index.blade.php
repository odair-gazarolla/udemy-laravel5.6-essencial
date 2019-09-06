@extends('layouts.app')

@section('content')

	<div class="container">

		<a href="{{route('restaurant.new')}}" class="float-right btn btn-success">New</a>

		<h2>Restaurants</h2>
		<table class="table table-striped">
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
						<td>{{ $restaurant->id }}</td>
						<td>{{ $restaurant->name }}</td>
						<td>{{ $restaurant->created_at }}</td>
						<td>
							<a href="{{ route('restaurant.edit', ['id' => $restaurant->id]) }}" class="btn btn-primary">EDIT</a>
							<a href="{{ route('restaurant.remove', ['id' => $restaurant->id]) }}" class="btn btn-danger">DELETE</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection