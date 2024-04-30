@extends('home.layouts.app')

@include('admin.message')

@section('section')




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page - Products and Services</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Help Page - Products and Services</h1>
        <div class="row">
            <div class="col-md-4">
                <h3>Products</h3>
                <ul class="list-unstyled">
                    <li><a href="#product-faq">Product FAQ</a></li>
                    <li><a href="#product-features">Product Features</a></li>
                    <li><a href="#product-usage">Product Usage Guide</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Services</h3>
                <ul class="list-unstyled">
                    <li><a href="#service-faq">Service FAQ</a></li>
                    <li><a href="#service-benefits">Service Benefits</a></li>
                    <li><a href="#service-pricing">Service Pricing</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Additional Resources</h3>
                <ul class="list-unstyled">
                    <li><a href="#contact-us">Contact Us</a></li>
                    <li><a href="#support-ticket">Support Ticket</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div id="product-faq">
            <h4>Product FAQ</h4>
            <!-- Add your product FAQ content here -->
        </div>
        <div id="product-features">
            <h4>Product Features</h4>
            <!-- Add your product features content here -->
        </div>
        <div id="product-usage">
            <h4>Product Usage Guide</h4>
            <!-- Add your product usage guide content here -->
        </div>
        <div id="service-faq">
            <h4>Service FAQ</h4>
            <!-- Add your service FAQ content here -->
        </div>
        <div id="service-benefits">
            <h4>Service Benefits</h4>
            <!-- Add your service benefits content here -->
        </div>
        <div id="service-pricing">
            <h4>Service Pricing</h4>
            <!-- Add your service pricing content here -->
        </div>
        <div id="contact-us">
            <h4>Contact Us</h4>
            <!-- Add your contact information here -->
        </div>
        <div id="support-ticket">
            <h4>Support Ticket</h4>
            <!-- Add your support ticket information here -->
        </div>
        <div id="faq">
            <h4>FAQ</h4>
            <!-- Add your general FAQ content here -->
        </div>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min


@endsection