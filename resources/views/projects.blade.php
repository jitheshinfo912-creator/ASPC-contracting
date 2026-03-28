@extends('layout')
@section('title', 'Portfolio & Projects')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1541888081622-1eb1db37aa15?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
    <div class="container header-content">
        <h1>Featured Projects</h1>
        <p>Showcasing our precision, scale, and craftsmanship.</p>
    </div>
</div>

<section class="section projects-page bg-light">
    <div class="container">
        
        <!-- Project Filters Setup -->
        <div class="project-filters text-center mb-4">
            <button class="filter-btn active">All Projects</button>
            <button class="filter-btn">Commercial</button>
            <button class="filter-btn">Industrial</button>
            <button class="filter-btn">Civil</button>
        </div>

        <div class="projects-grid">
            <!-- Project Item 1 -->
            <div class="project-card">
                <div class="project-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80" alt="Skyline Commercial Tower">
                    <div class="project-overlay">
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Commercial</span>
                    <h3>Skyline Commercial Tower</h3>
                    <p>Downtown Metropolitan Area</p>
                </div>
            </div>

            <!-- Project Item 2 -->
            <div class="project-card">
                <div class="project-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?auto=format&fit=crop&w=600&q=80" alt="Cross River Bridge">
                    <div class="project-overlay">
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Civil Engineering</span>
                    <h3>Cross River Bridge Expansion</h3>
                    <p>State Highway Department</p>
                </div>
            </div>

            <!-- Project Item 3 -->
            <div class="project-card">
                <div class="project-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?auto=format&fit=crop&w=600&q=80" alt="Global Logistics Hub">
                    <div class="project-overlay">
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Industrial</span>
                    <h3>Global Logistics Hub</h3>
                    <p>Port Authority Zone</p>
                </div>
            </div>

            <!-- Project Item 4 -->
            <div class="project-card">
                <div class="project-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" alt="Tech Campus HQ">
                    <div class="project-overlay">
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Commercial</span>
                    <h3>Tech Campus Headquarters</h3>
                    <p>Silicon Valley Sector</p>
                </div>
            </div>

            <!-- Project Item 5 -->
            <div class="project-card">
                <div class="project-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=600&q=80" alt="Water Treatment Plant">
                    <div class="project-overlay">
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Civil</span>
                    <h3>Municipal Water Plant</h3>
                    <p>City Infrastructure Project</p>
                </div>
            </div>

            <!-- Project Item 6 -->
            <div class="project-card">
                <div class="project-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80" alt="Auto Manufacturing Plant">
                    <div class="project-overlay">
                        <a href="#" class="view-btn">View Details</a>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Industrial</span>
                    <h3>Next-Gen Auto Works</h3>
                    <p>Automotive Industrial Park</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
