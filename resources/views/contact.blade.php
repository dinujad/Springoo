@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#0a3e35", // Emerald Dark
                        "gold": "#C9A961", // Luxury Gold
                        "background-light": "#ffffff",
                        "surface-light": "#fcfbf9",
                        "text-main": "#0a3e35",
                        "light-gold": "rgba(201, 169, 97, 0.1)",
                    },
                    fontFamily: {
                        "display": ["Noto Serif", "serif"],
                        "sans": ["Noto Sans", "sans-serif"]
                    },
                    backgroundImage: {
                        'shimmer': 'linear-gradient(45deg, rgba(255,255,255,0) 40%, rgba(201,169,97,0.2) 50%, rgba(255,255,255,0) 60%)'
                    }
                },
            },
        }
    </script>
    <style>
        .contact-hero {
            background-image: url('{{ asset('images/contact_banner.png') }}');
        }
        .gold-border-input {
            border-bottom: 1px solid #C9A961;
            background: transparent;
            transition: all 0.3s ease;
        }
        .gold-border-input:focus {
            box-shadow: 0 4px 12px rgba(201, 169, 97, 0.1);
            border-bottom-width: 2px;
        }
        
        /* Modern Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .animate-fade-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        .animate-fade-right { animation: fadeInRight 0.8s ease-out 0.2s forwards; opacity: 0; }
        .animate-fade-left { animation: fadeInLeft 0.8s ease-out 0.4s forwards; opacity: 0; }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
@endpush

@section('content')
    <!-- Banner (Preserved) -->
    <div class="shop-hero contact-hero">
        <div class="container animate-fade-up">
            <h1 class="main-heading">Contact Us</h1>
            <p>Our concierge team is at your service for bespoke inquiries and private viewing appointments.</p>
        </div>
    </div>

    <!-- Main Content Split Layout -->
    <div class="w-full bg-background-light font-sans text-text-main overflow-hidden">
        <div class="flex flex-col lg:flex-row min-h-[700px]">
            
            <!-- Left Side: Form Panel (White/Gold Theme) -->
            <section class="w-full lg:w-1/2 p-10 lg:p-20 flex flex-col justify-center relative bg-surface-light animate-fade-right">
                <!-- Decorative Elements -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-gold to-transparent opacity-50"></div>
                
                <h2 class="text-4xl lg:text-5xl font-display font-black text-primary mb-6 tracking-tight">Inquire with Springoo</h2>
                <p class="text-text-main/70 text-lg mb-10 max-w-md leading-relaxed">
                    Visit our exclusive boutique or send us a message. We specialize in <span class="text-gold font-bold">Gold Plating</span>, <span class="text-gold font-bold">Jewelry Repair</span>, and <span class="text-gold font-bold">Custom Designs</span>.
                </p>

                <form action="#" class="space-y-6 relative z-10">
                    <div class="group animate-fade-up delay-100">
                        <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gold mb-2">Full Name</label>
                        <input type="text" class="w-full gold-border-input py-3 text-primary text-lg focus:outline-none placeholder-primary/20" placeholder="Your Name">
                    </div>
                    
                    <div class="group animate-fade-up delay-200">
                        <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gold mb-2">Email Address</label>
                        <input type="email" class="w-full gold-border-input py-3 text-primary text-lg focus:outline-none placeholder-primary/20" placeholder="email@example.com">
                    </div>

                    <div class="group animate-fade-up delay-300">
                        <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gold mb-2">Message</label>
                        <textarea rows="3" class="w-full gold-border-input py-3 text-primary text-lg focus:outline-none placeholder-primary/20 resize-none" placeholder="How can we assist you?"></textarea>
                    </div>

                    <button type="button" class="mt-6 px-10 py-4 bg-primary text-white font-display font-bold uppercase tracking-[0.2em] hover:bg-primary/90 hover:scale-[1.02] transition-all duration-300 shadow-lg border border-gold animate-fade-up delay-300">
                        Send Message
                    </button>
                </form>

                <!-- Contact Details Grid -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 border-t border-gold/20 pt-8 animate-fade-up delay-300">
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-gold mb-1">Visit Us</p>
                        <p class="font-display text-lg font-bold text-primary">JJC Mall</p>
                        <p class="text-text-main/80">No. 119 First Floor,<br>Rajagiriya</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-gold mb-1">Contact</p>
                        <p class="font-display text-lg font-bold text-primary">+94 76 549 6306</p>
                        <p class="text-text-main/80">info@springoo.lk</p>
                    </div>
                </div>
            </section>

            <!-- Right Side: Map (Replacing Imagery) -->
            <section class="w-full lg:w-1/2 relative bg-white min-h-[500px] lg:min-h-full p-4 lg:p-8 animate-fade-left">
                <div class="w-full h-full rounded-2xl overflow-hidden shadow-2xl border-4 border-white relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.85960360777!2d79.88978586977539!3d6.903206600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259881829623b%3A0xe5495535560965e6!2sJJC%20Mall!5e0!3m2!1sen!2slk!4v1705600000000!5m2!1sen!2slk" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="transition-transform duration-700 group-hover:scale-[1.02]">
                    </iframe>
                    
                    <!-- Floating Overlay Card for Location -->
                    <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-md p-6 max-w-xs shadow-luxury rounded-lg border-l-4 border-primary transform transition-all duration-500 hover:translate-y-[-5px]">
                        <h3 class="font-display text-xl font-bold text-primary mb-1">Our Location</h3>
                        <p class="text-xs text-text-main/80 mb-3 font-medium">Centrally located in Rajagiriya.</p>
                        <a href="https://maps.google.com/?q=JJC+Mall+Rajagiriya" target="_blank" class="inline-flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-gold hover:text-primary transition-colors">
                            Get Directions <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
