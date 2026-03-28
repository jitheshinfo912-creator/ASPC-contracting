@extends('layout')
@section('title', 'Our Services')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="container header-content">
        <h1>Our Services</h1>
        <p>Comprehensive construction solutions tailored to your needs.</p>
    </div>
</div>

<section class="section services-page">
    <div class="container">
        <!-- Service 1 -->
        <div class="service-detail-row">
            <div class="service-image overflow-hidden">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Commercial Construction" class="img-fluid hover-zoom">
            </div>
            <div class="service-info">
                <span class="service-number text-gold">01</span>
                <h2>Commercial Construction</h2>
                <p>We construct modern, efficient, and inspiring commercial spaces, including office buildings, retail centers, and hospitality venues. Our approach ensures minimal disruption and maximum return on investment.</p>
                <ul class="check-list">
                    <li><i class="icon-check text-gold"></i> High-rise Office Buildings</li>
                    <li><i class="icon-check text-gold"></i> Retail Plazas & Malls</li>
                    <li><i class="icon-check text-gold"></i> Corporate Headquarters</li>
                </ul>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="service-detail-row row-reverse mt-5">
            <div class="service-image overflow-hidden">
                <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?auto=format&fit=crop&w=800&q=80" alt="Civil Engineering" class="img-fluid hover-zoom">
            </div>
            <div class="service-info">
                <span class="service-number text-gold">02</span>
                <h2>Civil Infrastructure</h2>
                <p>Our civil engineering division handles large-scale public works and infrastructure projects critical to community growth and connectivity.</p>
                <ul class="check-list">
                    <li><i class="icon-check text-gold"></i> Highways and Bridges</li>
                    <li><i class="icon-check text-gold"></i> Water Treatment Facilities</li>
                    <li><i class="icon-check text-gold"></i> Urban Development Zones</li>
                </ul>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="service-detail-row mt-5">
            <div class="service-image overflow-hidden">
                <img src="https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?auto=format&fit=crop&w=800&q=80" alt="Industrial Construction" class="img-fluid hover-zoom">
            </div>
            <div class="service-info">
                <span class="service-number text-gold">03</span>
                <h2>Industrial Facilities</h2>
                <p>Building heavy-duty manufacturing plants, automated warehouses, and specialized processing facilities with advanced logistical and structural requirements.</p>
                <ul class="check-list">
                    <li><i class="icon-check text-gold"></i> Manufacturing Plants</li>
                    <li><i class="icon-check text-gold"></i> Logistics Hubs</li>
                    <li><i class="icon-check text-gold"></i> Energy Sector Facilities</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section bg-gold text-dark text-center py-4">
    <div class="container d-flex align-items-center justify-content-between flex-wrap">
        <h3 class="mb-0">Need a reliable partner for your next project?</h3>
        <a href="/contact" class="btn btn-dark mt-3 mt-md-0">Get in Touch</a>
    </div>
</section>
@endsection
