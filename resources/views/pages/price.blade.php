@extends('layouts.app')

@section('title', 'Pricing Plans - Granth Sanchay Library Management Software')
@section('meta_description', 'Transparent pricing for Granth Sanchay Library Management Software. Affordable plans for Schools, Colleges, and Universities with zero hidden costs.')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
            Transparent Institutional Investment
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white">
            Affordable Plans Tailored for <span class="text-[#f4c466]">Every Library</span>
        </h1>
        <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
            No expensive hidden fees or forced hardware bundles. Choose the right tier for your institution with free Excel data migration included.
        </p>
    </div>
</div>

<!-- Pricing Cards -->
<div class="py-20 bg-[#fdfaf3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            
            <!-- Plan 1: School Starter -->
            <div class="bg-white rounded-3xl p-8 border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative">
                <div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-stone-100 text-stone-700 mb-4">
                        Schools & Small Libraries
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#2d070d] mb-1">Starter Edition</h3>
                    <p class="text-xs text-stone-500 mb-6">Ideal for primary, secondary schools, trusts, and tuition academies.</p>

                    <div class="mb-6 pb-6 border-b border-[#ede1cb]">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl sm:text-4xl font-black text-[#2d070d]">₹11,999</span>
                            <span class="text-xs text-stone-500 font-medium">/ one-time license</span>
                        </div>
                        <span class="text-[11px] text-emerald-700 font-semibold mt-1 block">✓ Complete lifetime software access</span>
                    </div>

                    <ul class="space-y-3.5 text-xs sm:text-sm text-stone-700 mb-8">
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Up to <strong>5,000 Book Titles</strong></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Up to <strong>800 Student/Faculty Members</strong></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Single PC / Counter Terminal</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Fast Barcode Issue & Return</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Print Barcode Labels & Spine Tags</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Daily Issue / Return Report</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>1 Year Telephone & AnyDesk Support</span>
                        </li>
                        <li class="flex items-center gap-2.5 text-stone-400">
                            <span>✕</span>
                            <span class="line-through">Online Web OPAC</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('schedule-demo') }}" 
                   class="w-full py-3.5 px-4 rounded-xl font-bold text-center text-sm text-[#2d070d] bg-[#f8f2e4] hover:bg-[#f4c466] border border-[#ede1cb] hover:border-[#dfa839] transition-all">
                    Choose Starter Plan
                </a>
            </div>

            <!-- Plan 2: College Professional (Popular Highlight) -->
            <div class="bg-gradient-to-b from-[#380a10] to-[#240509] rounded-3xl p-8 border-2 border-[#f4c466] shadow-2xl transition-all duration-300 flex flex-col justify-between text-white relative transform lg:-translate-y-3">
                
                <!-- Popular Badge -->
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full text-xs font-black uppercase tracking-wider text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-lg">
                    ★ Most Popular for Colleges
                </div>

                <div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-[#5c141e] text-[#f4c466] mb-4 mt-2">
                        Degree & Diploma Colleges
                    </div>
                    <h3 class="text-2xl font-extrabold text-white mb-1">Professional Edition</h3>
                    <p class="text-xs text-[#fcebc7]/70 mb-6">For degree colleges, polytechnics, senior libraries, and institutes.</p>

                    <div class="mb-6 pb-6 border-b border-[#5c141e]">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl sm:text-4xl font-black text-[#f4c466]">₹24,999</span>
                            <span class="text-xs text-[#fcebc7]/60 font-medium">/ institutional license</span>
                        </div>
                        <span class="text-[11px] text-emerald-400 font-semibold mt-1 block">✓ Complete Multi-User LAN + Web OPAC</span>
                    </div>

                    <ul class="space-y-3.5 text-xs sm:text-sm text-[#fcebc7]/90 mb-8">
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span>Up to <strong>25,000 Book Titles</strong></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span><strong>Unlimited</strong> Students & Faculty Members</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span>Multi-User Network (Up to 5 LAN Terminals)</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span><strong>Online Web OPAC</strong> (Mobile & PC Student Search)</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span><strong>NAAC & NBA Certified Audit Accession Reports</strong></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span>Batch Student Barcode ID Card Generator</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span>Automated Daily Encrypted Cloud Backup</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-[#f4c466] font-bold">✓</span>
                            <span>Priority VIP Remote & Phone Support</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('schedule-demo') }}" 
                   class="w-full py-4 px-4 rounded-xl font-bold text-center text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-102 transition-all">
                    Choose Professional (Recommended)
                </a>
            </div>

            <!-- Plan 3: University Enterprise -->
            <div class="bg-white rounded-3xl p-8 border border-[#ede1cb] shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative">
                <div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-stone-100 text-stone-700 mb-4">
                        Universities & Multi-Campus
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#2d070d] mb-1">Campus Enterprise</h3>
                    <p class="text-xs text-stone-500 mb-6">Designed for university campuses, group of institutions, and RFID libraries.</p>

                    <div class="mb-6 pb-6 border-b border-[#ede1cb]">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl sm:text-4xl font-black text-[#2d070d]">Custom</span>
                            <span class="text-xs text-stone-500 font-medium">/ based on requirements</span>
                        </div>
                        <span class="text-[11px] text-blue-700 font-semibold mt-1 block">✓ Full RFID Gates, Kiosks & Multi-Branch</span>
                    </div>

                    <ul class="space-y-3.5 text-xs sm:text-sm text-stone-700 mb-8">
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span><strong>Unlimited</strong> Books & Digital Assets</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Multi-Branch & Multi-Faculty Libraries</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span><strong>Full RFID Gate & Self-Check Kiosk Support</strong></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Custom College ERP / SIS Integration API</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Dedicated Account Manager & On-Site Setup</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Cloud Hosting or On-Premise Enterprise Server</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}" 
                   class="w-full py-3.5 px-4 rounded-xl font-bold text-center text-sm text-[#2d070d] bg-[#f8f2e4] hover:bg-[#f4c466] border border-[#ede1cb] hover:border-[#dfa839] transition-all">
                    Request Custom Quote
                </a>
            </div>

        </div>

        <!-- Free Inclusions Banner -->
        <div class="mt-16 bg-[#faebed] border border-[#932a39]/20 rounded-3xl p-8 text-[#2d070d]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="space-y-1">
                    <span class="text-2xl">📊</span>
                    <h4 class="font-bold text-base text-[#932a39]">Free Excel Data Migration</h4>
                    <p class="text-xs text-stone-600">Our engineers will safely convert your existing spreadsheet into Granth Sanchay without extra charge.</p>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl">🎓</span>
                    <h4 class="font-bold text-base text-[#932a39]">Complete Staff Training</h4>
                    <p class="text-xs text-stone-600">We train your librarians and assistants via live remote sessions until they are 100% confident.</p>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl">🛡️</span>
                    <h4 class="font-bold text-base text-[#932a39]">1 Year Priority Support</h4>
                    <p class="text-xs text-stone-600">Direct phone hotline (+91 93289 38959) and AnyDesk remote desktop assistance when you need it.</p>
                </div>
            </div>
        </div>

        <!-- Pricing FAQ Accordion -->
        <div class="mt-20 max-w-3xl mx-auto space-y-6">
            <div class="text-center space-y-2">
                <h3 class="text-2xl font-extrabold text-[#2d070d]">Frequently Asked Questions</h3>
                <p class="text-sm text-stone-600">Have questions about pricing, licenses, or installation?</p>
            </div>

            <div class="space-y-4" x-data="{ openFaq: null }">
                
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d]">
                        <span>Are there any recurring monthly charges?</span>
                        <span x-text="openFaq === 1 ? '−' : '+'" class="text-xl text-[#932a39]"></span>
                    </button>
                    <div x-show="openFaq === 1" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        No! We believe in transparent institutional licensing. Our Starter and Professional editions come with full lifetime software rights. Optional Annual Maintenance Contracts (AMC) for ongoing upgrades and priority hotline are available at very modest rates after Year 1.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d]">
                        <span>Do we have to buy new computers or scanners?</span>
                        <span x-text="openFaq === 2 ? '−' : '+'" class="text-xl text-[#932a39]"></span>
                    </button>
                    <div x-show="openFaq === 2" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        No. Granth Sanchay is designed to work with your existing computer hardware (Windows 10/11, Mac, Linux) and any standard USB or wireless barcode scanner from TVS, Honeywell, Zebra, or generic brands.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d]">
                        <span>Can we test Granth Sanchay before making a payment?</span>
                        <span x-text="openFaq === 3 ? '−' : '+'" class="text-xl text-[#932a39]"></span>
                    </button>
                    <div x-show="openFaq === 3" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        Absolutely! Click on "Schedule a demo" or call us at +91 93289 38959. We will arrange a full live 1-on-1 walkthrough where you can test barcode scanning and cataloging with your own sample data.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d]">
                        <span>How long does installation and data migration take?</span>
                        <span x-text="openFaq === 4 ? '−' : '+'" class="text-xl text-[#932a39]"></span>
                    </button>
                    <div x-show="openFaq === 4" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        In most schools and colleges, complete installation and Excel migration is completed within 24 to 48 hours. Your library can be fully automated and scanning barcodes by the very next day.
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
