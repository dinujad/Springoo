<header class="site-header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-inner">
                <div class="top-contact">
                    <a href="tel:+94765496306" style="color: white; display: flex; align-items: center; gap: 8px; font-size: 0.9rem;">
                        <i class="bi bi-telephone-fill"></i>
                        <span>076 549 6306</span>
                    </a>
                </div>
                <div class="top-center">
                    <span class="shine-text">Exclusive Gold plated jewellery</span>
                </div>
                <div class="top-socials">
                    <a href="https://www.facebook.com/springoocmb/" target="_blank" class="top-social-icon">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/springoo.lk/" target="_blank" class="top-social-icon">
                         <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <!-- Logo Section -->
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_header.png') }}" alt="Springoo Logo" style="max-height: 80px; width: auto; object-fit: contain;">
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <!-- Navigation Menu -->
            <nav class="main-nav">
                <ul>
                    <li><a href="#">OUR STORY</a></li>
                    <li class="has-dropdown mega-menu-parent">
                        <a href="{{ route('shop') }}">JEWELLERY <span class="arrow">▼</span></a>
                        <!-- Mega Menu Structure -->
                        <div class="mega-menu">
                            <div class="container">
                                <div class="mega-menu-inner">
                                    
                                    <!-- Col 1: Categories -->
                                    <div class="mega-column category-column">
                                        <h4 class="mega-heading">OUR JEWELLERY</h4>
                                        <div class="mega-category-grid">
                                            <a href="#" class="mega-cat-item">
                                                <img src="{{ asset('images/cat-necklace.png') }}" class="cat-icon-small" alt="Necklaces">
                                                <span>Necklaces</span>
                                            </a>
                                            <a href="#" class="mega-cat-item">
                                                <img src="{{ asset('images/cat-chain.png') }}" class="cat-icon-small" alt="Chains">
                                                <span>Chains</span>
                                            </a>
                                            <a href="#" class="mega-cat-item">
                                                <img src="{{ asset('images/cat-pendant.png') }}" class="cat-icon-small" alt="Pendants">
                                                <span>Pendants</span>
                                            </a>
                                            <a href="#" class="mega-cat-item">
                                                <img src="{{ asset('images/cat-bangle.png') }}" class="cat-icon-small" alt="Bangles">
                                                <span>Bangles</span>
                                            </a>
                                            <a href="#" class="mega-cat-item">
                                                <img src="{{ asset('images/cat-earring.png') }}" class="cat-icon-small" alt="Earrings">
                                                <span>Earrings</span>
                                            </a>
                                            <a href="#" class="mega-cat-item">
                                                <img src="{{ asset('images/cat-ring.png') }}" class="cat-icon-small" alt="Rings">
                                                <span>Rings</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Col 2: Latest Products -->
                                    <div class="mega-column latest-column">
                                        <h4 class="mega-heading">LATEST PRODUCTS</h4>
                                        <div class="mega-product-grid">
                                            <div class="mega-prod-item">
                                                <div class="mega-prod-img">
                                                    <img src="{{ asset('images/shop-earrings.png') }}" alt="Product">
                                                </div>
                                                <span class="mega-prod-code">K4156</span>
                                            </div>
                                            <div class="mega-prod-item">
                                                <div class="mega-prod-img">
                                                    <img src="{{ asset('images/shop-bangle-1.png') }}" alt="Product">
                                                </div>
                                                <span class="mega-prod-code">T5756</span>
                                            </div>
                                            <div class="mega-prod-item">
                                                <div class="mega-prod-img">
                                                    <img src="{{ asset('images/shop-bracelet.png') }}" alt="Product">
                                                </div>
                                                <span class="mega-prod-code">M598</span>
                                            </div>
                                            <div class="mega-prod-item">
                                                <div class="mega-prod-img">
                                                    <img src="{{ asset('images/shop-bangle-2.png') }}" alt="Product">
                                                </div>
                                                <span class="mega-prod-code">D9921</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Col 3: Featured Image -->
                                    <div class="mega-column featured-column">
                                        <div class="mega-featured-img">
                                            <img src="{{ asset('images/collection-aura.png') }}" alt="Featured Collection">
                                            <div class="mega-featured-overlay">
                                                <span>New Collection</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
<li><a href="{{ route('services') }}">SERVICES</a></li>
                    <li><a href="#">PROMOTIONS</a></li>
<li><a href="{{ route('contact') }}">CONTACT US</a></li>
                </ul>
            </nav>

            <!-- Contact Number Section -->
            <!-- Header Actions (Account, Wishlist, Cart) -->
            <div class="header-actions">
                <a href="{{ route('auth') }}" class="action-btn" title="My Account">
                    <i class="bi bi-person"></i>
                </a>
                <a href="#" class="action-btn" title="Wishlist">
                    <i class="bi bi-heart"></i>
                </a>
                <a href="#" class="action-btn" title="Shopping Cart">
                    <i class="bi bi-bag"></i>
                    <span class="cart-count">0</span>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.querySelector('.mobile-menu-toggle');
        const nav = document.querySelector('.main-nav');
        
        if(toggleBtn && nav) {
            toggleBtn.addEventListener('click', function() {
                nav.classList.toggle('active');
            });
        }
    });
</script>
