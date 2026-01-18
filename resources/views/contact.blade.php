@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700;900&amp;family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#0a3e35", // Emerald Dark
                        "gold": "#D4AF37", // Metallic Gold
                        "concierge-yellow": "#F0C808", // Vivid Gold from screenshot
                        "concierge-label": "#B89628", // Muted Gold for labels
                        "background-cream": "#FFFCF7", // Very light cream
                        "text-dark": "#1A1A1A",
                    },
                    fontFamily: {
                        "display": ["Noto Serif", "serif"],
                        "sans": ["Noto Sans", "sans-serif"]
                    },
                    boxShadow: {
                        "card": "0 20px 40px -5px rgba(0, 0, 0, 0.05)",
                    }
                },
            },
        }
    </script>
    <style>
        .contact-hero {
            background-image: url('{{ asset('images/contact_banner.png') }}');
        }
        /* Restore Header functionality if Tailwind conflicts */
        .site-header { position: sticky !important; }

        /* Animation Classes */
        .fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        .expand-width { animation: expandWidth 1.5s ease-out forwards; width: 0; }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes expandWidth {
            from { width: 0; opacity: 0; }
            to { width: 100%; opacity: 1; }
        }
    </style>
@endpush

@section('content')
    <!-- Banner (Preserved) -->
    <div class="shop-hero contact-hero relative">
        <div class="container fade-in-up">
            <h1 class="main-heading">Contact Us</h1>
            <p>Our concierge team is at your service for bespoke inquiries and private viewing appointments.</p>
        </div>
        <!-- Animated Golden Line -->
        <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-transparent via-[#D4AF37] to-transparent expand-width"></div>
    </div>

    <!-- Main Content: Concierge Section -->
    <div class="w-full bg-[#FAFAFA] font-sans text-text-dark py-20 px-6">
        <div class="max-w-[1200px] mx-auto">
            <div class="flex flex-col lg:flex-row gap-16 lg:gap-24 items-start">
                
                <!-- Left Side: Contact Details -->
                <div class="w-full lg:w-5/12 pt-10 fade-in-up delay-100">
                    <!-- Decorative Golden Line -->
                    <div class="w-24 h-1 bg-gradient-to-r from-[#D4AF37] to-[#F0C808] mb-6 rounded-full animate-pulse"></div>
                    
                    <div class="flex items-center gap-4 mb-12">
                        <div class="w-1.5 h-12 bg-primary rounded-full"></div>
                        <h2 class="text-4xl font-display font-bold text-gray-900">Contact Our Concierge</h2>
                    </div>

                    <div class="space-y-10">
                        <!-- Address -->
                        <div class="flex items-start gap-6">
                            <span class="material-symbols-outlined text-primary text-3xl mt-1">location_on</span>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-[#B89628] mb-2">Boutique Address</p>
                                <p class="text-lg text-gray-600 font-light leading-relaxed">
                                    No. 119 First Floor,<br>
                                    JJC Mall, Rajagiriya, Sri Lanka
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-6">
                            <span class="material-symbols-outlined text-primary text-3xl mt-1">call</span>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-[#B89628] mb-2">Concierge Phone</p>
                                <p class="text-lg text-gray-600 font-light">+94 76 549 6306</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-6">
                            <span class="material-symbols-outlined text-primary text-3xl mt-1">mail</span>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-[#B89628] mb-2">Email Inquiries</p>
                                <p class="text-lg text-gray-600 font-light">concierge@springoo.lk</p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start gap-6">
                            <span class="material-symbols-outlined text-primary text-3xl mt-1">schedule</span>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-[#B89628] mb-2">Business Hours</p>
                                <p class="text-lg text-gray-600 font-light">Mon - Sat: 10:00 - 19:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Clean White Form Card -->
                <div class="w-full lg:w-7/12 fade-in-up delay-200">
                    <div class="bg-white p-8 md:p-12 rounded-xl shadow-card border border-gray-100">
                        <form action="#" class="space-y-6">
                            <div>
                                <label class="block text-sm font-serif font-bold text-primary mb-2">Full Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors font-light" placeholder="Enter your name">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-serif font-bold text-primary mb-2">Email Address</label>
                                <input type="email" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors font-light" placeholder="example@luxury.com">
                            </div>

                            <div>
                                <label class="block text-sm font-serif font-bold text-primary mb-2">Inquiry Type</label>
                                <select class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors font-light text-gray-600">
                                    <option>General Inquiry</option>
                                    <option>Gold Plating Service</option>
                                    <option>Jewelry Repair</option>
                                    <option>Custom Design</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-serif font-bold text-primary mb-2">Message</label>
                                <textarea rows="4" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors font-light resize-none" placeholder="How can our concierge assist you today?"></textarea>
                            </div>

                            <button type="button" class="group relative w-full overflow-hidden rounded-lg bg-primary py-4 text-white shadow-lg transition-all duration-300 hover:shadow-xl mt-4 border border-primary">
                                <span class="relative z-10 font-display text-lg font-bold uppercase tracking-[0.15em] transition-colors group-hover:text-primary">Send Message</span>
                                <div class="absolute inset-0 -translate-x-full bg-white transition-transform duration-300 group-hover:translate-x-0"></div>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Map Section (Full Width Below) -->
    <div class="w-full h-[500px] relative mt-0">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.85960360777!2d79.88978586977539!3d6.903206600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259881829623b%3A0xe5495535560965e6!2sJJC%20Mall!5e0!3m2!1sen!2slk!4v1705600000000!5m2!1sen!2slk" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <!-- Map Overlay Title -->
         <div class="absolute top-8 left-1/2 -translate-x-1/2 bg-white/90 backdrop-blur-md px-8 py-3 rounded-full shadow-lg">
             <span class="font-bold text-primary flex items-center gap-2"><span class="material-symbols-outlined text-primary">location_on</span> Visit Our Showroom</span>
         </div>
    </div>
@endsection
