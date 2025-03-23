@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-5 bg-primary text-white">
        <h1 class="fw-bold">Welcome to Nita Infotech</h1>
        <p>Your career starts here. Find the perfect job or hire the right talent.</p>
        <a href="{{ route('jobs') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
    </section>

    <!-- Features Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Why Choose  Nita Infotech?</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Top Companies</h4>
                <p>Get hired by leading companies across industries.</p>
            </div>
            <div class="col-md-4">
                <h4>Fast Hiring</h4>
                <p>Secure your job within 48 hours.</p>
            </div>
            <div class="col-md-4">
                <h4>Verified Employers</h4>
                <p>Apply to trusted, verified job listings.</p>
            </div>
        </div>
    </div>
@endsection
