@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endpush

@section('content')
    <!-- Page Heading -->
    <div class="shop-hero">
        <div class="container">
            <h1 class="main-heading">Botanical Elegance</h1>
            <p>Handcrafted pieces inspired by the delicate textures of the forest floor, designed to bring nature's subtle beauty to your everyday.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container shop-page-wrapper">
        <div class="shop-layout">
            
            <!-- Mobile Filter Toggle -->
            <button id="mobile-filter-toggle" class="btn btn-outline" style="margin-bottom: 20px; display: none; width: 100%; justify-content: space-between; align-items: center;">
                <span>FILTER & SORT</span>
                <i class="bi bi-sliders"></i>
            </button>

            <!-- Sidebar Filters -->
            <aside class="shop-sidebar" id="shop-sidebar">
                <div class="sidebar-header-mobile" style="display: none; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                     <h3 class="font-bold text-lg" style="margin: 0; font-family: var(--font-heading); color: var(--color-primary);">FILTERS</h3>
                     <button id="close-filter-sidebar" style="background: none; border: none; font-size: 1.5rem; color: var(--color-text-main); cursor: pointer;">&times;</button>
                </div>

                <div class="filter-group">
                    <h3 class="font-bold text-lg mb-4 desktop-only-title" style="font-family: var(--font-heading); color: var(--color-primary);">FILTERS</h3>
                    <a href="#" style="font-size: 0.85rem; text-decoration: underline; color: var(--color-text-light);">Clear all</a>
                </div>

                <!-- Collection Filter -->
                <div class="filter-group">
                    <details class="filter-group-details" open>
                        <summary>Collection</summary>
                        <div class="filter-options">
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox" checked>
                                <span>Botanical</span>
                            </label>
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Oceanic</span>
                            </label>
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Celestial</span>
                            </label>
                        </div>
                    </details>
                </div>

                <!-- Metal Filter -->
                <div class="filter-group">
                    <details class="filter-group-details" open>
                        <summary>Metal</summary>
                        <div class="filter-options">
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>18k Gold</span>
                            </label>
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Sterling Silver</span>
                            </label>
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Rose Gold</span>
                            </label>
                        </div>
                    </details>
                </div>

                <!-- Gemstone Filter -->
                <div class="filter-group">
                    <details class="filter-group-details">
                        <summary>Gemstone</summary>
                        <div class="filter-options">
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Emerald</span>
                            </label>
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Pearl</span>
                            </label>
                            <label class="filter-label">
                                <input type="checkbox" class="filter-checkbox">
                                <span>Sapphire</span>
                            </label>
                        </div>
                    </details>
                </div>

                <!-- Price Range -->
                <div class="filter-group">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <span style="font-family: var(--font-body); font-weight: 600; color: var(--color-primary);">Price</span>
                    </div>
                    <div>
                        <input type="range" class="price-range-slider" min="0" max="500000" step="5000">
                        <div class="price-labels">
                            <span>LKR 0</span>
                            <span>LKR 500,000+</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Product Grid Area -->
            <main class="shop-products-main">
                <!-- Sorting & Count -->
                <div class="shop-toolbar">
                    <p class="product-count">Showing 6 products</p>
                    <div class="sort-select-wrapper">
                        <label for="sort" style="font-size: 0.9rem; color: var(--color-text-main); font-weight: 500;">Sort by:</label>
                        <select id="sort" class="sort-select">
                            <option>Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
                        </select>
                    </div>
                </div>

                <!-- Grid -->
                <div class="shop-product-grid">
                    
                    <!-- Product Card 1 -->
                    <a href="{{ route('product.show', ['id' => 1]) }}" class="product-card-shop group">
                        <div class="product-img-wrapper">
                            <span class="product-badge">New</span>
                            <img src="{{ asset('images/shop-earrings.png') }}" alt="Petal Stud Earrings">
                            <button class="add-to-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                        <div class="product-info-shop">
                            <h3 class="product-name">Petal Stud Earrings</h3>
                            <p class="product-meta">18k Gold</p>
                            <p class="product-price">LKR 125,000</p>
                        </div>
                    </a>

                    <!-- Product Card 2 -->
                    <a href="{{ route('product.show', ['id' => 2]) }}" class="product-card-shop group">
                        <div class="product-img-wrapper">
                            <img src="{{ asset('images/shop-bangle-1.png') }}" alt="Willow Branch Bracelet">
                            <button class="add-to-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                        <div class="product-info-shop">
                            <h3 class="product-name">Willow Branch Bracelet</h3>
                            <p class="product-meta">Sterling Silver</p>
                            <p class="product-price">LKR 89,000</p>
                        </div>
                    </a>

                    <!-- Product Card 3 -->
                    <a href="{{ route('product.show', ['id' => 3]) }}" class="product-card-shop group">
                        <div class="product-img-wrapper">
                            <img src="{{ asset('images/shop-bracelet.png') }}" alt="Morning Dew Pendant">
                            <button class="add-to-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                        <div class="product-info-shop">
                            <h3 class="product-name">Morning Dew Pendant</h3>
                            <p class="product-meta">18k Gold, Diamond</p>
                            <p class="product-price">LKR 210,000</p>
                        </div>
                    </a>

                    <!-- Product Card 4 -->
                    <a href="{{ route('product.show', ['id' => 4]) }}" class="product-card-shop group">
                        <div class="product-img-wrapper">
                             <!-- Using category image as fallback/variant -->
                            <img src="{{ asset('images/shop-bangle-2.png') }}" alt="Fern Leaf Ring">
                            <button class="add-to-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                        <div class="product-info-shop">
                            <h3 class="product-name">Fern Leaf Ring</h3>
                            <p class="product-meta">Rose Gold</p>
                            <p class="product-price">LKR 95,000</p>
                        </div>
                    </a>

                    <!-- Product Card 5 -->
                    <a href="{{ route('product.show', ['id' => 5]) }}" class="product-card-shop group">
                        <div class="product-img-wrapper">
                            <img src="{{ asset('images/shop-earrings.png') }}" alt="Luna Hoops" style="filter: hue-rotate(45deg);"> <!-- Slight variation for visual diff -->
                            <button class="add-to-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                        <div class="product-info-shop">
                            <h3 class="product-name">Luna Hoops</h3>
                            <p class="product-meta">Sterling Silver</p>
                            <p class="product-price">LKR 45,000</p>
                        </div>
                    </a>

                    <!-- Product Card 6 -->
                    <a href="{{ route('product.show', ['id' => 6]) }}" class="product-card-shop group">
                        <div class="product-img-wrapper">
                            <span class="product-badge" style="background-color: #333;">Sold Out</span>
                            <img src="{{ asset('images/cat-necklace.png') }}" alt="Forest Emerald Necklace" style="transform: scale(0.8);">
                            <button class="add-to-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                        <div class="product-info-shop">
                            <h3 class="product-name">Forest Emerald Necklace</h3>
                            <p class="product-meta">18k Gold, Emerald</p>
                            <p class="product-price">LKR 320,000</p>
                        </div>
                    </a>

                </div>

                <!-- Load More -->
                <div class="load-more-wrapper">
                    <button class="btn btn-primary">Load More Products</button>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileFilterBtn = document.getElementById('mobile-filter-toggle');
            const closeFilterBtn = document.getElementById('close-filter-sidebar');
            const sidebar = document.getElementById('shop-sidebar');
            // Create overlay element
            const overlay = document.createElement('div');
            overlay.className = 'sidebar-overlay';
            document.body.appendChild(overlay);

            if(mobileFilterBtn) {
                mobileFilterBtn.addEventListener('click', function() {
                    sidebar.classList.add('active');
                    overlay.classList.add('active');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            }

            function closeSidebar() {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            if(closeFilterBtn) {
                closeFilterBtn.addEventListener('click', closeSidebar);
            }

            overlay.addEventListener('click', closeSidebar);
        });
    </script>
@endsection
