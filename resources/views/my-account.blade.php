@extends('layouts.app')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Noto+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<style>
    /* Modern Luxury Theme Overrides */
    .font-display { font-family: 'Manrope', sans-serif; }
    .font-serif { font-family: 'Noto Serif', serif; }
    
    /* Springoo Emerald & Gold Palette */
    :root {
        --color-primary: #096d4b;  /* Deep Emerald */
        --color-primary-dark: #064d35;
        --color-gold: #D4AF37;
        --color-gold-light: #F1E5AC;
        --bg-cream: #faf9f6;
    }

    .text-gold { color: var(--color-gold); }
    .text-primary { color: var(--color-primary); }
    .bg-primary { background-color: var(--color-primary); }
    .border-gold { border-color: var(--color-gold); }

    /* Luxury Effects */
    .gold-shimmer {
        background: linear-gradient(135deg, var(--color-gold) 0%, var(--color-gold-light) 50%, var(--color-gold) 100%);
        background-size: 200% auto;
        animation: shimmer 8s ease infinite;
    }
    
    .sidebar-gradient {
        background: linear-gradient(180deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
    }

    .luxury-shadow {
        box-shadow: 0 10px 40px -10px rgba(9, 109, 75, 0.08);
    }
    
    .hover-lift {
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .hover-lift:hover {
        transform: translateY(-4px);
    }

    @keyframes shimmer {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
    }
</style>
@endpush

@section('content')
<div class="bg-[#faf9f6] min-h-screen font-display text-gray-800">
    <div class="flex max-w-[1920px] mx-auto relative">
        
        <!-- Sidebar Navigation -->
        <aside class="w-72 sidebar-gradient text-white flex flex-col shrink-0 min-h-[800px] sticky top-0 h-screen overflow-y-auto">
            <div class="p-10">
                <div class="flex items-center gap-4 mb-16">
                    <div class="h-12 w-12 rounded-full border-2 border-gold/30 flex items-center justify-center bg-white/10 backdrop-blur-sm overflow-hidden shadow-lg">
                        <span class="text-gold font-serif text-2xl font-bold">S</span>
                    </div>
                    <div>
                        <h1 class="font-serif text-2xl tracking-widest uppercase text-white">Springoo</h1>
                        <p class="text-[9px] text-gold tracking-[0.25em] font-medium uppercase mt-1">Fine Jewelry</p>
                    </div>
                </div>
                
                <nav class="flex flex-col gap-3">
                    <a href="#" class="flex items-center gap-4 px-5 py-3.5 rounded-xl bg-white/10 text-gold border-r-4 border-gold transition-all shadow-lg backdrop-blur-sm">
                        <span class="material-symbols-outlined">person</span>
                        <span class="text-sm font-semibold tracking-wide">My Profile</span>
                    </a>
                    <a href="#" class="flex items-center gap-4 px-5 py-3.5 rounded-xl hover:bg-white/10 text-white/80 hover:text-white transition-all group">
                        <span class="material-symbols-outlined group-hover:scale-110 transition-transform">local_mall</span>
                        <span class="text-sm font-medium tracking-wide">Order History</span>
                    </a>
                    <a href="#" class="flex items-center gap-4 px-5 py-3.5 rounded-xl hover:bg-white/10 text-white/80 hover:text-white transition-all group">
                        <span class="material-symbols-outlined group-hover:scale-110 transition-transform">favorite</span>
                        <span class="text-sm font-medium tracking-wide">My Wishlist</span>
                    </a>
                    <a href="#" class="flex items-center gap-4 px-5 py-3.5 rounded-xl hover:bg-white/10 text-white/80 hover:text-white transition-all group">
                        <span class="material-symbols-outlined group-hover:scale-110 transition-transform">workspace_premium</span>
                        <span class="text-sm font-medium tracking-wide">VIP Rewards</span>
                    </a>
                    <a href="#" class="flex items-center gap-4 px-5 py-3.5 rounded-xl hover:bg-white/10 text-white/80 hover:text-white transition-all group">
                        <span class="material-symbols-outlined group-hover:scale-110 transition-transform">settings</span>
                        <span class="text-sm font-medium tracking-wide">Account Settings</span>
                    </a>
                </nav>
            </div>
            
            <div class="mt-auto p-10">
                <div class="border-t border-white/10 pt-8">
                    <a href="#" class="flex items-center gap-4 px-2 text-white/60 hover:text-white transition-all group">
                        <span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">logout</span>
                        <span class="text-sm font-medium tracking-wide">Sign Out</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-hidden">
            <div class="max-w-6xl mx-auto px-16 py-20">
                
                <!-- SEO Hidden Heading -->
                <h1 class="sr-only">My Luxury Account Dashboard - Springoo Jewelry</h1>

                <!-- Welcome Header -->
                <div class="flex justify-between items-end mb-14">
                    <div class="animate-fade-in-up">
                        <h2 class="font-serif text-5xl text-primary mb-3">Welcome, <span class="italic text-gold fw-light">Alexandra</span></h2>
                        <p class="text-gray-500 text-sm tracking-widest uppercase font-medium">Your Exclusive Jewelry Concierge</p>
                    </div>
                    <button class="px-8 py-3 bg-primary text-white text-xs font-bold uppercase tracking-[0.15em] rounded-full hover:bg-primary-dark transition-all flex items-center gap-3 shadow-xl hover:shadow-2xl hover:-translate-y-0.5 transform">
                        <span class="material-symbols-outlined text-sm">edit_square</span>
                        Edit Profile
                    </button>
                </div>

                <!-- Loyalty Status Card (Focus on engagement) -->
                <div class="relative overflow-hidden rounded-2xl gold-shimmer p-10 mb-16 luxury-shadow group cursor-default">
                    <!-- Texture Overlay -->
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay"></div>
                    <div class="absolute top-0 right-0 w-96 h-96 bg-white/20 rounded-full -mr-32 -mt-32 blur-[60px]"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary/10 rounded-full -ml-20 -mb-20 blur-[50px]"></div>
                    
                    <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-8">
                        <div>
                            <span class="inline-block px-3 py-1 bg-white/20 rounded-full text-[10px] font-bold tracking-[0.3em] text-primary uppercase mb-3 border border-white/20 backdrop-blur-md">Platinum Member</span>
                            <h3 class="text-4xl font-serif text-primary mb-2">1,250 <span class="text-xs align-middle uppercase tracking-wider font-sans font-bold opacity-70">Points Available</span></h3>
                            <p class="text-primary/70 text-sm italic font-medium">You are <strong>250 points</strong> away from <span class="underline decoration-1 underline-offset-4 decoration-primary/30">Diamond Elegance Tier</span>.</p>
                        </div>
                        <div class="flex flex-col gap-4 items-end">
                            <button class="bg-primary text-white px-8 py-3.5 rounded-lg text-xs font-bold tracking-[0.2em] uppercase hover:shadow-lg transition-all border border-transparent hover:border-gold/50 hover:bg-primary-dark">
                                Redeem Rewards
                            </button>
                            <a href="#" class="text-primary/80 text-[10px] font-bold uppercase tracking-widest underline underline-offset-4 decoration-primary/30 hover:text-primary transition-colors">View Member Benefits</a>
                        </div>
                    </div>
                </div>

                <!-- Three Columns: Stats -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                    <div class="bg-white p-8 rounded-2xl luxury-shadow border border-gray-100/50 hover-lift group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="h-14 w-14 rounded-2xl bg-primary/5 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                                <span class="material-symbols-outlined text-2xl">local_shipping</span>
                            </div>
                            <span class="text-emerald-600 text-[10px] font-bold uppercase tracking-wider bg-emerald-50 px-2 py-1 rounded-md">On Route</span>
                        </div>
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em] mb-1">Active Orders</p>
                        <p class="text-2xl font-serif text-primary">02 Items</p>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl luxury-shadow border border-gray-100/50 hover-lift group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="h-14 w-14 rounded-2xl bg-primary/5 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                                <span class="material-symbols-outlined text-2xl">account_balance_wallet</span>
                            </div>
                        </div>
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em] mb-1">Store Credit</p>
                        <p class="text-2xl font-serif text-primary">$45.00</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl luxury-shadow border border-gray-100/50 hover-lift group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="h-14 w-14 rounded-2xl bg-primary/5 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                                <span class="material-symbols-outlined text-2xl">auto_awesome</span>
                            </div>
                            <span class="text-gold text-[10px] font-bold uppercase tracking-wider bg-yellow-50 px-2 py-1 rounded-md">12 Saved</span>
                        </div>
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em] mb-1">My Wishlist</p>
                        <p class="text-2xl font-serif text-primary">Jewelry Box</p>
                    </div>
                </div>

                <!-- Recent Orders Section -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-8 border-b border-gray-100 pb-4">
                        <h2 class="font-serif text-3xl text-primary">Recent Treasures</h2>
                        <a href="#" class="text-primary/60 hover:text-primary text-xs font-bold uppercase tracking-widest flex items-center gap-2 group transition-all">
                            Full Order History
                            <span class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                        </a>
                    </div>

                    <div class="flex flex-col gap-6">
                        <!-- Order Item 1 -->
                        <div class="flex flex-col md:flex-row items-center gap-8 bg-white p-6 rounded-2xl border border-gray-100 luxury-shadow hover:border-gold/30 transition-all group cursor-pointer relative overflow-hidden">
                            <div class="absolute w-1 h-full left-0 top-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            
                            <div class="h-24 w-24 bg-gray-50 rounded-xl overflow-hidden flex-shrink-0 shadow-inner md:order-1">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEvtN0PIxvqjoG_x_EsvrEHZN5ATH3s49SDTpPJuhwiETP_j7hY3N74SNJKm-tfrwpYfnne82ZsxDqjsEquPX-wFaYE3jHKQsjZKXSihN2ugiVJdW1qWOdDgo4TUA8fCqzGLCPlfHJYquN3qcl6rcsaGggc6kJPF3UtTqLAwcdgMM-xQq2d27C1iLYtxTLbVHdX0m7cL9D0h-UHbS1IIB8EUYAlhI1Pj4nvUFtuVZdE0qe4xWo-m-prcf78LzphfcKT0CIXKCYaNLF" 
                                     alt="18k gold-plated sunburst necklace"
                                     class="w-full h-full object-cover mix-blend-multiply group-hover:scale-110 transition-transform duration-700">
                            </div>
                            
                            <div class="flex-grow md:order-2 w-full text-center md:text-left">
                                <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                    <h4 class="text-xl font-serif text-primary group-hover:text-gold transition-colors">Sunburst Necklace, 18k Gold</h4>
                                    <p class="font-bold text-gray-900 font-display">$240.00</p>
                                </div>
                                <p class="text-sm text-gray-500 line-clamp-1 mb-4">Limited Edition - Summer Solstice Collection</p>
                                
                                <div class="flex items-center justify-center md:justify-start gap-4 text-xs">
                                    <span class="text-gray-400 font-medium tracking-wider">Order #SP-59210</span>
                                    <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                    <span class="flex items-center gap-1 text-emerald-700 font-bold uppercase tracking-tight bg-emerald-50 px-2 py-0.5 rounded">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Shipped
                                    </span>
                                </div>
                            </div>
                            
                            <div class="md:order-3 flex-shrink-0">
                                <button class="h-10 w-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-primary hover:border-primary transition-all" title="View Details">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>

                        <!-- Order Item 2 -->
                        <div class="flex flex-col md:flex-row items-center gap-8 bg-white p-6 rounded-2xl border border-gray-100 luxury-shadow hover:border-gold/30 transition-all group cursor-pointer relative overflow-hidden">
                             <div class="absolute w-1 h-full left-0 top-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                             
                            <div class="h-24 w-24 bg-gray-50 rounded-xl overflow-hidden flex-shrink-0 shadow-inner md:order-1">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvITTaLInu5eNqOvnF3KIOQRY9kSXLt41BSyCOgf1qCVhujzpeHo8CZE0dv4mXZn4PEAmyUOgWgdI5-cBUyKYSeaz91ZmHds4DjbbKAW9NXftAOTbA6RLxM9vjELgkyOVRB-u5E6-R_IooBTx-jTDm0WWWR3M2on5yw5AdYxkCLeC_0dS-J1MFr7-Jejf-KL_SvAhZkqA7LUACexMEozP5kSRiwXFyOTo1kClsDGLI3Wqm84YF1ZwmDQr7NwwZbJmZSiLTz1cQ2gJ8" 
                                     alt="Classic gold plated hoop earrings"
                                     class="w-full h-full object-cover mix-blend-multiply group-hover:scale-110 transition-transform duration-700">
                            </div>
                             
                             <div class="flex-grow md:order-2 w-full text-center md:text-left">
                                 <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                     <h4 class="text-xl font-serif text-primary group-hover:text-gold transition-colors">Gold Essential Hoops</h4>
                                     <p class="font-bold text-gray-900 font-display">$85.00</p>
                                 </div>
                                 <p class="text-sm text-gray-500 line-clamp-1 mb-4">The Essentials - Everyday Luxury</p>
                                 
                                 <div class="flex items-center justify-center md:justify-start gap-4 text-xs">
                                     <span class="text-gray-400 font-medium tracking-wider">Order #SP-58402</span>
                                     <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                     <span class="flex items-center gap-1 text-blue-700 font-bold uppercase tracking-tight bg-blue-50 px-2 py-0.5 rounded">
                                         Delivered
                                     </span>
                                 </div>
                             </div>
                             
                             <div class="md:order-3 flex-shrink-0">
                                 <button class="h-10 w-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-primary hover:border-primary transition-all" title="View Details">
                                     <span class="material-symbols-outlined">visibility</span>
                                 </button>
                             </div>
                         </div>
                    </div>
                </div>

                <!-- Footer Quick Links -->
                <div class="mt-20 border-t border-gray-200 pt-10 grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="pl-6 border-l-4 border-gold/20">
                        <h5 class="text-xs font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Primary Shipping Address</h5>
                        <p class="text-primary text-base leading-relaxed font-serif">
                            <span class="font-bold block mb-1">Alexandra Sterling</span>
                            482 Gold Coast Blvd, Suite 200<br>
                            Malibu, California 90265
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center gap-2 text-[10px] font-bold uppercase text-gold hover:text-primary transition-colors">
                            Manage Addresses <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                    <div class="pl-6 border-l-4 border-gold/20">
                        <h5 class="text-xs font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Default Payment Method</h5>
                        <div class="flex items-center gap-4 mb-3">
                            <div class="h-8 w-12 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2560px-Visa_Inc._logo.svg.png" class="h-3 w-auto opacity-70" alt="Visa">
                            </div>
                            <p class="text-primary text-sm font-medium">Ending in •••• 8812</p>
                        </div>
                        <p class="text-gray-500 text-xs mb-4">Expires 08/2026</p>
                        <a href="#" class="inline-flex items-center gap-2 text-[10px] font-bold uppercase text-gold hover:text-primary transition-colors">
                            Update Details <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
@endsection
