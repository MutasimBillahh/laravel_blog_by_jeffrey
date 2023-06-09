@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">
		<h1>Register</h1>
	<form action="/register" method="POST">
		{{ csrf_field() }}


		<div class="form-group">
			<label for="title">Name</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>

		<div class="form-group">
			<label for="title">Email</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>

		<div class="form-group">
			<label for="title">Password</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>

		<div class="form-group">
			<label for="title">Password Confirmation</label>
			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
		</div>


			<div class="form-group">
			<button type="submit" class="btn btn-primary">Register</button>
		</div>


			@include('layouts.errors')
</form>
</div>
@endsection
