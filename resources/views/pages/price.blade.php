@extends('layouts.app')

@section('title', 'Pricing Plans - Granth Sanchay Library Management Software')
@section('meta_description', 'Transparent pricing for Granth Sanchay Library Management Software. Affordable plans for Schools, Colleges, and Universities with zero hidden costs.')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15] relative overflow-hidden">
    <!-- Subtle Golden Background Filigree -->
    <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#f4c466 1px, transparent 1px); background-size: 28px 28px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4 relative z-10">
        <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e]/90 px-4 py-1.5 rounded-full border border-[#f4c466]/40 shadow-sm">
            <span>📜</span>
            <span>Transparent Institutional Investment • NAAC Accredited</span>
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
            Affordable Plans Tailored for <span class="text-[#f4c466]">Every Library</span>
        </h1>
        <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
            Zero hidden recurring fees, no vendor lock-in, and 100% free Excel migration. Select your institutional volume below.
        </p>

        <!-- Feature Subtitle / Tagline -->
        <div class="pt-2 flex items-center justify-center gap-2 text-xs text-[#fcebc7]/70">
            <span class="inline-block text-[#f4c466]">📖</span>
            <span>Interactive Archival Folios • 100% Transparent Institutional Licensing</span>
        </div>
    </div>
</div>

<!-- Pricing Section (Archival Library Desk) -->
<div class="py-20 bg-[#faf6ed] relative overflow-hidden" style="background-image: radial-gradient(ellipse at 50% 20%, rgba(244,196,102,0.12), transparent 70%);">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 xl:gap-10 items-stretch">
            
            <!-- ========================================== -->
            <!-- PLAN 1: SCHOOL STARTER EDITION             -->
            <!-- ========================================== -->
            <div class="pricing-card-wrapper relative group"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                
                <!-- Physical Stacked Book Sheets (Book Thickness) -->
                <div class="absolute inset-0 bg-[#e3d7bf] rounded-3xl translate-x-3 translate-y-3.5 shadow-md border border-[#cbbfa6] opacity-75 transition-all duration-500 group-hover:translate-x-4 group-hover:translate-y-4.5 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#eee4d0] rounded-3xl translate-x-1.5 translate-y-2 shadow-sm border border-[#ded3be] opacity-90 transition-all duration-500 group-hover:translate-x-2.5 group-hover:translate-y-2.5 pointer-events-none"></div>

                <!-- Main Book Page Folio -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#fffefc] via-[#fbf7f0] to-[#f5ede2] rounded-3xl p-7 sm:p-8 border-2 border-[#dfa839]/40 group-hover:border-[#dfa839] shadow-lg group-hover:shadow-2xl transition-all duration-500 flex flex-col justify-between relative overflow-hidden group-hover:[transform:perspective(1200px)_rotateY(-6deg)_rotateX(2deg)_translateY(-10px)]">
                    
                    <!-- Page Sheen Gradient on Hover -->
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div>
                        <!-- Header Pill -->
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-[#380a10] text-[#f4c466] border border-[#f4c466]/30 mb-4 shadow-sm">
                            <span>🏫</span>
                            <span>Schools & Small Libraries</span>
                        </div>

                        <h3 class="text-2xl font-extrabold text-[#2d070d] tracking-tight mb-1">Starter Edition</h3>
                        <p class="text-xs text-stone-600 mb-5 leading-relaxed">Ideal for primary, secondary schools, trusts, and tuition academies.</p>

                        <!-- Price Display -->
                        <div class="mb-5 pb-5 border-b border-[#dfa839]/25 bg-[#faf4e8]/60 p-4 rounded-2xl border">
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-3xl sm:text-4xl font-black text-[#2d070d]">₹11,999</span>
                                <span class="text-xs text-stone-500 font-semibold">/ one-time license</span>
                            </div>
                            <div class="flex items-center gap-1.5 mt-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                                <span class="text-[11px] text-emerald-800 font-bold bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                                    ✓ Complete lifetime software access
                                </span>
                            </div>
                        </div>

                        <!-- Features List -->
                        <ul class="space-y-3 text-xs sm:text-sm text-stone-700 mb-6">
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Up to <strong>5,000 Book Titles</strong></span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Up to <strong>800 Student/Faculty Members</strong></span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Single PC / Counter Terminal</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Fast Barcode Issue & Return (1.5s scan)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Print Barcode Labels & Spine Tags</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Daily Issue / Return & Overdue Reports</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>1 Year Priority Hotline & AnyDesk Support</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-stone-400">
                                <span class="w-5 h-5 rounded-full bg-stone-100 text-stone-400 font-bold text-xs flex items-center justify-center shrink-0">✕</span>
                                <span class="line-through">Online Web OPAC</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action Button -->
                    <div class="pt-2">
                        <a href="{{ route('schedule-demo') }}" 
                           class="w-full py-3.5 px-4 rounded-xl font-bold text-center text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] hover:from-[#f4c466] hover:to-[#ffe49e] border border-[#dfa839] shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 group-hover:scale-[1.02]">
                            <span>Choose Starter Plan</span>
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                    <!-- 3D Dynamic Corner Page Curl (Bottom-Right) -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- PLAN 2: COLLEGE PROFESSIONAL (HERO EDITION)-->
            <!-- ========================================== -->
            <div class="pricing-card-wrapper relative group transform lg:-translate-y-4"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                
                <!-- 3D Top Royal Crown Banner -->
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-5 py-1.5 rounded-full text-[11px] font-black uppercase tracking-wider text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-2xl border-2 border-white/60 flex items-center gap-1.5 z-30 pointer-events-none whitespace-nowrap">
                    <span>👑</span>
                    <span>Most Popular for Colleges</span>
                </div>

                <!-- Physical Stacked Book Sheets (Book Thickness with Golden Edge) -->
                <div class="absolute inset-0 bg-[#2d070d] rounded-3xl translate-x-3.5 translate-y-4 shadow-xl border border-[#f4c466]/30 opacity-80 transition-all duration-500 group-hover:translate-x-5 group-hover:translate-y-5 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#3d0910] rounded-3xl translate-x-2 translate-y-2.5 shadow-md border border-[#f4c466]/40 opacity-90 transition-all duration-500 group-hover:translate-x-3 group-hover:translate-y-3 pointer-events-none"></div>

                <!-- Main Book Page Folio -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#460d15] via-[#29050b] to-[#190205] text-white rounded-3xl p-7 sm:p-8 pt-9 border-2 border-[#f4c466] shadow-[0_20px_50px_rgba(223,168,57,0.25)] group-hover:shadow-[0_25px_60px_rgba(223,168,57,0.4)] transition-all duration-500 flex flex-col justify-between relative overflow-hidden group-hover:[transform:perspective(1200px)_rotateY(-6deg)_rotateX(2deg)_translateY(-12px)]">
                    
                    <!-- Golden Sheen Sweep on Hover -->
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="pt-3">
                        <!-- Category Pill -->
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-[#5c141e] text-[#f4c466] border border-[#f4c466]/40 mb-3 shadow-sm">
                            <span>🏛️</span>
                            <span>Degree & Diploma Colleges</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-1">Professional Edition</h3>
                        <p class="text-xs text-[#fcebc7]/70 mb-5 leading-relaxed">For degree colleges, polytechnics, senior libraries, and institutes.</p>

                        <!-- Price Display -->
                        <div class="mb-5 pb-5 border-b border-[#f4c466]/30 bg-[#1e0307]/80 p-4 rounded-2xl border border-[#f4c466]/20">
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-3xl sm:text-4xl font-black text-[#f4c466]">₹24,999</span>
                                <span class="text-xs text-[#fcebc7]/70 font-semibold">/ institutional license</span>
                            </div>
                            <div class="flex items-center gap-1.5 mt-2">
                                <span class="w-2 h-2 rounded-full bg-[#f4c466] animate-ping"></span>
                                <span class="text-[11px] text-[#ffe49e] font-bold bg-[#5c141e]/90 px-2.5 py-0.5 rounded-md border border-[#f4c466]/40">
                                    ✓ Complete Multi-User LAN + Web OPAC
                                </span>
                            </div>
                        </div>

                        <!-- Features List -->
                        <ul class="space-y-3 text-xs sm:text-sm text-[#fcebc7]/90 mb-6">
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span>Up to <strong>25,000 Book Titles</strong></span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span><strong>Unlimited</strong> Students & Faculty Members</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span>Multi-User Network (Up to 5 LAN Terminals)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span><strong>Online Web OPAC</strong> (Mobile & PC Student Search)</span>
                            </li>
                            
                            <!-- Special NAAC Highlight Item -->
                            <li class="p-2 rounded-xl bg-[#5c141e]/70 border border-[#f4c466]/40 flex items-center gap-2.5">
                                <span class="text-base text-[#f4c466]">🏆</span>
                                <span class="text-[#ffe49e] font-bold">NAAC & NBA Certified Audit Accession Reports</span>
                            </li>

                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span>Batch Student Barcode ID Card Generator</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span>Automated Daily Encrypted Cloud Backup</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#f4c466]/20 text-[#f4c466] font-bold text-xs flex items-center justify-center shrink-0 border border-[#f4c466]/40">✓</span>
                                <span>Priority VIP Remote & Direct Phone Hotline</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action Button -->
                    <div class="pt-2">
                        <a href="{{ route('schedule-demo') }}" 
                           class="w-full py-4 px-4 rounded-xl font-black text-center text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] hover:from-[#f4c466] hover:to-[#ffe49e] shadow-xl hover:shadow-2xl transition-all flex items-center justify-center gap-2 group-hover:scale-[1.03]">
                            <span>Choose Professional (Recommended)</span>
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                    <!-- 3D Dynamic Corner Page Curl (Bottom-Right) -->
                    <div class="page-curl-corner dark-page-curl pointer-events-none">
                        <div class="page-curl-fold dark-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- PLAN 3: CAMPUS ENTERPRISE                  -->
            <!-- ========================================== -->
            <div class="pricing-card-wrapper relative group"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                
                <!-- Physical Stacked Book Sheets (Book Thickness) -->
                <div class="absolute inset-0 bg-[#d8dfe8] rounded-3xl translate-x-3 translate-y-3.5 shadow-md border border-[#c2cbda] opacity-75 transition-all duration-500 group-hover:translate-x-4 group-hover:translate-y-4.5 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#e6ecf4] rounded-3xl translate-x-1.5 translate-y-2 shadow-sm border border-[#d2dbe8] opacity-90 transition-all duration-500 group-hover:translate-x-2.5 group-hover:translate-y-2.5 pointer-events-none"></div>

                <!-- Main Book Page Folio -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#ffffff] via-[#f7f9fc] to-[#edf2f8] rounded-3xl p-7 sm:p-8 border-2 border-[#cbd5e1] group-hover:border-[#1e3a8a]/40 shadow-lg group-hover:shadow-2xl transition-all duration-500 flex flex-col justify-between relative overflow-hidden group-hover:[transform:perspective(1200px)_rotateY(-6deg)_rotateX(2deg)_translateY(-10px)]">
                    
                    <!-- Page Sheen Gradient on Hover -->
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div>
                        <!-- Header Pill -->
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-[#1e3a8a] text-white mb-4 shadow-sm">
                            <span>🏢</span>
                            <span>Universities & Multi-Campus</span>
                        </div>

                        <h3 class="text-2xl font-extrabold text-[#2d070d] tracking-tight mb-1">Campus Enterprise</h3>
                        <p class="text-xs text-stone-600 mb-5 leading-relaxed">Designed for university campuses, group of institutions, and RFID libraries.</p>

                        <!-- Price Display -->
                        <div class="mb-5 pb-5 border-b border-stone-200 bg-[#f1f5f9]/70 p-4 rounded-2xl border border-stone-200">
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-3xl sm:text-4xl font-black text-[#2d070d]">Custom</span>
                                <span class="text-xs text-stone-500 font-semibold">/ based on requirements</span>
                            </div>
                            <div class="flex items-center gap-1.5 mt-2">
                                <span class="w-2 h-2 rounded-full bg-blue-600 animate-ping"></span>
                                <span class="text-[11px] text-blue-800 font-bold bg-blue-50 px-2.5 py-0.5 rounded-md border border-blue-200">
                                    ✓ Full RFID Gates, Kiosks & Multi-Branch
                                </span>
                            </div>
                        </div>

                        <!-- Features List -->
                        <ul class="space-y-3 text-xs sm:text-sm text-stone-700 mb-6">
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span><strong>Unlimited</strong> Books & Digital Assets</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Multi-Branch & Multi-Faculty Libraries</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span><strong>Full RFID Gate & Self-Check Kiosk Support</strong></span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Custom College ERP / SIS Integration API</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Dedicated Account Manager & On-Site Setup</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                                <span>Cloud Hosting or On-Premise Enterprise Server</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action Button -->
                    <div class="pt-2">
                        <a href="{{ route('contact') }}" 
                           class="w-full py-3.5 px-4 rounded-xl font-bold text-center text-sm text-white bg-gradient-to-r from-[#1e3a8a] via-[#1e40af] to-[#2563eb] hover:brightness-110 shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 group-hover:scale-[1.02]">
                            <span>Request Custom Quote</span>
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                    <!-- 3D Dynamic Corner Page Curl (Bottom-Right) -->
                    <div class="page-curl-corner enterprise-page-curl pointer-events-none">
                        <div class="page-curl-fold enterprise-curl-fold"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Free Inclusions Banner -->
        <div class="mt-20 bg-gradient-to-r from-[#faebed] via-[#fdeff0] to-[#faebed] border-2 border-[#932a39]/25 rounded-3xl p-8 sm:p-10 text-[#2d070d] shadow-lg relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-[#f4c466]/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center relative z-10">
                <div class="space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#380a10] text-[#f4c466] flex items-center justify-center text-2xl shadow-md border border-[#f4c466]/30">
                        📊
                    </div>
                    <h4 class="font-black text-base text-[#932a39]">Free Excel Data Migration</h4>
                    <p class="text-xs text-stone-600 leading-relaxed">Our senior database engineers will safely format and convert your existing spreadsheet into Granth Sanchay without extra charge.</p>
                </div>
                
                <div class="space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#380a10] text-[#f4c466] flex items-center justify-center text-2xl shadow-md border border-[#f4c466]/30">
                        🎓
                    </div>
                    <h4 class="font-black text-base text-[#932a39]">Complete Staff Training</h4>
                    <p class="text-xs text-stone-600 leading-relaxed">We train your librarians and assistants via live interactive remote video sessions until your entire department is 100% confident.</p>
                </div>
                
                <div class="space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#380a10] text-[#f4c466] flex items-center justify-center text-2xl shadow-md border border-[#f4c466]/30">
                        🛡️
                    </div>
                    <h4 class="font-black text-base text-[#932a39]">1 Year Priority Support</h4>
                    <p class="text-xs text-stone-600 leading-relaxed">Direct phone hotline (+91 93289 38959), WhatsApp support, and AnyDesk remote desktop assistance anytime you need it.</p>
                </div>
            </div>
        </div>

        <!-- Pricing FAQ Accordion -->
        <div class="mt-20 max-w-3xl mx-auto space-y-6">
            <div class="text-center space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-[#932a39] bg-[#faebed] px-3.5 py-1 rounded-full border border-[#932a39]/20">
                    Transparent Answers
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-[#2d070d]">Frequently Asked Questions</h3>
                <p class="text-sm text-stone-600">Have questions about pricing, licenses, or installation?</p>
            </div>

            <div class="space-y-4" x-data="{ openFaq: null }">
                
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm transition-all hover:border-[#dfa839]">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d] cursor-pointer">
                        <span>Are there any recurring monthly charges?</span>
                        <span x-text="openFaq === 1 ? '−' : '+'" class="text-xl text-[#932a39] font-black"></span>
                    </button>
                    <div x-show="openFaq === 1" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        No! We believe in transparent institutional licensing. Our Starter and Professional editions come with full lifetime software rights. Optional Annual Maintenance Contracts (AMC) for ongoing upgrades and priority hotline are available at very modest rates after Year 1.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm transition-all hover:border-[#dfa839]">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d] cursor-pointer">
                        <span>Do we have to buy new computers or scanners?</span>
                        <span x-text="openFaq === 2 ? '−' : '+'" class="text-xl text-[#932a39] font-black"></span>
                    </button>
                    <div x-show="openFaq === 2" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        No. Granth Sanchay is designed to work with your existing computer hardware (Windows 10/11, Mac, Linux) and any standard USB or wireless barcode scanner from TVS, Honeywell, Zebra, or generic brands.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm transition-all hover:border-[#dfa839]">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d] cursor-pointer">
                        <span>Can we test Granth Sanchay before making a payment?</span>
                        <span x-text="openFaq === 3 ? '−' : '+'" class="text-xl text-[#932a39] font-black"></span>
                    </button>
                    <div x-show="openFaq === 3" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        Absolutely! Click on "Schedule a demo" or call us at +91 93289 38959. We will arrange a full live 1-on-1 walkthrough where you can test barcode scanning and cataloging with your own sample data.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl border border-[#ede1cb] p-5 shadow-sm transition-all hover:border-[#dfa839]">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left flex items-center justify-between font-bold text-base text-[#2d070d] cursor-pointer">
                        <span>How long does installation and data migration take?</span>
                        <span x-text="openFaq === 4 ? '−' : '+'" class="text-xl text-[#932a39] font-black"></span>
                    </button>
                    <div x-show="openFaq === 4" x-cloak class="mt-3 text-sm text-stone-600 leading-relaxed border-t border-stone-100 pt-3">
                        In most schools and colleges, complete installation and Excel migration is completed within 24 to 48 hours. Your library can be fully automated and scanning barcodes by the very next day.
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<style>
/* Page Sheen Sweep Animation on Card Hover */
.page-sheen-sweep {
    position: absolute;
    inset: 0;
    background: linear-gradient(115deg, transparent 20%, rgba(255, 255, 255, 0.25) 45%, rgba(255, 255, 255, 0.4) 50%, transparent 65%);
    opacity: 0;
    transform: translateX(-100%);
    transition: opacity 0.3s ease, transform 0.8s ease;
    z-index: 15;
}
.pricing-card-wrapper:hover .page-sheen-sweep {
    opacity: 1;
    transform: translateX(100%);
}

/* 3D Page Curl Dog-Ear in Bottom-Right Corner (Fold Only, No Text) */
.page-curl-corner {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 44px;
    height: 44px;
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
    border-width: 0 0 42px 42px;
    border-color: transparent transparent #e8dcc4 transparent;
    filter: drop-shadow(-3px -3px 4px rgba(0, 0, 0, 0.18));
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
}
.dark-curl-fold {
    border-color: transparent transparent #f4c466 transparent;
    filter: drop-shadow(-3px -3px 5px rgba(0, 0, 0, 0.35));
}
.enterprise-curl-fold {
    border-color: transparent transparent #cbd5e1 transparent;
}

/* Hover expansion of page curl (smooth corner peeling effect) */
.pricing-card-wrapper:hover .page-curl-corner {
    width: 68px;
    height: 68px;
}
.pricing-card-wrapper:hover .page-curl-fold {
    border-width: 0 0 66px 66px;
    filter: drop-shadow(-5px -5px 7px rgba(0, 0, 0, 0.28));
}
.pricing-card-wrapper:hover .dark-curl-fold {
    filter: drop-shadow(-5px -5px 8px rgba(0, 0, 0, 0.5));
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
    } catch (e) {
        // AudioContext silent fail
    }
};
</script>
@endsection
