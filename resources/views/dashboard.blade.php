@extends('layouts.dashboard');

@section('menu')
	<ul class="nav">
		<li class="active">
			<a href="#">
				<i class="material-icons">dashboard</i>
				<p>Dashboard</p>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">person</i>
				<p>Elections</p>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">content_paste</i>
				<p>Voters</p>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">library_books</i>
				<p>Settings</p>
			</a>
		</li>
	</ul>
@endsection

@section('content')
	<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
                @include('includes.action')
			</nav>

			<div class="content">
				<div class="container-fluid">
					@include('includes.stats')
				</div>
			</div>
		</div>
@endsection
