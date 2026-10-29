<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Granth Sanchay - Advanced Library Management Software')</title>
    <meta name="description" content="@yield('meta_description', 'Granth Sanchay is an advanced, modern library management system for schools, colleges, universities, and public libraries. Cataloging, circulation, barcode/RFID, and web OPAC.')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>📚</text></svg>">
    
    <!-- Preload Yellix Font (Exact typeface from reference design) -->
    <link rel="preload" href="/fonts/yellix/Yellix-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/yellix/Yellix-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/yellix/Yellix-Bold.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Google Fonts for Devanagari Hindi support -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Alpine.js for lightweight UI interactivity (modals, dropdowns, tabs) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fdfaf3] text-[#2b1d1f] antialiased flex flex-col min-h-screen" x-data="{ mobileMenuOpen: false }">

    <!-- Global Scroll Progress Indicator Bar -->
    <div class="fixed top-0 left-0 right-0 h-1 bg-black/20 z-[100] pointer-events-none">
        <div id="scrollProgressBar" class="h-full bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] w-0 transition-all duration-75 shadow-[0_0_12px_#f4c466]"></div>
    </div>

    <!-- Top Announcement & Contact Bar -->
    <header class="bg-[#240509] text-[#fcebc7] text-xs py-2 border-b border-[#460d15]/50 relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4 flex-wrap justify-center sm:justify-start">
                <span class="inline-flex items-center gap-1.5 font-medium text-[#f4c466]">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/></svg>
                    READ • LEARN • GROW
                </span>
                <span class="hidden md:inline text-white/30">|</span>
                <span class="hidden md:inline text-white/70">Advanced Library Management Software for Indian Institutions</span>
            </div>
            <div class="flex items-center gap-5 flex-wrap justify-center text-xs">
                <a href="tel:+919328938959" class="inline-flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-[#f4c466]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    +91 93289 38959
                </a>
                <a href="mailto:granthsanchaylib@gmail.com" class="inline-flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-[#f4c466]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    granthsanchaylib@gmail.com
                </a>
                <a href="https://wa.me/919328938959?text=Hello%20Granth%20Sanchay%20Team%2C%20I%20would%20like%20to%20know%20more%20about%20your%20Library%20Software" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-[#22c55e] hover:text-[#4ade80] font-semibold transition-colors">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- Main Navigation Bar -->
    <nav class="sticky top-0 z-40 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo & Branding -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/granth-sanchay-logo.png') }}" 
                         alt="Granth Sanchay Logo" 
                         class="h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105 filter drop-shadow">
                    <div class="flex flex-col">
                        <div class="flex items-baseline gap-2">
                            <span class="devanagari-title text-2xl font-bold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-[#ffe08a] via-[#f4c466] to-[#dfa839]">
                                ग्रंथसंचय
                            </span>
                            <span class="text-xs font-semibold uppercase tracking-wider text-amber-200/70 hidden sm:inline">
                                Granth Sanchay
                            </span>
                        </div>
                        <span class="text-[10px] uppercase font-bold tracking-widest text-[#fcebc7]/60">
                            Advanced Library Software
                        </span>
                    </div>
                </a>

                <!-- Desktop Menu (The exact 8 items requested by user) -->
                <div class="hidden lg:flex items-center space-x-1 xl:space-x-2">
                    <a href="{{ route('home') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Home
                    </a>
                    <a href="{{ route('features') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('features') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Features
                    </a>
                    <a href="{{ route('videos') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('videos') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Videos
                    </a>
                    <a href="{{ route('screenshots') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('screenshots') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Screenshots
                    </a>
                    <a href="{{ route('price') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('price') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Price
                    </a>
                    <a href="{{ route('support') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('support') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Support
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-[#5c141e] text-[#f4c466] shadow-sm font-semibold' : 'text-[#fcebc7]/90 hover:text-white hover:bg-white/10' }}">
                        Contact
                    </a>
                </div>

                <!-- Schedule a Demo CTA Button (Prominent) -->
                <div class="hidden lg:flex items-center">
                    <a href="{{ route('schedule-demo') }}" 
                       class="relative group overflow-hidden px-5 py-2.5 rounded-xl font-bold text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-lg shadow-[#dfa839]/20 hover:shadow-xl hover:shadow-[#dfa839]/30 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300">
                        <span class="relative z-10 flex items-center gap-2">
                            <span>Schedule a demo</span>
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" 
                            type="button" 
                            class="p-2.5 rounded-lg text-[#fcebc7] hover:bg-white/10 focus:outline-none transition-colors"
                            aria-label="Toggle navigation">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="mobileMenuOpen" 
             x-cloak 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden bg-[#240509] border-b border-[#460d15] px-4 pt-2 pb-6 space-y-2">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('home') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Home</a>
            <a href="{{ route('features') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('features') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Features</a>
            <a href="{{ route('videos') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('videos') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Videos</a>
            <a href="{{ route('screenshots') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('screenshots') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Screenshots</a>
            <a href="{{ route('price') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('price') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Price</a>
            <a href="{{ route('support') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('support') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Support</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="block px-4 py-2.5 rounded-lg text-base font-medium text-[#fcebc7] hover:bg-[#460d15] {{ request()->routeIs('contact') ? 'bg-[#5c141e] text-[#f4c466]' : '' }}">Contact</a>
            <div class="pt-3">
                <a href="{{ route('schedule-demo') }}" @click="mobileMenuOpen = false" class="block text-center w-full py-3 px-4 rounded-xl font-bold text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-md">
                    Schedule a demo
                </a>
            </div>
        </div>
    </nav>

    <!-- Global Flash Notification -->
    @if(session('success'))
        <div class="bg-emerald-800 text-emerald-50 px-4 py-3 shadow-md relative z-30" role="alert">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-emerald-300 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Page Body Slot -->
    <main id="main-content" class="flex-grow overflow-x-hidden">
        @yield('content')
    </main>

    <!-- Floating Action WhatsApp & Call Button -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">
        <a href="https://wa.me/919328938959?text=Hello%20Granth%20Sanchay%20Team%2C%20I%20am%20interested%20in%20a%20live%20demo%20of%20your%20Library%20Management%20Software." 
           target="_blank" 
           rel="noopener"
           aria-label="Chat on WhatsApp"
           class="w-13 h-13 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-xl hover:scale-110 active:scale-95 transition-transform duration-300 group relative">
            <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            <span class="absolute right-15 bg-[#240509] text-[#f4c466] text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none border border-[#f4c466]/30">
                Chat on WhatsApp
            </span>
        </a>
    </div>

    <!-- Master Footer -->
    <footer class="bg-[#1f0407] text-[#fcebc7] border-t-4 border-[#f4c466] relative overflow-hidden">
        <!-- Background subtle glow -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#5c141e]/30 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#dfa839]/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                
                <!-- Col 1: Brand & Poster Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/granth-sanchay-logo.png') }}" 
                             alt="Granth Sanchay Logo" 
                             class="h-10 w-auto object-contain">
                        <div>
                            <h3 class="devanagari-title text-2xl font-bold text-[#f4c466] leading-none">ग्रंथसंचय</h3>
                            <span class="text-xs text-amber-100/70 uppercase tracking-wider font-semibold">Granth Sanchay</span>
                        </div>
                    </div>
                    <p class="text-xs font-semibold text-[#f4c466] tracking-widest uppercase">READ • LEARN • GROW</p>
                    <p class="text-sm text-[#fcebc7]/70 leading-relaxed">
                        Advanced Library Management Software designed specifically for Indian Schools, Colleges, Universities, and Public Libraries. Empowering librarians with automation, barcode scanning, RFID, and digital OPAC.
                    </p>
                    <div class="pt-2">
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-[#460d15] text-[#f4c466] border border-[#f4c466]/30">
                            Ready for a Digital Transformation?
                        </span>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-[#f4c466] mb-5 border-l-2 border-[#f4c466] pl-2.5">
                        Quick Navigation
                    </h4>
                    <ul class="space-y-2.5 text-sm text-[#fcebc7]/80">
                        <li><a href="{{ route('home') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Home</a></li>
                        <li><a href="{{ route('features') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Features</a></li>
                        <li><a href="{{ route('videos') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Videos & Demos</a></li>
                        <li><a href="{{ route('screenshots') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Screenshots & Gallery</a></li>
                        <li><a href="{{ route('price') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Pricing Plans</a></li>
                        <li><a href="{{ route('support') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Support & Helpdesk</a></li>
                        <li><a href="{{ route('schedule-demo') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Schedule a Demo</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-[#f4c466] transition-colors flex items-center gap-2"><span>›</span> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Key Modules -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-[#f4c466] mb-5 border-l-2 border-[#f4c466] pl-2.5">
                        Library Modules
                    </h4>
                    <ul class="space-y-2.5 text-sm text-[#fcebc7]/80">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>Book Cataloging & Accession</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>Rapid Issue, Return & Renewals</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>Barcode & RFID Automation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>Student & Staff OPAC Web Portal</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>Member Management & ID Cards</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>NAAC / NBA Audit Accession Register</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466]"></span>
                            <span>Automated Fine & Due Date Alerts</span>
                        </li>
                    </ul>
                </div>

                <!-- Col 4: Official Contact (From Poster) -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-[#f4c466] mb-5 border-l-2 border-[#f4c466] pl-2.5">
                        Get In Touch
                    </h4>
                    <div class="space-y-4 text-sm text-[#fcebc7]/85">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-[#380a10] border border-[#f4c466]/30 flex items-center justify-center shrink-0 text-[#f4c466]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block">Helpline / WhatsApp</span>
                                <a href="tel:+919328938959" class="font-bold text-[#f4c466] hover:underline text-base">+91 93289 38959</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-[#380a10] border border-[#f4c466]/30 flex items-center justify-center shrink-0 text-[#f4c466]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block">Official Support Email</span>
                                <a href="mailto:granthsanchaylib@gmail.com" class="font-medium text-white hover:text-[#f4c466] break-all">granthsanchaylib@gmail.com</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-[#380a10] border border-[#f4c466]/30 flex items-center justify-center shrink-0 text-[#f4c466]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block">Official Website</span>
                                <a href="https://www.granthsanchay.com" target="_blank" rel="noopener" class="font-medium text-[#f4c466] hover:underline">www.granthsanchay.com</a>
                            </div>
                        </div>

                        <div class="pt-3">
                            <a href="{{ route('schedule-demo') }}" class="inline-flex items-center justify-center w-full px-4 py-2.5 rounded-lg text-xs font-bold uppercase tracking-wider text-[#240509] bg-[#f4c466] hover:bg-[#ffe08a] transition-colors shadow">
                                Book Free 1-on-1 Demo
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright & Badges -->
            <div class="mt-12 pt-8 border-t border-[#460d15] flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-[#fcebc7]/60">
                <p>© {{ date('Y') }} Granth Sanchay (ग्रंथसंचय). All rights reserved. Advanced Library Management Software.</p>
                <div class="flex items-center gap-4 flex-wrap">
                    <span>Designed for Indian Academic Excellence</span>
                    <span>•</span>
                    <span>Hindi & Multilingual Support</span>
                    <span>•</span>
                    <span>No Expensive Hardware Required</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // High-Performance 60fps / 120fps GPU Scroll Sync (Zero CPU Lag)
        (function() {
            let ticking = false;
            function onScroll() {
                const scrollY = window.pageYOffset || document.documentElement.scrollTop;
                const maxScroll = (document.documentElement.scrollHeight - document.documentElement.clientHeight) || 1;
                const progress = Math.min(100, Math.max(0, (scrollY / maxScroll) * 100));
                
                document.documentElement.style.setProperty('--scroll-y', scrollY + 'px');
                
                const bar = document.getElementById('scrollProgressBar');
                if (bar) bar.style.width = progress + '%';
                
                ticking = false;
            }

            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(onScroll);
                    ticking = true;
                }
            }, { passive: true });

            onScroll();
        })();
    </script>
    @stack('scripts')
</body>
</html>
