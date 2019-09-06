@extends('layouts.app')

@section('content')

	<div class="container">

		<h2>Updating User</h2>

		<hr>

		<form action="{{route('user.update', ['id' => $user->id])}}" method="post">
			{{csrf_field()}}

			<p class="form-group">
				<label>Name</label>
				<input type="textarea" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}">
				<span class="invalid-feedback">
					@error('name')
						<strong> {{ $message }} </strong>
					@endif
				</span>
			</p>

			<p class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}">
				<span class="invalid-feedback">
					@error('email')
						<strong> {{ $message }} </strong>
					@enderror
				</span>
			</p>

			<p class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
				<span class="invalid-feedback">
					@error('password')
						<strong> {{ $message }} </strong>
					@enderror
				</span>
			</p>

			<p class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="password_confirmation" class="form-control @error('password_confirm') is-invalid @enderror">
				<span class="invalid-feedback">
					@error('password-confirm')
						<strong> {{ $message }} </strong>
					@enderror
				</span>
			</p>

			<input type="submit" value="Update" class="btn btn-success btn-lg">

		</form>

	</div>

@endsection