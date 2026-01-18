@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&amp;family=Noto+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <!-- Tailwind CSS (Scoped to this page ideally, but using CDN for speed as per user request flow) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#d4b235", // Gold
                        "primary-dark": "#b0932b",
                        "background-light": "#ffffff", // Pure white for pages
                        "surface-light": "#f9f9f9", // Very light grey for sections
                        "text-main": "#1a1a1a", // Dark charcoal
                        "text-muted": "#666666",
                        "card-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Noto Serif", "serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    boxShadow: {
                        "luxury": "0 10px 40px -10px rgba(0,0,0,0.05)",
                        "luxury-hover": "0 20px 50px -10px rgba(0,0,0,0.1)",
                    }
                },
            },
        }
    </script>
    <style>
        .services-hero {
            background-image: url('{{ asset('images/services_banner.png') }}');
        }
        /* Fix for scrollbar if needed, mainly for desktop */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #d4b235; border-radius: 4px; }
        
        /* Ensure Tailwind doesn't conflict with Bootstrap details completely if mixed */
        details > summary { list-style: none; }
        details > summary::-webkit-details-marker { display: none; }
    </style>
@endpush

@section('content')
    <!-- Existing Banner (Preserved) -->
    <div class="shop-hero services-hero">
        <div class="container">
            <h1 class="main-heading">Services</h1>
            <p>Experience our premium jewelry care, customization, and repair services designed to keep your treasured pieces shining forever.</p>
        </div>
    </div>

    <!-- Main Content Wrapper (Tailwind Scoped Context) -->
    <div class="font-body text-text-main bg-background-light">
        
        <!-- Introduction Text -->
        <section class="w-full py-16 px-6 bg-surface-light">
            <div class="max-w-[800px] mx-auto text-center space-y-6">
                <h2 class="text-primary-dark font-display text-3xl md:text-4xl italic">Our Premium Services</h2>
                <p class="text-text-muted text-lg leading-relaxed font-light">
                    At Springoo, we don't just restore jewelry; we resurrect its soul. From our signature gold plating techniques to complete structural reimagination, every service is executed with the reverence of an artist and the precision of a scientist.
                </p>
                <div class="h-px w-24 bg-gradient-to-r from-transparent via-primary to-transparent mx-auto mt-8"></div>
            </div>
        </section>

        <!-- Bento Grid Services -->
        <section class="w-full max-w-[1280px] mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[minmax(300px,auto)]">
                
                <!-- Large Feature Card: Gold Plating -->
                <div class="md:col-span-12 lg:col-span-8 group relative overflow-hidden rounded-xl border border-gray-100 bg-card-light shadow-luxury transition-all duration-500 hover:border-primary/30 hover:shadow-luxury-hover">
                    <!-- Image moved to right or used as subtle bg -->
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 opacity-10" style="background-image: url('{{ asset('images/cat-necklace.png') }}'); filter: grayscale(100%);"></div>
                    
                    <div class="relative z-10 p-8 md:p-12 h-full flex flex-col justify-center items-start max-w-2xl">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center border border-primary/30 mb-6 text-primary-dark">
                            <span class="material-symbols-outlined">water_drop</span>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4 group-hover:text-primary-dark transition-colors">Premium Gold Plating</h3>
                        <p class="text-text-muted text-lg mb-8 leading-relaxed">
                            Experience the pinnacle of luxury with our heavy micron gold plating services. Designed for longevity and brilliance, our process ensures a finish that rivals solid gold, resistant to tarnish and wear for years to come.
                        </p>
                        <a class="inline-flex items-center gap-2 text-primary-dark font-bold tracking-wide uppercase text-sm group-hover:gap-4 transition-all" href="#">
                            Discover the Process <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Medium Vertical Card: Custom Design -->
                <div class="md:col-span-6 lg:col-span-4 group relative overflow-hidden rounded-xl border border-gray-100 bg-card-light shadow-luxury transition-all duration-500 hover:border-primary/30 hover:shadow-luxury-hover flex flex-col">
                    <div class="absolute top-0 right-0 p-8 opacity-5">
                       <span class="material-symbols-outlined text-9xl text-primary">draw</span>
                    </div>
                    <div class="relative z-10 p-8 flex flex-col h-full">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center border border-primary/30 mb-6 text-primary-dark">
                            <span class="material-symbols-outlined">edit</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-gray-900 mb-3">Bespoke Design</h3>
                        <p class="text-text-muted text-base mb-auto leading-relaxed">
                            Collaborate directly with our master artisans. Whether reimagining an heirloom or forging a new legacy, we turn your sketches into tangible reality through 3D modeling.
                        </p>
                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-sm text-text-muted">
                                    <span class="material-symbols-outlined text-primary-dark text-sm">check_circle</span> CAD & 3D Rendering
                                </li>
                                <li class="flex items-center gap-3 text-sm text-text-muted">
                                    <span class="material-symbols-outlined text-primary-dark text-sm">check_circle</span> Gemstone Sourcing
                                </li>
                                <li class="flex items-center gap-3 text-sm text-text-muted">
                                    <span class="material-symbols-outlined text-primary-dark text-sm">check_circle</span> Lost-Wax Casting
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Medium Horizontal Card: Care & Maintenance -->
                <div class="md:col-span-6 lg:col-span-6 group relative overflow-hidden rounded-xl border border-gray-100 bg-card-light shadow-luxury transition-all duration-500 hover:border-primary/30 hover:shadow-luxury-hover">
                     <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 opacity-10" style="background-image: url('{{ asset('images/shop-bangle-1.png') }}'); filter: grayscale(100%);"></div>
                    <div class="relative z-10 p-8 flex flex-col justify-end h-full">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center border border-primary/30 mb-6 text-primary-dark">
                            <span class="material-symbols-outlined">healing</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-gray-900 mb-2">Restoration & Care</h3>
                        <p class="text-text-muted text-base">
                            Ultrasonic cleaning, precise polishing, and structural reinforcement to keep your treasures eternal.
                        </p>
                    </div>
                </div>

                <!-- Medium Horizontal Card: Consultation -->
                <div class="md:col-span-12 lg:col-span-6 group relative overflow-hidden rounded-xl border border-gray-100 bg-[#f8f5e6] shadow-luxury transition-all duration-500 hover:shadow-luxury-hover hover:-translate-y-1">
                    <div class="relative z-10 p-8 flex flex-col md:flex-row items-center justify-between h-full gap-6">
                        <div class="flex flex-col gap-2 text-center md:text-left">
                            <h3 class="text-2xl font-display font-bold text-gray-900">Private Consultation</h3>
                            <p class="text-text-muted font-medium max-w-sm">
                                Not sure what your piece needs? Book a complimentary video assessment with our lead jeweler.
                            </p>
                        </div>
                        <button class="shrink-0 px-6 py-3 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-primary-dark transition-colors">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="w-full max-w-[1000px] mx-auto px-6 pb-24">
            <h2 class="text-2xl font-display text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <details class="group border border-gray-200 rounded-lg bg-white open:border-primary/50 transition-colors shadow-sm">
                    <summary class="flex cursor-pointer list-none items-center justify-between p-6 text-lg font-medium text-gray-800 outline-none">
                        <span>How long does the gold plating last?</span>
                        <span class="transition group-open:rotate-180">
                            <span class="material-symbols-outlined text-primary-dark">expand_more</span>
                        </span>
                    </summary>
                    <div class="group-open:animate-fadeIn px-6 pb-6 text-text-muted leading-relaxed">
                        With proper care, our heavy micron plating can last anywhere from 2 to 5 years for daily wear items like rings, and significantly longer for earrings and necklaces. We offer a 1-year warranty on all plating services.
                    </div>
                </details>
                
                <details class="group border border-gray-200 rounded-lg bg-white open:border-primary/50 transition-colors shadow-sm">
                    <summary class="flex cursor-pointer list-none items-center justify-between p-6 text-lg font-medium text-gray-800 outline-none">
                        <span>Do you work with base metals other than silver?</span>
                        <span class="transition group-open:rotate-180">
                            <span class="material-symbols-outlined text-primary-dark">expand_more</span>
                        </span>
                    </summary>
                    <div class="group-open:animate-fadeIn px-6 pb-6 text-text-muted leading-relaxed">
                        Yes, we specialize in plating onto silver, brass, copper, and even stainless steel. Each base metal requires a specific preparation process which our artisans handle with expert care.
                    </div>
                </details>
                
                 <details class="group border border-gray-200 rounded-lg bg-white open:border-primary/50 transition-colors shadow-sm">
                    <summary class="flex cursor-pointer list-none items-center justify-between p-6 text-lg font-medium text-gray-800 outline-none">
                        <span>Can I ship my jewelry to you?</span>
                        <span class="transition group-open:rotate-180">
                            <span class="material-symbols-outlined text-primary-dark">expand_more</span>
                        </span>
                    </summary>
                    <div class="group-open:animate-fadeIn px-6 pb-6 text-text-muted leading-relaxed">
                        Absolutely. We provide a fully insured, secure shipping kit for all our remote clients. Once we receive your piece, we provide a detailed assessment before any work begins.
                    </div>
                </details>
            </div>
        </section>

    </div>
@endsection
