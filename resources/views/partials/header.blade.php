<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo Section -->
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_header.png') }}" alt="Springoo Logo" style="max-height: 80px; width: auto; object-fit: contain;">
                </a>
            </div>

            <!-- Navigation Menu -->
            <nav class="main-nav">
                <ul>
                    <li><a href="#">OUR STORY</a></li>
                    <li class="has-dropdown mega-menu-parent">
                        <a href="#">JEWELLERY <span class="arrow">▼</span></a>
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
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">PROMOTIONS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </nav>

            <!-- Gold Price Section -->
            <div class="gold-price-info">
                <div class="gold-icon">
                    <!-- Simple gold bars icon svg or image -->
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8H20V19C20 19.5523 19.5523 20 19 20H5C4.44772 20 4 19.5523 4 19V8Z" fill="#DAA520"/>
                        <path d="M4 8L6.5 4H17.5L20 8H4Z" fill="#F0E68C"/>
                        <path d="M8 8V20" stroke="#B8860B" stroke-width="1"/>
                        <path d="M16 8V20" stroke="#B8860B" stroke-width="1"/>
                        <path d="M12 8V20" stroke="#B8860B" stroke-width="1"/>
                    </svg>
                </div>
                <div class="price-details">
                    <div class="date-label">DATE: 14/01/2026</div> <!-- Dynamic date can be added later -->
                    <div class="price-value">22KT LKR 337,600</div>
                </div>
            </div>
        </div>
    </div>
</header>
