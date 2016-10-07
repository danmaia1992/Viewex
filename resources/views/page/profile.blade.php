@extends('layout.basic')

@section('content')
	<p>Hello {{ $user->username }}</p>
@endsection