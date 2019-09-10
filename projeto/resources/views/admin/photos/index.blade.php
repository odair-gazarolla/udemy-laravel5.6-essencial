@extends('layouts.app')

@section('title')
	Uploading Photos
@endsection

@section('content')

	<div class="container">
		<div class="col-12">
			<h1>Restaurant photos resgistering</h1>
		</div>

		<div class="col-12">
			<form action="{{ route('restaurant.photo.save', ['id' => $restaurant_id]) }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Load photo</label>
					<input type="file" name="photos[]" multiple>
				</div>

				<input type="submit" value="Send Photos" class="btn btn-lg btn-success">
			</form>
		</div>
	</div>

@endsection