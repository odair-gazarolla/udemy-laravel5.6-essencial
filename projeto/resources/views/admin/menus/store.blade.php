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
				@error('name')
					<span class="invalid-feedback">
						<strong> {{ $message }} </strong>
					</span>
				@endif
			</p>

			<p class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
				@error('price')
					<span class="invalid-feedback">
						<strong> {{ $message }} </strong>
					</span>
				@enderror
			</p>

			<p class="form-group">
				<label>Restaurant</label>
				<select name="restaurant_id" class="form-control @error('restaurant_id') is-invalid @enderror">
					@foreach($restaurants as $restaurant)
						<option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
					@endforeach
				</select>
				@error('restaurant_id')
					<span class="invalid-feedback">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</p>

			<input type="submit" value="Register" class="btn btn-success btn-lg">

		</form>

	</div>

@endsection