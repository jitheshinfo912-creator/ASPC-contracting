<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ASPC BUILDING CONTRACTING L.L.C') | Building Your Future</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="navbar">
        <div class="container navbar-container">
            <a href="/" class="brand-logo">
                <span class="logo-accent">ASPC BUILDING</span> CONTRACTING L.L.C
            </a>
            
            <nav class="nav-menu">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About Us</a>
                <a href="/services" class="nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a>
                <a href="/projects" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">Projects</a>
                <a href="/contact" class="nav-cta">Get a Quote</a>
            </nav>
            
            <button class="menu-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-container">
            <div class="footer-brand">
                <h3 class="footer-logo"><span class="logo-accent">ASPC BUILDING</span> CONTRACTING L.L.C</h3>
                <p>Building tomorrow's infrastructure today. We deliver quality, reliability, and excellence in every project.</p>
            </div>
            
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/projects">Portfolio</a></li>
                </ul>
            </div>
            
            <div class="footer-contact">
                <h4>Contact Info</h4>
                <p>123 Industrial Parkway<br>Building Block, NY 10001</p>
                <p>Phone: +971 552769485</p>
                <p>Email: info@aspcuae.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} ASPC BUILDING CONTRACTING L.L.C. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple mobile menu toggle
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('.nav-menu');
            
            if (menuToggle && navMenu) {
                menuToggle.addEventListener('click', () => {
                    menuToggle.classList.toggle('active');
                    navMenu.classList.toggle('active');
                });
            }

            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>
</html>
