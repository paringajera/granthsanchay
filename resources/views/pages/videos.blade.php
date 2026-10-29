@extends('layouts.app')

@section('title', 'Video Demos & Tutorials - Granth Sanchay Library Software')
@section('meta_description', 'Watch video demonstrations of Granth Sanchay: Dashboard tour, book cataloging, barcode scanning checkout, and NAAC audit reports.')

@section('content')
<div x-data="{ 
    modalOpen: false, 
    activeVideo: {
        title: 'Granth Sanchay: Full System Walkthrough',
        duration: '5:45 min',
        description: 'Complete end-to-end demonstration of cataloging, barcode circulation, member management, and reports in Granth Sanchay.'
    },
    openVideo(title, duration, description) {
        this.activeVideo = { title, duration, description };
        this.modalOpen = true;
    }
}">

    <!-- Page Header -->
    <div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
                Visual Product Tour
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-white">
                See Granth Sanchay <span class="text-[#f4c466]">in Action</span>
            </h1>
            <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
                Watch our quick module tutorials and product overviews to discover how effortlessly Granth Sanchay automates your library.
            </p>
        </div>
    </div>

    <!-- Featured Master Video -->
    <div class="py-16 bg-[#fdfaf3]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-[#240509] rounded-3xl p-6 sm:p-10 border-2 border-[#f4c466]/40 shadow-2xl text-white">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <!-- Left: Video Player Box -->
                    <div class="lg:col-span-7">
                        <div class="relative rounded-2xl overflow-hidden border border-[#f4c466]/30 bg-black group cursor-pointer shadow-2xl"
                             @click="openVideo('Granth Sanchay: Complete System Walkthrough', '05:45', 'Watch an in-depth walkthrough of dashboard analytics, book master cataloging, rapid barcode issue/return, and audit reports.')">
                            <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Granth Sanchay Video Preview" class="w-full h-auto object-cover opacity-80 group-hover:opacity-95 group-hover:scale-102 transition-all duration-300">
                            
                            <!-- Play Button Overlay -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/40 group-hover:bg-black/20 transition-all">
                                <div class="w-20 h-20 rounded-full bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] text-[#2d070d] flex items-center justify-center shadow-2xl group-hover:scale-115 transition-transform duration-300 pl-1">
                                    <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </div>

                            <span class="absolute bottom-4 right-4 bg-[#240509]/90 text-[#f4c466] text-xs font-mono font-bold px-3 py-1 rounded-md border border-[#f4c466]/30">
                                05:45 HD
                            </span>
                        </div>
                    </div>

                    <!-- Right: Video Summary & Chapters -->
                    <div class="lg:col-span-5 space-y-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-3 py-1 rounded-full border border-[#f4c466]/20">
                            Featured Overview
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                            Granth Sanchay Full System Tour
                        </h2>
                        <p class="text-sm text-[#fcebc7]/80 leading-relaxed">
                            In this 5-minute product overview, our senior library solution architect demonstrates how effortless book cataloging, barcode scanning, student OPAC, and NAAC reporting are with Granth Sanchay.
                        </p>

                        <!-- Chapters Timeline -->
                        <div class="space-y-2 pt-2 border-t border-[#460d15] text-xs text-[#fcebc7]/90 font-mono">
                            <div class="flex items-center gap-3">
                                <span class="text-[#f4c466] font-bold">00:00</span>
                                <span>Introduction & Real-Time Dashboard</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[#f4c466] font-bold">01:15</span>
                                <span>Accession & ISBN Auto-Cataloging</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[#f4c466] font-bold">02:40</span>
                                <span>3-Second Barcode Issue & Return</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[#f4c466] font-bold">03:55</span>
                                <span>Student Web OPAC Mobile Search</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[#f4c466] font-bold">04:50</span>
                                <span>1-Click NAAC Accession Reports</span>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button @click="openVideo('Granth Sanchay: Complete System Walkthrough', '05:45', 'Watch an in-depth walkthrough of dashboard analytics, book master cataloging, rapid barcode issue/return, and audit reports.')"
                                    class="w-full py-3.5 px-6 rounded-xl font-bold text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-lg hover:scale-102 transition-transform">
                                Watch Video Tour Now (5:45)
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Video Tutorial Grid -->
            <div class="mt-20">
                <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-[#2d070d]">
                        Module-Specific Video Tutorials
                    </h3>
                    <p class="text-sm text-stone-600">
                        Detailed step-by-step videos demonstrating individual tasks and operational workflows.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Video Card 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col justify-between"
                         @click="openVideo('Rapid Barcode Circulation Tutorial', '03:15', 'Learn how to scan member barcodes, verify borrowing limits, calculate fines, and complete returns in under 3 seconds.')">
                        <div class="relative overflow-hidden bg-black">
                            <img src="{{ asset('images/screenshot-circulation.jpg') }}" alt="Circulation Tutorial" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300 opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/10">
                                <div class="w-12 h-12 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform pl-0.5">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono font-bold px-2.5 py-0.5 rounded">
                                03:15
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider block mb-1">Circulation</span>
                            <h4 class="text-lg font-bold text-[#2d070d] group-hover:text-[#932a39] transition-colors mb-2">
                                Rapid Barcode Issue & Return
                            </h4>
                            <p class="text-xs text-stone-600 line-clamp-2">
                                How to connect USB or wireless barcode scanners and complete checkouts in 3 seconds.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col justify-between"
                         @click="openVideo('ISBN Auto-Cataloging & Accession', '04:10', 'Discover how to add 100+ books with automatic ISBN title/author fetching, Dewey Decimal classification, and rack mapping.')">
                        <div class="relative overflow-hidden bg-black">
                            <img src="{{ asset('images/screenshot-catalog.jpg') }}" alt="Catalog Tutorial" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300 opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/10">
                                <div class="w-12 h-12 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform pl-0.5">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono font-bold px-2.5 py-0.5 rounded">
                                04:10
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider block mb-1">Cataloging</span>
                            <h4 class="text-lg font-bold text-[#2d070d] group-hover:text-[#932a39] transition-colors mb-2">
                                ISBN Auto-Cataloging & Accession
                            </h4>
                            <p class="text-xs text-stone-600 line-clamp-2">
                                Add books in seconds by scanning the ISBN number to autofill authors, publishers, and titles.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col justify-between"
                         @click="openVideo('Student Web OPAC Portal Demo', '03:40', 'See how students search 50,000+ library books from their mobile browsers, check rack numbers, and hold titles.')">
                        <div class="relative overflow-hidden bg-black">
                            <img src="{{ asset('images/screenshot-opac.jpg') }}" alt="OPAC Demo" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300 opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/10">
                                <div class="w-12 h-12 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform pl-0.5">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono font-bold px-2.5 py-0.5 rounded">
                                03:40
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider block mb-1">Online OPAC</span>
                            <h4 class="text-lg font-bold text-[#2d070d] group-hover:text-[#932a39] transition-colors mb-2">
                                Student Web OPAC Portal Experience
                            </h4>
                            <p class="text-xs text-stone-600 line-clamp-2">
                                Experience the mobile-friendly student portal for searching books, reserving copies, and checking fines.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 4 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col justify-between"
                         @click="openVideo('Importing 10,000+ Books from Excel', '05:20', 'Learn how our built-in spreadsheet importer migrates your legacy library register into Granth Sanchay smoothly.')">
                        <div class="relative overflow-hidden bg-black">
                            <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Excel Import Tutorial" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300 opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/10">
                                <div class="w-12 h-12 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform pl-0.5">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono font-bold px-2.5 py-0.5 rounded">
                                05:20
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider block mb-1">Data Migration</span>
                            <h4 class="text-lg font-bold text-[#2d070d] group-hover:text-[#932a39] transition-colors mb-2">
                                Importing Books from Excel Sheets
                            </h4>
                            <p class="text-xs text-stone-600 line-clamp-2">
                                Step-by-step guidance on mapping Excel columns and bulk-importing legacy registers without data loss.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 5 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col justify-between"
                         @click="openVideo('Printing Barcode Stickers & Spine Tags', '02:50', 'How to automatically generate and print barcode stickers on standard A4 label sheets or thermal printers.')">
                        <div class="relative overflow-hidden bg-black">
                            <img src="{{ asset('images/screenshot-catalog.jpg') }}" alt="Barcode Printing Tutorial" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300 opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/10">
                                <div class="w-12 h-12 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform pl-0.5">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono font-bold px-2.5 py-0.5 rounded">
                                02:50
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider block mb-1">Hardware & Printing</span>
                            <h4 class="text-lg font-bold text-[#2d070d] group-hover:text-[#932a39] transition-colors mb-2">
                                Printing Barcode Labels & Spine Tags
                            </h4>
                            <p class="text-xs text-stone-600 line-clamp-2">
                                Customize and print barcode stickers, accession numbers, and spine tags directly on any office printer.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 6 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer flex flex-col justify-between"
                         @click="openVideo('NAAC & NBA Audit Accession Register', '04:15', 'How to generate certified Accession Registers, Lost Book audit reports, and student footfall analytics.')">
                        <div class="relative overflow-hidden bg-black">
                            <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Audit Report Tutorial" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300 opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/10">
                                <div class="w-12 h-12 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform pl-0.5">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-white text-[11px] font-mono font-bold px-2.5 py-0.5 rounded">
                                04:15
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider block mb-1">Accreditation</span>
                            <h4 class="text-lg font-bold text-[#2d070d] group-hover:text-[#932a39] transition-colors mb-2">
                                1-Click NAAC & NBA Audit Registers
                            </h4>
                            <p class="text-xs text-stone-600 line-clamp-2">
                                Generate inspection-ready accession registers and library statistical proofs in official institutional format.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Want a Custom Live Demo Banner -->
            <div class="mt-20 bg-gradient-to-r from-[#380a10] to-[#240509] rounded-3xl p-8 sm:p-12 text-white border-2 border-[#f4c466]/40 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="space-y-2 text-center md:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#f4c466]">Interactive 1-on-1 Session</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Prefer a Personalized Live Demo?</h3>
                    <p class="text-sm text-[#fcebc7]/80 max-w-xl">
                        Schedule an interactive Zoom / Google Meet or on-site demonstration tailored specifically to your institution's size and needs.
                    </p>
                </div>
                <div class="flex items-center gap-4 shrink-0">
                    <a href="{{ route('schedule-demo') }}" 
                       class="px-8 py-4 rounded-xl font-bold text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-105 transition-all">
                        Schedule Live Demo
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Video Modal Player -->
    <div x-show="modalOpen" 
         x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md"
         @keydown.escape.window="modalOpen = false">
        
        <div class="bg-[#1f0407] rounded-3xl max-w-4xl w-full border-2 border-[#f4c466]/40 shadow-2xl overflow-hidden relative"
             @click.away="modalOpen = false">
            
            <!-- Modal Header -->
            <div class="p-5 bg-[#2d070d] border-b border-[#460d15] flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold text-white" x-text="activeVideo.title"></h3>
                    <span class="text-xs text-[#f4c466] font-mono" x-text="'Duration: ' + activeVideo.duration"></span>
                </div>
                <button @click="modalOpen = false" class="text-white/70 hover:text-white p-2 rounded-lg hover:bg-white/10 text-xl font-bold">
                    ✕
                </button>
            </div>

            <!-- Video Player Simulation Container -->
            <div class="relative bg-black aspect-video flex flex-col items-center justify-center text-center p-6">
                <!-- Poster background -->
                <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Video Frame" class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none">
                
                <div class="relative z-10 max-w-md space-y-4">
                    <div class="w-16 h-16 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center mx-auto shadow-2xl animate-pulse">
                        <svg class="w-8 h-8 fill-current pl-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    <p class="text-sm text-stone-200" x-text="activeVideo.description"></p>
                    <div class="p-3 rounded-xl bg-[#380a10]/80 border border-[#f4c466]/30 text-xs text-[#fcebc7]">
                        <p class="font-bold text-[#f4c466] mb-1">Want an interactive, hands-on demonstration?</p>
                        <p>Our senior engineer will run this live on your screen and answer all your staff questions.</p>
                        <a href="{{ route('schedule-demo') }}" class="inline-block mt-3 px-5 py-2 rounded-lg font-bold text-xs text-[#2d070d] bg-[#f4c466] hover:bg-white transition-colors">
                            Book Free 1-on-1 Video Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="p-4 bg-[#240509] flex items-center justify-between text-xs text-[#fcebc7]/70">
                <span>Granth Sanchay Library Management Software</span>
                <a href="tel:+919328938959" class="text-[#f4c466] font-bold hover:underline">Support Helpline: +91 93289 38959</a>
            </div>

        </div>
    </div>

</div>
@endsection
