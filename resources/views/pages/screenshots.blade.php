@extends('layouts.app')

@section('title', 'Software Screenshots & Interface Gallery - Granth Sanchay')
@section('meta_description', 'Explore high-resolution UI screenshots of Granth Sanchay: Library Dashboard, Book Master Cataloging, Rapid Barcode Circulation Desk, and Web OPAC Portal.')

@section('content')
<div x-data="{ 
    filter: 'all', 
    lightboxOpen: false, 
    activeImage: {
        src: '',
        title: '',
        category: '',
        description: ''
    },
    openLightbox(src, title, category, description) {
        this.activeImage = { src, title, category, description };
        this.lightboxOpen = true;
    }
}">

    <!-- Page Header -->
    <div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
                Visual Showcase
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-white">
                Software Interface & <span class="text-[#f4c466]">Screenshots</span>
            </h1>
            <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
                Clean, modern, and uncluttered. Granth Sanchay is built for high readability and lightning speed during busy library hours.
            </p>
        </div>
    </div>

    <!-- Gallery Container -->
    <div class="py-16 bg-[#fdfaf3]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter Buttons -->
            <div class="flex items-center justify-center gap-2 sm:gap-3 flex-wrap mb-12">
                <button @click="filter = 'all'" 
                        :class="filter === 'all' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200">
                    All Screenshots
                </button>
                <button @click="filter = 'dashboard'" 
                        :class="filter === 'dashboard' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200">
                    Dashboard & Analytics
                </button>
                <button @click="filter = 'catalog'" 
                        :class="filter === 'catalog' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200">
                    Book Master Catalog
                </button>
                <button @click="filter = 'circulation'" 
                        :class="filter === 'circulation' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200">
                    Circulation & Barcode
                </button>
                <button @click="filter = 'opac'" 
                        :class="filter === 'opac' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200">
                    Web OPAC Search
                </button>
            </div>

            <!-- Gallery Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                <!-- Screenshot 1: Dashboard -->
                <div x-show="filter === 'all' || filter === 'dashboard'" 
                     x-transition 
                     class="bg-white rounded-3xl overflow-hidden border border-[#ede1cb] shadow-md hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden cursor-pointer bg-black"
                         @click="openLightbox('{{ asset('images/screenshot-dashboard.jpg') }}', 'Executive Library Dashboard', 'Analytics & Reporting', 'Real-time overview of total books (45,820), active members, monthly circulation trends, book accession status, and overdue notifications.')">
                        <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Dashboard Screenshot" class="w-full h-auto object-cover group-hover:scale-103 transition-transform duration-300">
                        <div class="absolute inset-0 bg-[#2d070d]/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="px-4 py-2 rounded-xl bg-[#f4c466] text-[#2d070d] font-bold text-xs shadow-xl flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                <span>Click to Zoom</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Dashboard & Operations</span>
                            <span class="text-[11px] font-mono text-stone-600 bg-stone-100 px-2 py-0.5 rounded">High Resolution</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#2d070d] mb-2">Executive Library Dashboard</h3>
                        <p class="text-sm text-stone-600 leading-relaxed">
                            Complete real-time analytics showing total library books, active member registrations, daily issue/return velocity, accession pie charts, and overdue alerts.
                        </p>
                    </div>
                </div>

                <!-- Screenshot 2: Book Catalog -->
                <div x-show="filter === 'all' || filter === 'catalog'" 
                     x-transition 
                     class="bg-white rounded-3xl overflow-hidden border border-[#ede1cb] shadow-md hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden cursor-pointer bg-black"
                         @click="openLightbox('{{ asset('images/screenshot-catalog.jpg') }}', 'Book Master & Accession Catalog', 'Cataloging & Inventory', 'Book Master screen showing instant ISBN scan, Dewey Decimal DDC classification numbers, rack/shelf locator, book cover thumbnails, and stock availability tags.')">
                        <img src="{{ asset('images/screenshot-catalog.jpg') }}" alt="Catalog Screenshot" class="w-full h-auto object-cover group-hover:scale-103 transition-transform duration-300">
                        <div class="absolute inset-0 bg-[#2d070d]/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="px-4 py-2 rounded-xl bg-[#f4c466] text-[#2d070d] font-bold text-xs shadow-xl flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                <span>Click to Zoom</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Catalog & Inventory</span>
                            <span class="text-[11px] font-mono text-stone-600 bg-stone-100 px-2 py-0.5 rounded">High Resolution</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#2d070d] mb-2">Book Master & Accession Registry</h3>
                        <p class="text-sm text-stone-600 leading-relaxed">
                            Organize your entire collection. Filter books by Author, Genre, or Rack. Includes ISBN barcode scanner input, book cover thumbnails, and stock availability tags.
                        </p>
                    </div>
                </div>

                <!-- Screenshot 3: Circulation Desk -->
                <div x-show="filter === 'all' || filter === 'circulation'" 
                     x-transition 
                     class="bg-white rounded-3xl overflow-hidden border border-[#ede1cb] shadow-md hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden cursor-pointer bg-black"
                         @click="openLightbox('{{ asset('images/screenshot-circulation.jpg') }}', 'Rapid Circulation & Barcode Desk', 'Counter Transactions', 'Student member photo profile, ID card number, active borrowings list, due date calculator, barcode scanner status, and quick Issue/Return buttons.')">
                        <img src="{{ asset('images/screenshot-circulation.jpg') }}" alt="Circulation Screenshot" class="w-full h-auto object-cover group-hover:scale-103 transition-transform duration-300">
                        <div class="absolute inset-0 bg-[#2d070d]/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="px-4 py-2 rounded-xl bg-[#f4c466] text-[#2d070d] font-bold text-xs shadow-xl flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                <span>Click to Zoom</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Circulation Desk</span>
                            <span class="text-[11px] font-mono text-stone-600 bg-stone-100 px-2 py-0.5 rounded">High Resolution</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#2d070d] mb-2">Fast Circulation & Barcode Counter</h3>
                        <p class="text-sm text-stone-600 leading-relaxed">
                            Handles high-volume student checkouts with zero delay. Automatically checks membership validity, calculates late fines, and logs transaction history.
                        </p>
                    </div>
                </div>

                <!-- Screenshot 4: Web OPAC -->
                <div x-show="filter === 'all' || filter === 'opac'" 
                     x-transition 
                     class="bg-white rounded-3xl overflow-hidden border border-[#ede1cb] shadow-md hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden cursor-pointer bg-black"
                         @click="openLightbox('{{ asset('images/screenshot-opac.jpg') }}', 'Student & Faculty Web OPAC Portal', 'Online Search', 'Public web catalog where students browse 50,000+ books, check shelf coordinates R-4B, view book ratings, and reserve books online.')">
                        <img src="{{ asset('images/screenshot-opac.jpg') }}" alt="OPAC Screenshot" class="w-full h-auto object-cover group-hover:scale-103 transition-transform duration-300">
                        <div class="absolute inset-0 bg-[#2d070d]/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="px-4 py-2 rounded-xl bg-[#f4c466] text-[#2d070d] font-bold text-xs shadow-xl flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                <span>Click to Zoom</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Web OPAC Portal</span>
                            <span class="text-[11px] font-mono text-stone-600 bg-stone-100 px-2 py-0.5 rounded">High Resolution</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#2d070d] mb-2">Digital Library & Web OPAC</h3>
                        <p class="text-sm text-stone-600 leading-relaxed">
                            Web catalog accessible on mobile and desktop browsers. Features live search across Science, Literature, Engineering, and History with instant reservation.
                        </p>
                    </div>
                </div>

                <!-- Poster Showcase Card -->
                <div x-show="filter === 'all'" 
                     x-transition 
                     class="md:col-span-2 bg-[#240509] rounded-3xl p-6 sm:p-10 border-2 border-[#f4c466]/40 shadow-2xl text-white">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-5">
                            <div class="rounded-2xl overflow-hidden shadow-2xl border border-[#f4c466]/30 cursor-pointer group"
                                 @click="openLightbox('{{ asset('images/granth-sanchay-poster.jpg') }}', 'Granth Sanchay Official Identity Poster', 'Branding & Identity', 'Official Granth Sanchay presentation graphic featuring the tree of books, Hindi calligraphy ग्रंथसंचय, slogan READ • LEARN • GROW, and institutional contact details.')">
                                <img src="{{ asset('images/granth-sanchay-poster.jpg') }}" alt="Granth Sanchay Poster" class="w-full h-auto object-cover group-hover:scale-103 transition-transform duration-300">
                            </div>
                        </div>
                        <div class="lg:col-span-7 space-y-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-3.5 py-1.5 rounded-full border border-[#f4c466]/30">
                                Official Product Identity
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                                ग्रंथसंचय - Granth Sanchay
                            </h3>
                            <p class="text-sm text-[#fcebc7]/80 leading-relaxed">
                                Granth Sanchay symbolizes knowledge taking flight. The tree of colorful books represents infinite learning and growth through structured library preservation.
                            </p>
                            <div class="p-4 rounded-xl bg-[#380a10] border border-[#f4c466]/20 text-xs space-y-2 text-[#fcebc7]">
                                <div class="flex items-center gap-2">
                                    <strong class="text-[#f4c466]">Email:</strong>
                                    <span>granthsanchaylib@gmail.com</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <strong class="text-[#f4c466]">Phone / WhatsApp:</strong>
                                    <span>+91 93289 38959</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <strong class="text-[#f4c466]">Official Website:</strong>
                                    <span>www.granthsanchay.com</span>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="{{ route('schedule-demo') }}" 
                                   class="inline-block px-7 py-3 rounded-xl font-bold text-xs uppercase tracking-wider text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-lg hover:scale-105 transition-all">
                                    Book Live Demo Today
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Lightbox Zoom Modal -->
    <div x-show="lightboxOpen" 
         x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90 backdrop-blur-lg"
         @keydown.escape.window="lightboxOpen = false">
        
        <div class="max-w-5xl w-full bg-[#1f0407] rounded-3xl border-2 border-[#f4c466]/40 shadow-2xl overflow-hidden relative"
             @click.away="lightboxOpen = false">
            
            <div class="p-4 sm:p-5 bg-[#2d070d] border-b border-[#460d15] flex items-center justify-between">
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-white" x-text="activeImage.title"></h4>
                    <span class="text-xs text-[#f4c466] font-mono" x-text="activeImage.category"></span>
                </div>
                <button @click="lightboxOpen = false" class="text-white/70 hover:text-white p-2 rounded-lg hover:bg-white/10 text-xl font-bold">
                    ✕
                </button>
            </div>

            <div class="p-2 sm:p-4 bg-black/95 max-h-[70vh] overflow-auto flex items-center justify-center">
                <img :src="activeImage.src" :alt="activeImage.title" class="max-h-[65vh] w-auto object-contain rounded-xl shadow-2xl">
            </div>

            <div class="p-4 sm:p-6 bg-[#240509] text-xs sm:text-sm text-[#fcebc7]/90 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p x-text="activeImage.description" class="max-w-2xl"></p>
                <a href="{{ route('schedule-demo') }}" class="px-5 py-2.5 rounded-xl font-bold text-xs text-[#2d070d] bg-[#f4c466] hover:bg-[#ffe49e] transition-colors shrink-0">
                    Test in Live Demo →
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
