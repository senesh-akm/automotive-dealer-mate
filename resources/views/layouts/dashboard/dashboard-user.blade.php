@extends('layouts.app')

@section('content')
    <div class="dashboard-wrapper d-flex">
        <!-- Include the user navbar (top navigation) -->
        @include('layouts.navbar.user.top-navbar')

        <div class="d-flex w-100">
            <!-- Include the left sidebar navbar -->
            <div class="left-navbar">
                @include('layouts.navbar.user.left-navbar')
            </div>

            <div class="dashboard-content p-4 w-100">
                <h1>Dashboard Content for User</h1>
                <p>This is user dashboard content.</p>
            </div>
        </div>
    </div>
@endsection
