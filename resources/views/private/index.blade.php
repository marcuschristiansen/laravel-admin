@extends('layouts.private')

@section('content')

	<section class="content-header">
		<h1>Dashboard</h1>
	</section>

	<div class="panel-body">
	    Hi {{ Auth::user()->name }}
	</div>

@endsection