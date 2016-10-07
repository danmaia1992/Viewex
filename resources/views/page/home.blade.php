@extends('layout.basic')

@section('content')
<form method="POST" action="profile">
	{{ csrf_field() }}
	  Usersname:
	  <input type="text" name="name">
	  <input type="submit" value="Submit">
	</form>

@endsection