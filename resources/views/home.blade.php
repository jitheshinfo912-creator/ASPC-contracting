@extends('layout')
@section('title', 'Heavy & Civil Construction')

@section('content')
<!-- Hero Section -->
<section class="hero overlay-dark" style="background-image: url('https://images.unsplash.com/photo-1541888081622-1eb1db37aa15?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="container hero-content">
        <div class="hero-text-box fade-up">
            <span class="hero-badge">Industry Leaders</span>
            <h1 class="hero-title">Engineering Your <span class="text-gold">Vision</span> Into Reality</h1>
            <p class="hero-subtitle">Providing world-class construction and engineering services for commercial, industrial, and civil projects.</p>
            <div class="hero-actions">
                <a href="/projects" class="btn btn-primary">Our Projects</a>
                <a href="/contact" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container stats-grid">
        <div class="stat-card">
            <span class="stat-number">25+</span>
            <span class="stat-label">Years Experience</span>
        </div>
        <div class="stat-card">
            <span class="stat-number">450+</span>
            <span class="stat-label">Projects Completed</span>
        </div>
        <div class="stat-card">
            <span class="stat-number">120+</span>
            <span class="stat-label">Expert Engineers</span>
        </div>
        <div class="stat-card">
            <span class="stat-number">100%</span>
            <span class="stat-label">Client Satisfaction</span>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="section about-home">
    <div class="container about-grid">
        <div class="about-image shine-effect">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Construction Site" />
        </div>
        <div class="about-content">
            <span class="section-subtitle">Who We Are</span>
            <h2 class="section-title">Building The Foundation For A Better Tomorrow</h2>
            <p class="section-text">At ASPC BUILDING CONTRACTING L.L.C, we bring over two decades of expertise to every project. Our dedicated team of engineers, architects, and builders work relentlessly to deliver structures that stand the test of time.</p>
            <ul class="feature-list">
                <li><i class="icon-check"></i> Uncompromising Safety Standards</li>
                <li><i class="icon-check"></i> Sustainable Building Practices</li>
                <li><i class="icon-check"></i> On-Time & Within Budget Delivery</li>
            </ul>
            <a href="/about" class="btn btn-secondary mt-4">Discover More</a>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section services-home bg-light">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-subtitle">Our Expertise</span>
            <h2 class="section-title">Comprehensive Construction Services</h2>
        </div>
        
        <div class="services-grid">
            <div class="service-card hover-lift">
                <div class="service-icon">🏗️</div>
                <h3>Commercial Construction</h3>
                <p>Office buildings, retail spaces, and mixed-use developments built to the highest specifications.</p>
                <a href="/services" class="service-link">Read More &rarr;</a>
            </div>
            <div class="service-card hover-lift">
                <div class="service-icon">🏭</div>
                <h3>Industrial Facilities</h3>
                <p>Manufacturing plants, warehouses, and specialized industrial complexes with robust infrastructure.</p>
                <a href="/services" class="service-link">Read More &rarr;</a>
            </div>
            <div class="service-card hover-lift">
                <div class="service-icon">🌉</div>
                <h3>Civil Engineering</h3>
                <p>Bridges, roads, and large-scale public infrastructure projects engineered for durability.</p>
                <a href="/services" class="service-link">Read More &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container cta-container text-center">
        <h2>Ready To Start Your Next Project?</h2>
        <p>Contact our experts today for a consultation and let's discuss how we can bring your vision to life.</p>
        <a href="/contact" class="btn btn-primary btn-lg mt-4">Get A Free Quote</a>
    </div>
</section>
@endsection
