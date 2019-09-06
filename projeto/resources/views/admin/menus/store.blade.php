@extends('layouts.app')

@section('content')

	<div class="container">

		<h2>Including Menu</h2>

		<hr>

		<form action="{{route('menu.store')}}" method="post">
			{{csrf_field()}}

			<p class="form-group">
				<label>Name</label>
				<input type="textarea" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
				<span class="invalid-feedback">
					@error('name')
						<strong> {{ $message }} </strong>
					@endif
				</span>
			</p>

			<p class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
				<span class="invalid-feedback">
					@error('price')
						<strong> {{ $message }} </strong>
					@enderror
				</span>
			</p>

			<input type="submit" value="Register" class="btn btn-success btn-lg">

		</form>

	</div>

@endsection