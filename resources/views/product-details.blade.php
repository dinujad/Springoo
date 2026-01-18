@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}"> <!-- Reusing card styles for related products -->
@endpush

@section('content')
<div class="product-page-wrapper container">
    <!-- Breadcrumbs -->
    <nav class="breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="separator">/</span>
        <a href="{{ route('shop') }}">{{ $product['category'] }}</a>
        <span class="separator">/</span>
        <span class="current">{{ $product['name'] }}</span>
    </nav>

    <div class="product-details-container">
        <!-- Left: Gallery -->
        <div class="product-gallery">
            <div class="main-image-wrapper">
                <span class="product-badge badge-new" style="position: absolute; top: 20px; left: 20px; z-index: 2;">Best Seller</span>
                <img id="mainImage" src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
            </div>
            <div class="gallery-thumbs">
                <div class="thumb-item active" onclick="changeImage(this, '{{ asset('images/' . $product['image']) }}')">
                    <img src="{{ asset('images/' . $product['image']) }}" alt="View 1">
                </div>
                <!-- Simulating other views with same image for now or placeholders if available -->
                <div class="thumb-item" onclick="changeImage(this, '{{ asset('images/' . $product['image']) }}')">
                    <img src="{{ asset('images/' . $product['image']) }}" style="filter: brightness(0.95);" alt="View 2">
                </div>
                <div class="thumb-item" onclick="changeImage(this, '{{ asset('images/model-1.png') }}')">
                    <img src="{{ asset('images/model-1.png') }}" alt="Model View">
                </div>
                <!-- Video Placeholder -->
                <div class="thumb-item" style="display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #ccc;">
                    <i class="bi bi-play-circle"></i>
                </div>
            </div>
        </div>

        <!-- Right: Details -->
        <div class="product-info-sticky">
            <div class="product-badges">
                <!-- Badges can go here -->
            </div>

            <h1 class="product-title">{{ $product['name'] }}</h1>

            <div class="product-price-row">
                <div class="price">LKR {{ $product['price'] }}</div>
                <div class="reviews-summary">
                    <div class="stars">
                        @for($i=0; $i<5; $i++)
                            @if($i < floor($product['rating']))
                                <i class="bi bi-star-fill"></i>
                            @elseif($i < $product['rating'])
                                <i class="bi bi-star-half"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                        @endfor
                    </div>
                    <span class="review-count">({{ $product['reviews'] }} Reviews)</span>
                </div>
            </div>

            <div class="product-description-short">
                <p>{{ $product['description'] }}</p>
            </div>

            <!-- Options -->
            <div class="product-options">
                <!-- Metal -->
                <div class="option-group">
                    <span class="option-label">Metal: {{ $product['metal'] }}</span>
                    <div class="metal-buttons">
                        <div class="metal-btn active">
                            <span class="color-dot" style="background-color: #E6C200;"></span>
                            {{ $product['metal'] }}
                        </div>
                        <div class="metal-btn">
                            <span class="color-dot" style="background-color: #E5E4E2;"></span>
                            Platinum
                        </div>
                    </div>
                </div>

                <!-- Size -->
                <div class="option-group">
                    <div style="display: flex; justify-content: space-between;">
                        <span class="option-label">Ring Size</span>
                        <a href="#" style="font-size: 0.8rem; text-decoration: underline; color: var(--color-text-light);">Size Guide</a>
                    </div>
                    <div class="size-grid">
                        <div class="size-btn">4</div>
                        <div class="size-btn">5</div>
                        <div class="size-btn active">6</div>
                        <div class="size-btn">7</div>
                        <div class="size-btn">8</div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="product-actions">
                <button class="btn-add-cart">
                    <i class="bi bi-bag"></i> Add to Bag
                </button>
                <button class="btn-icon-only" title="Add to Wishlist">
                    <i class="bi bi-heart"></i>
                </button>
                <button class="btn-icon-only" title="Share">
                    <i class="bi bi-share"></i>
                </button>
            </div>

            <div class="trust-badges">
                <div class="trust-item">
                    <i class="bi bi-truck"></i> Free Shipping
                </div>
                <div class="trust-item">
                    <i class="bi bi-shield-check"></i> Lifetime Warranty
                </div>
                <div class="trust-item">
                    <i class="bi bi-arrow-return-left"></i> 30-Day Returns
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs Section -->
    <div class="product-tabs-section">
        <div class="tabs-nav">
            <button class="tab-btn active" onclick="openTab(event, 'desc')">Description</button>
            <button class="tab-btn" onclick="openTab(event, 'details')">Details & Materials</button>
            <button class="tab-btn" onclick="openTab(event, 'reviews')">Reviews ({{ $product['reviews'] }})</button>
        </div>

        <div id="desc" class="tab-content active">
            <div class="bg-content-box description-text">
                <p>{{ $product['description'] }}</p>
                <p>Embodying the grace of nature, the {{ $product['name'] }} is more than just jewelry—it’s a wearable work of art. Each detail is meticulously shaped to reflect light from every angle, creating a dazzling display of brilliance.</p>
                <p>Perfect for special occasions or everyday elegance. The materials are ethically sourced, ensuring the highest quality and provenance.</p>
            </div>
        </div>

        <div id="details" class="tab-content">
            <div class="bg-content-box description-text">
                <ul style="list-style: disc; padding-left: 20px;">
                    <li><strong>Material:</strong> {{ $product['metal'] }}</li>
                    <li><strong>Gemstone:</strong> Premium Quality</li>
                    <li><strong>Origin:</strong> Handcrafted in our Artisan Atelier</li>
                </ul>
            </div>
        </div>

        <div id="reviews" class="tab-content">
            <div class="bg-content-box description-text">
                <p><em>"Absolutely stunning! The details are even more incredible in person." - Sarah J.</em></p>
                <br>
                <p><em>"I love my {{ $product['name'] }}. The packaging was also very luxurious." - Michael T.</em></p>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="related-products-section">
        <h2 class="section-title">You May Also Like</h2>
        
        <div class="shop-product-grid" style="grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));">
            @foreach($related as $relId => $relProduct)
            <!-- Related Card -->
            <a href="{{ route('product.show', ['id' => $relId]) }}" class="product-card-shop group">
                <div class="product-img-wrapper">
                    <img src="{{ asset('images/' . $relProduct['image']) }}" alt="{{ $relProduct['name'] }}">
                    <button class="add-to-cart-btn"><i class="bi bi-cart-plus"></i></button>
                </div>
                <div class="product-info-shop">
                    <h3 class="product-name">{{ $relProduct['name'] }}</h3>
                    <p class="product-price">LKR {{ $relProduct['price'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    function changeImage(thumb, src) {
        document.getElementById('mainImage').src = src;
        // Update active class
        document.querySelectorAll('.thumb-item').forEach(el => el.classList.remove('active'));
        thumb.classList.add('active');
    }

    function openTab(evt, tabName) {
        // Hide all tabs
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove('active');
        }

        // Remove active from buttons
        tablinks = document.getElementsByClassName("tab-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove('active');
        }

        // Show current tab and add active to button
        document.getElementById(tabName).classList.add('active');
        evt.currentTarget.classList.add('active');
    }
</script>
@endsection
