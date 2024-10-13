@extends('layouts.app')

@section('content')
    <!-- Insert the auth navbar here -->
    @include('layouts.navbar.auth.navbar-auth')

    <div class="container">
        <h1>Auth Dashboard Content</h1>
        <p>This is auth dashboard content.</p>
    </div>
@endsection
