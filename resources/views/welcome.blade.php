@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset('images/hero-banner-v3.png') }}');">
        <div class="hero-container">
             <!-- Background image handled in CSS, text overlay here -->
            <div class="hero-text-content">
                <span class="hero-badge">NEW COLLECTION 2026</span>
                <h1 class="hero-title">
                    Eternal Spring<br>
                    <span class="highlight-text">in Every Gem</span>
                </h1>
                <p class="hero-description">
                    Discover the new nature-inspired collection featuring ethically sourced diamonds and emeralds that capture the essence of blooming gardens.
                </p>
                <div class="hero-actions">
                    <a href="#" class="btn btn-primary bg-yellow">Shop the Collection</a>
                    <a href="#" class="btn btn-outline text-white">View Lookbook</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Collections Section -->
    <section class="collections-section">
        <div class="container">
            <div class="section-header">
                <span class="sub-heading">Elegance & Luxury</span>
                <h2 class="main-heading">Our Latest Collections</h2>
            </div>

            <div class="collections-grid">
                <!-- Aura Collection -->
                <div class="collection-card">
                    <div class="collection-image" style="background-image: url('{{ asset('images/collection-aura.png') }}');"></div>
                    <div class="collection-overlay">
                        <div class="collection-logo">
                            <span class="brand-name">Springoo</span>
                        </div>
                        <h3 class="collection-title">AURA</h3>
                        <p class="collection-subtitle">Diamond Collection</p>
                    </div>
                </div>

                <!-- Aadi Fiesta Collection -->
                <div class="collection-card">
                    <div class="collection-image" style="background-image: url('{{ asset('images/collection-aadi.png') }}');"></div>
                    <div class="collection-overlay">
                        <div class="collection-logo">
                            <span class="brand-name">Springoo</span>
                        </div>
                        <h3 class="collection-title collection-title-gold">Aadi <br> <span class="highlight-text">Fiesta</span></h3>
                    </div>
                </div>

                <!-- Forge Collection -->
                <div class="collection-card">
                    <div class="collection-image" style="background-image: url('{{ asset('images/collection-forge.png') }}');"></div>
                    <div class="collection-overlay">
                        <div class="collection-logo">
                            <span class="brand-name">Springoo</span>
                        </div>
                        <h3 class="collection-title">Forge</h3>
                        <p class="collection-subtitle">Collection</p>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>

    <!-- Our Jewellery Section -->
    <section class="our-jewellery-section">
        <div class="container">
            <div class="section-header">
                <span class="sub-heading">Jewellery For Every Occasion</span>
                <!-- Divider Removed -->
                <h2 class="main-heading">Our Jewellery</h2>
            </div>

            <div class="jewellery-grid">
                <!-- Necklace -->
                <div class="category-card">
                    <div class="category-image">
                         <img src="{{ asset('images/cat-necklace.png') }}" alt="Necklaces">
                    </div>
                    <div class="category-info">
                        <h4 class="category-title">Necklaces</h4>
                    </div>
                </div>

                <!-- Chains -->
                <div class="category-card">
                    <div class="category-image">
                         <img src="{{ asset('images/cat-chain.png') }}" alt="Chains">
                    </div>
                    <div class="category-info">
                        <h4 class="category-title">Chains</h4>
                    </div>
                </div>

                <!-- Bangles -->
                <div class="category-card">
                    <div class="category-image">
                         <img src="{{ asset('images/cat-bangle.png') }}" alt="Bangles">
                    </div>
                    <div class="category-info">
                        <h4 class="category-title">Bangles</h4>
                    </div>
                </div>

                <!-- Earrings -->
                <div class="category-card">
                    <div class="category-image">
                         <img src="{{ asset('images/cat-earrings.png') }}" alt="Earrings">
                    </div>
                    <div class="category-info">
                        <h4 class="category-title">Earrings</h4>
                    </div>
                </div>

                <!-- Rings -->
                <div class="category-card">
                    <div class="category-image">
                         <img src="{{ asset('images/cat-ring.png') }}" alt="Rings">
                    </div>
                    <div class="category-info">
                        <h4 class="category-title">Rings</h4>
                    </div>
                </div>

                <!-- Pendants -->
                <div class="category-card">
                    <div class="category-image">
                         <img src="{{ asset('images/cat-pendant.png') }}" alt="Pendants">
                    </div>
                    <div class="category-info">
                        <h4 class="category-title">Pendants</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>

    <!-- Shop Section -->
    <section class="shop-section">
        <div class="container">
            <div class="section-header">
                <span class="sub-heading">Our Products</span>
                <!-- Divider Removed -->
                <h2 class="main-heading">SHOP</h2>
            </div>
            
            <div class="shop-controls">
                <button class="shop-nav-btn prev-btn">&lt;</button>
                <div class="shop-grid-wrapper">
                    <div class="shop-grid">
                        <!-- Product 1 -->
                        <div class="shop-card">
                            <div class="shop-image">
                                <img src="{{ asset('images/shop-earrings.png') }}" alt="Gold Earrings">
                            </div>
                            <div class="shop-info">
                                <span class="product-code">4-T8547</span>
                                <a href="#" class="view-more-btn">View more</a>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="shop-card">
                            <div class="shop-image">
                                <img src="{{ asset('images/shop-bangle-1.png') }}" alt="Gold Bangle">
                            </div>
                            <div class="shop-info">
                                <span class="product-code">M1487</span>
                                <a href="#" class="view-more-btn">View more</a>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="shop-card">
                            <div class="shop-image">
                                <img src="{{ asset('images/shop-bracelet.png') }}" alt="Gold Bracelet">
                            </div>
                            <div class="shop-info">
                                <span class="product-code">2-T4368</span>
                                <a href="#" class="view-more-btn">View more</a>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="shop-card">
                            <div class="shop-image">
                                <img src="{{ asset('images/shop-bangle-2.png') }}" alt="Modern Bangle">
                            </div>
                            <div class="shop-info">
                                <span class="product-code">T3008</span>
                                <a href="#" class="view-more-btn">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="shop-nav-btn next-btn">&gt;</button>
            </div>

            <div class="shop-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>

    <!-- Editorial Section -->
    <section class="editorial-section">
        <div class="editorial-container">
            <div class="editorial-content">
                <span class="sub-heading editorial-label">Editorial</span>
                <h2 class="main-heading editorial-title">The Spring Collection</h2>
                <p class="editorial-description">
                    Inspired by the first bloom of the season, our newest collection captures the delicate beauty of nature in eternal form. Handcrafted with precision and passion.
                </p>

                <div class="editorial-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icon-leaf.png') }}" alt="Leaf Icon">
                        </div>
                        <div class="feature-text">
                            <h3>Ethically Sourced</h3>
                            <p>Conflict-free diamonds and recycled precious metals.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icon-artisan.png') }}" alt="Artisan Icon">
                        </div>
                        <div class="feature-text">
                            <h3>Artisan Design</h3>
                            <p>Each piece is individually crafted by master jewelers.</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="btn btn-outline editorial-btn">Explore the Lookbook</a>
            </div>
            
            <div class="editorial-image">
                <img src="{{ asset('images/editorial-spring.png') }}" alt="Spring Collection Model">
            </div>
        </div>
    </section>
    </section>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select all elements that should animate on scroll
            // We can add the class 'animate-on-scroll' to sections or cards via JS or manually.
            // Let's add it to major sections automatically.
            const sections = document.querySelectorAll('section, .collection-card, .category-card, .shop-card, .editorial-content, .footer-col');
            
            sections.forEach(el => {
                el.classList.add('animate-on-scroll');
            });

            const observerOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        // Add staggered delay based on index within visual group if possible,
                        // but simple visibility is fine for now.
                        setTimeout(() => {
                            entry.target.classList.add('is-visible');
                        }, 100); 
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
@endsection
