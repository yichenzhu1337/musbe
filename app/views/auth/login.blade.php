@extends('layouts.login')

@section('content')

<div class="centered custom-background-alpha">

	<br><br>

	<h2> Login </h2>

	<br>

	<form action="" method="post">

		<input class="log-reg-input-width" type="text" name="email" placeholder="Email" size="35">
		<br>
		{{ $errors->first('email', '<span class="error">:message</span>') }}
		<br>

		<input class="log-reg-input-width" type="password" name="password" placeholder="Password" size="35">
		<br>
		{{ $errors->first('password', '<span class="error">:message</span>') }}
		<br>

		<input class="custom-button-alpha background-color-maroon" type="submit" value="Login">

		{{ Form::token() }}
	</form>

	<hr>

	<a href="#"> Connect with Facebook </a>
	<br><br>

</div>

@stop