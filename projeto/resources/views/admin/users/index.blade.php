@extends('layouts.app')

@section('content')

	<div class="container">

		<a href="{{route('user.new')}}" class="btn btn-success float-right">New</a>

		<h2>Users</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Created At.</th>
					<th>Act</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td>
							<a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-primary">EDIT</a>
							<a href="{{ route('user.remove', [$user->id]) }}" class="btn btn-danger">DELETE</a>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>
	</div>

@endsection