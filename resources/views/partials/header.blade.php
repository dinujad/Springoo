<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo Section -->
            <div class="logo">
                <a href="{{ url('/') }}">
                    <div class="logo-container">
                        <!-- Simplified logo presentation: Icon + Text -->
                        <span class="logo-text">SPRINGOO</span>
                    </div>
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
                                    <div class="mega-column">
                                        <h4>Categories</h4>
                                        <ul>
                                            <li><a href="#">Necklaces</a></li>
                                            <li><a href="#">Rings</a></li>
                                            <li><a href="#">Bangles</a></li>
                                            <li><a href="#">Earrings</a></li>
                                            <li><a href="#">Bracelets</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4>Collections</h4>
                                        <ul>
                                            <li><a href="#">Bridal</a></li>
                                            <li><a href="#">Casual Wear</a></li>
                                            <li><a href="#">Gift Ideas</a></li>
                                            <li><a href="#">New Arrivals</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-column featured-image">
                                        <!-- Placeholder for a featured image in the menu -->
                                        <div style="width: 100%; height: 150px; background-color: #f0e68c; display: flex; align-items: center; justify-content: center; color: #b8860b;">
                                            Featured Image
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
