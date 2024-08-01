@extends('frontend.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="hero-section text-center">
                <h1>Welcome to Shopify!</h1>

            </div>
        </div>
    </div>

    
<style>
    /* Container Styles */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Hero Section Styles */
    .hero-section {
        background: #343a40; /* Dark background for better contrast */
        color: #f8f9fa; /* Light text color for readability */
        padding: 60px 20px;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .hero-section h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .hero-section .btn-primary {
        background-color: #f8f9fa; /* Light button background */
        color: #343a40; /* Dark text color */
        border: 2px solid #f8f9fa;
        padding: 12px 24px;
        font-size: 16px;
        border-radius: 4px;
    }

    .hero-section .btn-primary:hover {
        background-color: #e9ecef; /* Slightly darker on hover */
        color: #212529; /* Even darker text color on hover */
    }

    /* Feature Card Styles */
    .feature-card {
        background: #ffffff; /* White background for clean look */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15); /* Slightly stronger shadow */
        border: 1px solid #dee2e6; /* Light border for better separation */
    }

    .feature-card h2 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #343a40; /* Dark color for headings */
    }

    .feature-card p {
        font-size: 16px;
        margin-bottom: 15px;
        color: #495057; /* Subtle gray for text */
    }

    .feature-card .btn-secondary {
        background-color: #6c757d; /* Standard secondary color */
        color: #ffffff; /* White text color */
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        text-decoration: none;
    }

    .feature-card .btn-secondary:hover {
        background-color: #5a6268; /* Darker gray on hover */
    }

    /* Alert Styles */
    .alert-success {
        background-color: #d4edda; /* Light green background for success */
        border-color: #c3e6cb;
        color: #155724; /* Dark green text color */
    }
</style>

@endsection
