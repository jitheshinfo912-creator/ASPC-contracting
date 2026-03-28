@extends('layout')
@section('title', 'About Us')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="container header-content">
        <h1>About ASPC BUILDING CONTRACTING L.L.C</h1>
        <p>A legacy of excellence since 1998.</p>
    </div>
</div>

<section class="section about-page">
    <div class="container grid-2">
        <div class="about-text">
            <h2>Our Story</h2>
            <p>Founded on principles of integrity, hard work, and innovation, ASPC BUILDING CONTRACTING L.L.C has grown from a small family-owned business into one of the region's top-tier construction firms.</p>
            <p>Over the past 25 years, we have successfully delivered over 450 projects spanning commercial, industrial, and civil sectors. We don't just build structures; we build relationships with our clients based on trust and transparent communication.</p>
            
            <h3 class="mt-4">Our Mission</h3>
            <p>To provide unparalleled construction services through safety, quality, and sustainable practices, ensuring complete client satisfaction and long-lasting community impact.</p>
        </div>
        
        <div class="about-stats shadow-box">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80" alt="Construction Team at Work" class="img-fluid rounded border-gold" style="width: 100%; object-fit: cover;">
            <div class="experience-badge">
                
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section bg-dark text-white text-center">
    <div class="container">
        <span class="section-subtitle text-gold">Why Choose Us</span>
        <h2>Our Core Values</h2>
        <div class="values-grid mt-4">
            <div class="value-card">
                <div class="value-icon">🛡️</div>
                <h3>Safety First</h3>
                <p>Safety is not just a priority; it's our core principle embedded in every action we take on site.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">⭐</div>
                <h3>Unmatched Quality</h3>
                <p>We source the best materials and employ master craftsmen to guarantee structural integrity and flawless finish.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3>Integrity</h3>
                <p>Honest negotiations, transparent pricing, and holding ourselves accountable on every deadline.</p>
            </div>
        </div>
    </div>
</section>
@endsection
