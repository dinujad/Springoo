<header class="site-header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-inner flex justify-between items-center h-full">
                <!-- Top Left: Phone Number -->
                <div class="top-left flex items-center gap-2">
                     <i class="bi bi-telephone-fill text-gold text-xs"></i>
                     <span class="text-white text-xs font-medium tracking-wide">076 549 6306</span>
                </div>

                <!-- Top Center: Removed Promo (Empty or Spacer) -->
                <div class="top-center"></div>

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
                        <!-- Mega Menu Structure -->
                        <!-- Mega Menu Structure -->
                        <!-- Mega Menu Structure -->
                        <div class="mega-menu absolute top-full left-0 w-full bg-white shadow-2xl border-t border-gold/20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top z-50">
                            <div class="container mx-auto px-6 py-6">
                                <div class="flex justify-between">
                                    
                                    <!-- Col 1: Our Jewellery -->
                                    <div class="w-[30%]">
                                        <h3 class="font-display text-lg text-primary mb-5 uppercase tracking-widest">Our Jewellery</h3>
                                        <div class="grid grid-cols-2 gap-y-4 gap-x-2">
                                            <a href="#" class="flex items-center gap-2 group">
                                                <img src="{{ asset('images/cat-necklace.png') }}" class="w-5 h-5 object-contain filter sepia(1) hue-rotate-15 contrast-125" alt="Necklaces">
                                                <span class="font-display text-sm text-gray-700 group-hover:text-primary transition-colors">Necklaces</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-2 group">
                                                <img src="{{ asset('images/cat-chain.png') }}" class="w-5 h-5 object-contain filter sepia(1) hue-rotate-15 contrast-125" alt="Chains">
                                                <span class="font-display text-sm text-gray-700 group-hover:text-primary transition-colors">Chains</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-2 group">
                                                <img src="{{ asset('images/cat-pendant.png') }}" class="w-5 h-5 object-contain filter sepia(1) hue-rotate-15 contrast-125" alt="Pendants">
                                                <span class="font-display text-sm text-gray-700 group-hover:text-primary transition-colors">Pendants</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-2 group">
                                                <img src="{{ asset('images/cat-bangle.png') }}" class="w-5 h-5 object-contain filter sepia(1) hue-rotate-15 contrast-125" alt="Bangles">
                                                <span class="font-display text-sm text-gray-700 group-hover:text-primary transition-colors">Bangles</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-2 group">
                                                <img src="{{ asset('images/cat-earring.png') }}" class="w-5 h-5 object-contain filter sepia(1) hue-rotate-15 contrast-125" alt="Earrings">
                                                <span class="font-display text-sm text-gray-700 group-hover:text-primary transition-colors">Earrings</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-2 group">
                                                <img src="{{ asset('images/cat-ring.png') }}" class="w-5 h-5 object-contain filter sepia(1) hue-rotate-15 contrast-125" alt="Rings">
                                                <span class="font-display text-sm text-gray-700 group-hover:text-primary transition-colors">Rings</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Col 2: Latest Products -->
                                    <div class="w-[35%] px-4">
                                        <h3 class="font-display text-lg text-primary mb-5 uppercase tracking-widest">Latest Products</h3>
                                        <div class="grid grid-cols-4 gap-3">
                                            <div class="text-center group cursor-pointer">
                                                <div class="border border-gray-100 p-1.5 mb-2 bg-white shadow-sm group-hover:shadow-md transition-shadow">
                                                    <img src="{{ asset('images/shop-bangle-1.png') }}" class="w-full h-full object-contain aspect-square" alt="T3008">
                                                </div>
                                                <span class="text-[10px] font-bold text-gray-500 group-hover:text-primary">T3008</span>
                                            </div>
                                            <div class="text-center group cursor-pointer">
                                                <div class="border border-gray-100 p-1.5 mb-2 bg-white shadow-sm group-hover:shadow-md transition-shadow">
                                                    <img src="{{ asset('images/shop-bangle-2.png') }}" class="w-full h-full object-contain aspect-square" alt="S2844">
                                                </div>
                                                <span class="text-[10px] font-bold text-gray-500 group-hover:text-primary">S2844</span>
                                            </div>
                                            <div class="text-center group cursor-pointer">
                                                <div class="border border-gray-100 p-1.5 mb-2 bg-white shadow-sm group-hover:shadow-md transition-shadow">
                                                    <img src="{{ asset('images/shop-bracelet.png') }}" class="w-full h-full object-contain aspect-square" alt="T3422">
                                                </div>
                                                <span class="text-[10px] font-bold text-gray-500 group-hover:text-primary">T3422</span>
                                            </div>
                                            <div class="text-center group cursor-pointer">
                                                <div class="border border-gray-100 p-1.5 mb-2 bg-white shadow-sm group-hover:shadow-md transition-shadow">
                                                    <img src="{{ asset('images/shop-earrings.png') }}" class="w-full h-full object-contain aspect-square" alt="K4066">
                                                </div>
                                                <span class="text-[10px] font-bold text-gray-500 group-hover:text-primary">K4066</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Col 3: Feature Image -->
                                    <div class="w-[25%]">
                                         <div class="h-44 w-full relative group overflow-hidden rounded-md">
                                            <img src="{{ asset('images/collection-aura.png') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Featured">
                                            <div class="absolute top-3 left-3">
                                                 <span class="text-white font-display text-sm tracking-widest text-shadow drop-shadow-md">SPRINGOO</span>
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

            <!-- Header Icons (Account, Wishlist, Cart) -->
            <div class="header-icons flex items-center gap-6">
                <a href="#" class="group flex flex-col items-center justify-center text-primary hover:text-gold transition-colors">
                    <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform">person</span>
                </a>
                <a href="#" class="group flex flex-col items-center justify-center text-primary hover:text-gold transition-colors">
                    <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform">favorite</span>
                </a>
                <a href="#" class="group flex flex-col items-center justify-center text-primary hover:text-gold transition-colors relative">
                    <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform">shopping_cart</span>
                    <span class="absolute -top-1 -right-2 bg-gold text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-sm">0</span>
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
