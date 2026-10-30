@extends('layouts.app')

@section('title', 'Features & Modules - Granth Sanchay Library Management Software')
@section('meta_description', 'Explore comprehensive features of Granth Sanchay: Book Accession, Barcode & RFID Circulation, Web OPAC, NAAC Reports, and Member Management.')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
            Granth Sanchay Feature Suite
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white">
            Comprehensive Features Built for <span class="text-[#f4c466]">Every Library Need</span>
        </h1>
        <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-3xl mx-auto leading-relaxed">
            From single-room school libraries to multi-faculty universities, Granth Sanchay streamlines day-to-day operations with modern, error-free automation.
        </p>
    </div>
</div>

<!-- Detailed Features Grid -->
<div class="py-20 bg-[#fdfaf3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Module 1: Cataloging & Accession -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#faebed] text-[#932a39] text-xs font-bold">
                    <span>Module 01</span>
                    <span>•</span>
                    <span>Cataloging</span>
                </div>
                <h2 class="text-3xl font-extrabold text-[#2d070d]">
                    Smart Book Master & Accession Register
                </h2>
                <p class="text-base text-stone-600 leading-relaxed">
                    Say goodbye to manual data entry errors. Granth Sanchay provides automated book lookup by ISBN, Dewey Decimal Classification (DDC) support, and precise rack/shelf mapping.
                </p>
                <ul class="space-y-3 text-sm text-stone-700">
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Instant ISBN Lookup:</strong> Automatically pull book title, author, publisher, and edition with one scan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Full Multilingual Support:</strong> Easily catalog Hindi, Marathi, Gujarati, Sanskrit, and English literature.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Rack & Shelf Locators:</strong> Assign exact physical storage coordinates (e.g. Rack 3B, Shelf 2) so any book can be found in seconds.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Bulk Excel Import:</strong> Migrate thousands of existing book records into the system with our one-click Excel importer.</span>
                    </li>
                </ul>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden shadow-xl border border-[#ede1cb] bg-white p-2">
                    <img src="{{ asset('images/screenshot-catalog.jpg') }}" alt="Granth Sanchay Catalog Screen" class="rounded-xl w-full h-auto">
                </div>
            </div>
        </div>

        <!-- Module 2: Circulation & Barcode -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1">
                <div class="rounded-2xl overflow-hidden shadow-xl border border-[#ede1cb] bg-white p-2">
                    <img src="{{ asset('images/screenshot-circulation.jpg') }}" alt="Circulation Desk Screen" class="rounded-xl w-full h-auto">
                </div>
            </div>
            <div class="lg:col-span-6 order-1 lg:order-2 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#faebed] text-[#932a39] text-xs font-bold">
                    <span>Module 02</span>
                    <span>•</span>
                    <span>Circulation</span>
                </div>
                <h2 class="text-3xl font-extrabold text-[#2d070d]">
                    High-Speed Barcode & RFID Circulation Desk
                </h2>
                <p class="text-base text-stone-600 leading-relaxed">
                    Designed to handle rush-hour counter crowds effortlessly. Issue and return books in under 3 seconds with automated rule checks.
                </p>
                <ul class="space-y-3 text-sm text-stone-700">
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Sub-3-Second Transactions:</strong> Scan member card, scan book barcode, done. Fast and error-free.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Configurable Lending Rules:</strong> Set different borrowing limits and loan periods for Students, Teachers, and Research Scholars.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Automated Fine Management:</strong> Calculates late fees by day, supports holiday calendar exclusions, and prints receipts.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Book Reservation Queue:</strong> Members can reserve already checked-out titles; librarians are notified upon book return.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Module 3: Web OPAC -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#faebed] text-[#932a39] text-xs font-bold">
                    <span>Module 03</span>
                    <span>•</span>
                    <span>Student OPAC</span>
                </div>
                <h2 class="text-3xl font-extrabold text-[#2d070d]">
                    Web OPAC (Online Public Access Catalog)
                </h2>
                <p class="text-base text-stone-600 leading-relaxed">
                    Make your library accessible 24/7. Students and faculties can search books from anywhere using any phone, tablet, or browser.
                </p>
                <ul class="space-y-3 text-sm text-stone-700">
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Instant Search Engine:</strong> Search across Title, Author, Subject, Publisher, Year, or Accession number.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Live Shelf Availability:</strong> View real-time availability ("In Stock" vs "Borrowed Until Oct 25").</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Student Borrowing Dashboard:</strong> Students can log in to view current checkouts, renewal dates, and fine balances.</span>
                    </li>
                </ul>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden shadow-xl border border-[#ede1cb] bg-white p-2">
                    <img src="{{ asset('images/screenshot-opac.jpg') }}" alt="Granth Sanchay OPAC Screen" class="rounded-xl w-full h-auto">
                </div>
            </div>
        </div>

        <!-- Module 4: Audit & NAAC Reports -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1">
                <div class="rounded-2xl overflow-hidden shadow-xl border border-[#ede1cb] bg-white p-2">
                    <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Audit Dashboard Screen" class="rounded-xl w-full h-auto">
                </div>
            </div>
            <div class="lg:col-span-6 order-1 lg:order-2 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#faebed] text-[#932a39] text-xs font-bold">
                    <span>Module 04</span>
                    <span>•</span>
                    <span>Audits & Reports</span>
                </div>
                <h2 class="text-3xl font-extrabold text-[#2d070d]">
                    1-Click NAAC, NBA & NIRF Compliance Reports
                </h2>
                <p class="text-base text-stone-600 leading-relaxed">
                    Preparing for accreditation inspections has never been easier. Generate standardized audit reports in seconds.
                </p>
                <ul class="space-y-3 text-sm text-stone-700">
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Official Accession Register:</strong> Full history of books acquired, costs, bills, and accession numbers.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Annual Stock Verification:</strong> Rapid batch audit tool to detect missing, damaged, or misplaced books.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Circulation Analytics:</strong> Track most-borrowed books, department-wise usage, and student footfall graphs.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#be8624] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>PDF & Excel Exports:</strong> Export any report instantly with college header, date stamp, and signature blocks.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- Hardware & Compatibility Section -->
<div class="bg-[#240509] text-white py-16 border-t border-[#460d15]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
                Zero Hassle Setup
            </span>
            <h2 class="text-3xl font-extrabold text-white">
                Works With Your Existing Hardware
            </h2>
            <p class="text-sm text-[#fcebc7]/80">
                No expensive proprietary machines required. Granth Sanchay is compatible with standard office peripherals.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 xl:gap-7 text-center">
            
            <!-- Hardware 1: Standard PC / Laptop -->
            <div class="support-card-wrapper relative group"
                 onmouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#170205] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#f4c466]/15 opacity-70 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#28050a] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#f4c466]/25 opacity-85 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#3d0910] via-[#2f060c] to-[#1c0307] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-[#f4c466] shadow-xl group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.85),0_0_25px_rgba(244,196,102,0.3)] transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-[#5c141e]/90 text-white border border-[#f4c466]/40 flex items-center justify-center mx-auto shadow-sm group-hover:scale-115 group-hover:shadow-[0_0_20px_rgba(244,196,102,0.4)] transition-all duration-300">
                            <span class="text-3xl">💻</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-[#ffe49e] transition-colors">Standard PC / Laptop</h3>
                        <p class="text-xs text-[#fcebc7]/80 leading-relaxed font-normal">Runs smoothly on Windows 10/11, macOS, and Linux with minimal system requirements.</p>
                    </div>

                    <div class="pt-3.5 mt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-[#f4c466] bg-[#1a0205] px-3 py-1 rounded-full border border-[#f4c466]/25 inline-block">Windows • macOS • Linux</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- Hardware 2: Barcode Scanners -->
            <div class="support-card-wrapper relative group"
                 onmouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#170205] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#f4c466]/15 opacity-70 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#28050a] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#f4c466]/25 opacity-85 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#3d0910] via-[#2f060c] to-[#1c0307] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-[#f4c466] shadow-xl group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.85),0_0_25px_rgba(244,196,102,0.3)] transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-[#5c141e]/90 text-white border border-[#f4c466]/40 flex items-center justify-center mx-auto shadow-sm group-hover:scale-115 group-hover:shadow-[0_0_20px_rgba(244,196,102,0.4)] transition-all duration-300">
                            <span class="text-3xl">🏷️</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-[#ffe49e] transition-colors">Barcode Scanners</h3>
                        <p class="text-xs text-[#fcebc7]/80 leading-relaxed font-normal">Supports all standard 1D/2D USB, wireless, and Bluetooth handheld barcode scanners.</p>
                    </div>

                    <div class="pt-3.5 mt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-[#f4c466] bg-[#1a0205] px-3 py-1 rounded-full border border-[#f4c466]/25 inline-block">1D / 2D / QR Handhelds</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- Hardware 3: Laser & Thermal Printers -->
            <div class="support-card-wrapper relative group"
                 onmouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#170205] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#f4c466]/15 opacity-70 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#28050a] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#f4c466]/25 opacity-85 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#3d0910] via-[#2f060c] to-[#1c0307] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-[#f4c466] shadow-xl group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.85),0_0_25px_rgba(244,196,102,0.3)] transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-[#5c141e]/90 text-white border border-[#f4c466]/40 flex items-center justify-center mx-auto shadow-sm group-hover:scale-115 group-hover:shadow-[0_0_20px_rgba(244,196,102,0.4)] transition-all duration-300">
                            <span class="text-3xl">🖨️</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-[#ffe49e] transition-colors">Laser & Thermal Printers</h3>
                        <p class="text-xs text-[#fcebc7]/80 leading-relaxed font-normal">Prints barcode stickers, spine tags, receipt slips, and accession reports on any regular printer.</p>
                    </div>

                    <div class="pt-3.5 mt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-[#f4c466] bg-[#1a0205] px-3 py-1 rounded-full border border-[#f4c466]/25 inline-block">Receipt & Spine Labels</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- Hardware 4: RFID Gates & Tags -->
            <div class="support-card-wrapper relative group"
                 onmouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#170205] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#f4c466]/15 opacity-70 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#28050a] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#f4c466]/25 opacity-85 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#3d0910] via-[#2f060c] to-[#1c0307] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-[#f4c466] shadow-xl group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.85),0_0_25px_rgba(244,196,102,0.3)] transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-[#5c141e]/90 text-white border border-[#f4c466]/40 flex items-center justify-center mx-auto shadow-sm group-hover:scale-115 group-hover:shadow-[0_0_20px_rgba(244,196,102,0.4)] transition-all duration-300">
                            <span class="text-3xl">📡</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-[#ffe49e] transition-colors">RFID Gates & Tags</h3>
                        <p class="text-xs text-[#fcebc7]/80 leading-relaxed font-normal">Optional RFID integration for high-security campus libraries and self-kiosks.</p>
                    </div>

                    <div class="pt-3.5 mt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-[#f4c466] bg-[#1a0205] px-3 py-1 rounded-full border border-[#f4c466]/25 inline-block">Anti-Theft Gates & Kiosks</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('schedule-demo') }}" 
               class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-bold text-base text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-105 transition-all">
                <span>See All Features in Live Demo</span>
                <span>→</span>
            </a>
        </div>
    </div>
</div>

<style>
/* Page Sheen Sweep Animation on Card Hover */
.page-sheen-sweep {
    position: absolute;
    inset: 0;
    background: linear-gradient(115deg, transparent 20%, rgba(255, 255, 255, 0.18) 45%, rgba(255, 255, 255, 0.35) 50%, transparent 65%);
    opacity: 0;
    transform: translateX(-100%);
    transition: opacity 0.3s ease, transform 0.8s ease;
    z-index: 15;
}
.support-card-wrapper:hover .page-sheen-sweep {
    opacity: 1;
    transform: translateX(100%);
}

/* 3D Page Curl Dog-Ear in Bottom-Right Corner */
.page-curl-corner {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 36px;
    height: 36px;
    z-index: 25;
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
}
.page-curl-fold {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 0 34px 34px;
    border-color: transparent transparent #dfa839 transparent;
    filter: drop-shadow(-3px -3px 4px rgba(0, 0, 0, 0.4));
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
}

/* Hover expansion of page curl */
.support-card-wrapper:hover .page-curl-corner {
    width: 52px;
    height: 52px;
}
.support-card-wrapper:hover .page-curl-fold {
    border-width: 0 0 50px 50px;
    filter: drop-shadow(-5px -5px 8px rgba(0, 0, 0, 0.6));
}
</style>

<script>
// Web Audio API Crisp Paper Rustle Synthesizer
window.playGranthRustle = window.playGranthRustle || function() {
    try {
        const AudioCtx = window.AudioContext || window.webkitAudioContext;
        if (!AudioCtx) return;
        const ctx = new AudioCtx();
        if (ctx.state === 'suspended') ctx.resume();
        
        const bufferSize = Math.floor(ctx.sampleRate * 0.16);
        const buffer = ctx.createBuffer(1, bufferSize, ctx.sampleRate);
        const data = buffer.getChannelData(0);
        for (let i = 0; i < bufferSize; i++) {
            data[i] = (Math.random() * 2 - 1) * Math.exp(-i / (bufferSize * 0.35));
        }

        const noise = ctx.createBufferSource();
        noise.buffer = buffer;

        const filter = ctx.createBiquadFilter();
        filter.type = 'bandpass';
        filter.frequency.setValueAtTime(1400, ctx.currentTime);
        filter.frequency.exponentialRampToValueAtTime(320, ctx.currentTime + 0.16);
        filter.Q.value = 1.6;

        const gain = ctx.createGain();
        gain.gain.setValueAtTime(0.001, ctx.currentTime);
        gain.gain.linearRampToValueAtTime(0.035, ctx.currentTime + 0.02);
        gain.gain.exponentialRampToValueAtTime(0.0001, ctx.currentTime + 0.16);

        noise.connect(filter);
        filter.connect(gain);
        gain.connect(ctx.destination);

        noise.start(ctx.currentTime);
    } catch (e) {}
};
</script>
@endsection
