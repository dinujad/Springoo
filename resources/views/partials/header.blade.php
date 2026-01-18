<header class="site-header">
    <div class="top-header text-white text-sm py-2 bg-primary"> 
        <div class="container mx-auto px-4">
            <div class="top-header-inner flex justify-between items-center h-full">
                <!-- Top Left: Phone Number -->
                <div class="top-left flex items-center gap-2">
                     <i class="bi bi-telephone-fill text-gold text-xs"></i>
                     <span class="text-white text-xs font-medium tracking-wide">076 549 6306</span>
                </div>

                <!-- Top Right: Social Icons -->
                <div class="top-socials flex items-center gap-4">
                    <a href="https://www.facebook.com/springoocmb/" target="_blank" class="text-white hover:text-gold transition-colors text-xs">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/springoo.lk/" target="_blank" class="text-white hover:text-gold transition-colors text-xs">
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
                        <div class="mega-menu absolute top-full left-0 w-full bg-white/95 backdrop-blur-md shadow-2xl border-t border-gold/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top z-50">
                            <div class="container mx-auto px-8 py-6">
                                <div class="flex justify-between gap-10">
                                    
                                    <!-- Col 1: Collections (Clean List) -->
                                    <div class="w-[28%] border-r border-gray-100/50 pr-6">
                                        <h3 class="font-display text-[10px] font-bold text-gray-400 mb-4 uppercase tracking-[0.2em]">Collections</h3>
                                        <div class="space-y-2">
                                            <a href="#" class="flex items-center gap-4 group/item py-2 px-2 hover:bg-gray-50 rounded-lg transition-all duration-300">
                                                <div class="w-8 h-8 bg-white rounded-full shadow-sm flex items-center justify-center group-hover/item:shadow-md group-hover/item:scale-105 transition-all">
                                                    <img src="{{ asset('images/cat-necklace.png') }}" class="w-3.5 h-3.5 object-contain filter sepia(1) opacity-80 group-hover/item:opacity-100" alt="Necklaces">
                                                </div>
                                                <span class="font-display text-xs font-medium text-gray-600 group-hover/item:text-primary group-hover/item:translate-x-1 transition-all">Necklaces</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-4 group/item py-2 px-2 hover:bg-gray-50 rounded-lg transition-all duration-300">
                                                <div class="w-8 h-8 bg-white rounded-full shadow-sm flex items-center justify-center group-hover/item:shadow-md group-hover/item:scale-105 transition-all">
                                                    <img src="{{ asset('images/cat-chain.png') }}" class="w-3.5 h-3.5 object-contain filter sepia(1) opacity-80 group-hover/item:opacity-100" alt="Chains">
                                                </div>
                                                <span class="font-display text-xs font-medium text-gray-600 group-hover/item:text-primary group-hover/item:translate-x-1 transition-all">Chains</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-4 group/item py-2 px-2 hover:bg-gray-50 rounded-lg transition-all duration-300">
                                                <div class="w-8 h-8 bg-white rounded-full shadow-sm flex items-center justify-center group-hover/item:shadow-md group-hover/item:scale-105 transition-all">
                                                    <img src="{{ asset('images/cat-pendant.png') }}" class="w-3.5 h-3.5 object-contain filter sepia(1) opacity-80 group-hover/item:opacity-100" alt="Pendants">
                                                </div>
                                                <span class="font-display text-xs font-medium text-gray-600 group-hover/item:text-primary group-hover/item:translate-x-1 transition-all">Pendants</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-4 group/item py-2 px-2 hover:bg-gray-50 rounded-lg transition-all duration-300">
                                                <div class="w-8 h-8 bg-white rounded-full shadow-sm flex items-center justify-center group-hover/item:shadow-md group-hover/item:scale-105 transition-all">
                                                    <img src="{{ asset('images/cat-bangle.png') }}" class="w-3.5 h-3.5 object-contain filter sepia(1) opacity-80 group-hover/item:opacity-100" alt="Bangles">
                                                </div>
                                                <span class="font-display text-xs font-medium text-gray-600 group-hover/item:text-primary group-hover/item:translate-x-1 transition-all">Bangles</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-4 group/item py-2 px-2 hover:bg-gray-50 rounded-lg transition-all duration-300">
                                                <div class="w-8 h-8 bg-white rounded-full shadow-sm flex items-center justify-center group-hover/item:shadow-md group-hover/item:scale-105 transition-all">
                                                    <img src="{{ asset('images/cat-earring.png') }}" class="w-3.5 h-3.5 object-contain filter sepia(1) opacity-80 group-hover/item:opacity-100" alt="Earrings">
                                                </div>
                                                <span class="font-display text-xs font-medium text-gray-600 group-hover/item:text-primary group-hover/item:translate-x-1 transition-all">Earrings</span>
                                            </a>
                                            <a href="#" class="flex items-center gap-4 group/item py-2 px-2 hover:bg-gray-50 rounded-lg transition-all duration-300">
                                                <div class="w-8 h-8 bg-white rounded-full shadow-sm flex items-center justify-center group-hover/item:shadow-md group-hover/item:scale-105 transition-all">
                                                    <img src="{{ asset('images/cat-ring.png') }}" class="w-3.5 h-3.5 object-contain filter sepia(1) opacity-80 group-hover/item:opacity-100" alt="Rings">
                                                </div>
                                                <span class="font-display text-xs font-medium text-gray-600 group-hover/item:text-primary group-hover/item:translate-x-1 transition-all">Rings</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Col 2: New Arrivals (Borderless Grid) -->
                                    <div class="w-[42%] border-r border-gray-100/50 pr-6">
                                        <h3 class="font-display text-[10px] font-bold text-gray-400 mb-4 uppercase tracking-[0.2em] flex justify-between items-center">
                                            <span>New Arrivals</span>
                                            <a href="#" class="text-gold hover:text-primary transition-colors text-[9px] tracking-wider">View All</a>
                                        </h3>
                                        <div class="grid grid-cols-4 gap-4">
                                            <div class="group cursor-pointer">
                                                <div class="bg-gray-50 rounded-lg p-2 mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                                    <img src="{{ asset('images/shop-bangle-1.png') }}" class="w-full h-12 object-contain mix-blend-multiply" alt="T3008">
                                                </div>
                                                <div class="text-center">
                                                    <span class="text-[9px] font-bold text-gray-400 group-hover:text-primary transition-colors block tracking-wide">T3008</span>
                                                </div>
                                            </div>
                                            <div class="group cursor-pointer">
                                                <div class="bg-gray-50 rounded-lg p-2 mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                                    <img src="{{ asset('images/shop-bangle-2.png') }}" class="w-full h-12 object-contain mix-blend-multiply" alt="S2844">
                                                </div>
                                                <div class="text-center">
                                                    <span class="text-[9px] font-bold text-gray-400 group-hover:text-primary transition-colors block tracking-wide">S2844</span>
                                                </div>
                                            </div>
                                            <div class="group cursor-pointer">
                                                <div class="bg-gray-50 rounded-lg p-2 mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                                    <img src="{{ asset('images/shop-bracelet.png') }}" class="w-full h-12 object-contain mix-blend-multiply" alt="T3422">
                                                </div>
                                                <div class="text-center">
                                                    <span class="text-[9px] font-bold text-gray-400 group-hover:text-primary transition-colors block tracking-wide">T3422</span>
                                                </div>
                                            </div>
                                            <div class="group cursor-pointer">
                                                <div class="bg-gray-50 rounded-lg p-2 mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                                    <img src="{{ asset('images/shop-earrings.png') }}" class="w-full h-12 object-contain mix-blend-multiply" alt="K4066">
                                                </div>
                                                <div class="text-center">
                                                    <span class="text-[9px] font-bold text-gray-400 group-hover:text-primary transition-colors block tracking-wide">K4066</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Col 3: Editorial Feature -->
                                    <div class="w-[30%]">
                                         <div class="h-full w-full relative group overflow-hidden rounded-lg">
                                            <img src="{{ asset('images/collection-aura.png') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Featured">
                                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black/80 to-transparent">
                                                 <span class="text-gold text-[8px] font-bold uppercase tracking-[0.2em] mb-1 block">Collection</span>
                                                 <h4 class="text-white font-display text-sm tracking-wide mb-2">Aura Elegance</h4>
                                                 <a href="#" class="inline-flex items-center gap-1 text-[9px] text-white/90 hover:text-white transition-colors group/link">
                                                     Shop Collection <i class="bi bi-arrow-right text-[8px] group-hover/link:translate-x-0.5 transition-transform"></i>
                                                 </a>
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
            <div class="header-icons flex items-center gap-4">
                <a href="{{ route('my-account') }}" class="w-10 h-10 rounded-full flex items-center justify-center text-primary hover:bg-white hover:text-gold hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group" title="My Account">
                    <i class="bi bi-person text-xl group-hover:scale-110 transition-transform"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center text-primary hover:bg-white hover:text-gold hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group" title="Wishlist">
                    <i class="bi bi-heart text-lg group-hover:scale-110 transition-transform"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center text-primary hover:bg-white hover:text-gold hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group relative" title="Cart">
                    <i class="bi bi-bag text-rg group-hover:scale-110 transition-transform"></i>
                    <span class="absolute top-1 right-1 bg-gold text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-md animate-pulse">0</span>
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
