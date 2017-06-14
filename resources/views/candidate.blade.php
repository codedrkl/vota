@extends('layouts.dashboard')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            @include('includes.action')
        </nav>

        <div class="content">
            <div class="container-fluid">
                @include('includes.create-candidate')
                @include('includes.view-candidate')
            </div>
        </div>
    </div>
@endsection
