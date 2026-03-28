@extends('layout')
@section('title', 'Contact Us')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1541888081622-1eb1db37aa15?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="container header-content">
        <h1>Get In Touch</h1>
        <p>We're ready to build your next big project.</p>
    </div>
</div>

<section class="section contact-page bg-light">
    <div class="container grid-2 align-items-start">
        <!-- Contact Info -->
        <div class="contact-info-panel bg-dark text-white p-5 rounded shadow-lg">
            <h2>Contact Information</h2>
            <p class="mb-5 text-gray">Fill up the form and our team will get back to you within 24 hours.</p>

            <div class="contact-detail mb-4">
                <div class="contact-icon text-gold mb-2">📍</div>
                <h4>Office Location</h4>
                <p>123 Industrial Parkway<br>Building Block, NY 10001</p>
            </div>

            <div class="contact-detail mb-4">
                <div class="contact-icon text-gold mb-2">📞</div>
                <h4>Phone Number</h4>
                <p>+971 552769485<br>+971 44513525(Support)</p>
            </div>

            <div class="contact-detail mb-4">
                <div class="contact-icon text-gold mb-2">✉️</div>
                <h4>Email Address</h4>
                <p>info@aspcuae.com<br>quotes@aspcuae.com</p>
            </div>
            
            <div class="social-links mt-5">
                <a href="#" class="social-btn">FB</a>
                <a href="#" class="social-btn">IN</a>
                <a href="#" class="social-btn">TW</a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-panel p-5 bg-white rounded shadow-sm border-top-gold">
            <h2 class="mb-4">Send us a Message</h2>
            <form action="#" method="POST" class="custom-form">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                </div>

                <div class="form-group">
                    <label for="service">Interested Service</label>
                    <select id="service" name="service" class="form-control">
                        <option value="commercial">Commercial Construction</option>
                        <option value="industrial">Industrial Facilities</option>
                        <option value="civil">Civil Engineering</option>
                        <option value="other">Other Inquiry</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Tell us about your project..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-3">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Map Placeholder -->
<section class="map-section">
    <div class="map-container" style="height: 400px; background-color: #e9ecef; display: flex; align-items: center; justify-content: center;">
        <p class="text-muted">Interactive Map Placeholder</p>
        <!-- In a real scenario, embed Google Maps iframe here -->
    </div>
</section>
@endsection
