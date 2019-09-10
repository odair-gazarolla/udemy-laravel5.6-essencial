@extends('layouts.app')

@section('content')

	<div class="container">

		<a href="{{route('menu.new')}}" class="btn btn-success float-right">New</a>

		<h2>Menus</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Restaurant</th>
					<th>Price</th>
					<th>Created At.</th>
					<th>Act</th>
				</tr>
			</thead>
			<tbody>
				@foreach($menus as $menu)
					<tr>
						<td>{{ $menu->id }}</td>
						<td>{{ $menu->name }}</td>
						<td>{{ $menu->restaurant->name }}</td>
						<td>{{ $menu->price }}</td>
						<td>{{ $menu->created_at }}</td>
						<td>
							<a href="{{ route('menu.edit', [$menu->id]) }}" class="btn btn-primary">EDIT</a>
							<a href="{{ route('menu.remove', [$menu->id]) }}" class="btn btn-danger">DELETE</a>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>
	</div>

@endsection