@extends('layouts.app')

@section('title', 'Login Portal - Granth Sanchay (ग्रंथसंचय) Library Management Software')
@section('meta_description', 'Official secure login portal for librarians, staff, administrators, and student OPAC members of Granth Sanchay Library Management Software.')

@section('content')
<!-- ========================================================================= -->
<!-- REAL 3D OPEN GRANTH BOOK FLIP AUTHENTICATION PORTAL (UI ONLY)             -->
<!-- ========================================================================= -->
<div class="relative min-h-[calc(100vh-140px)] bg-[#120204] text-white overflow-hidden py-8 sm:py-12 flex flex-col items-center justify-center">

    <!-- Atmospheric Sacred Granth Parallax Background Layer -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none select-none z-0">
        <!-- Open Granth Background Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-30 will-change-transform" 
             style="background-image: url('{{ asset('images/open-granth-real.jpg') }}'); -webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 100%); mask-image: linear-gradient(to bottom, black 70%, transparent 100%);">
        </div>

        <!-- Atmospheric Vignettes & Contrast Overlays -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#140204]/85 via-[#180205]/80 to-[#120204]/95"></div>
        <div class="absolute inset-0 bg-radial-at-c from-transparent via-[#200408]/75 to-[#140204]/90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,rgba(223,168,57,0.18)_0%,transparent_50%),radial-gradient(ellipse_at_bottom_right,rgba(92,20,30,0.3)_0%,transparent_55%)]"></div>

        <!-- Rotating Sacred Knowledge Mandala Watermark -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] opacity-[0.035] text-[#f4c466]">
            <svg class="w-full h-full animate-spin-slow" viewBox="0 0 800 800" fill="none" stroke="currentColor">
                <circle cx="400" cy="400" r="380" stroke-width="1.5" stroke-dasharray="6 6"/>
                <circle cx="400" cy="400" r="340" stroke-width="1"/>
                <circle cx="400" cy="400" r="280" stroke-width="1.5" stroke-dasharray="12 4"/>
                <circle cx="400" cy="400" r="220" stroke-width="1"/>
                <circle cx="400" cy="400" r="160" stroke-width="1.5" stroke-dasharray="8 8"/>
                <path d="M400 20 L400 780 M20 400 L780 400" stroke-width="1"/>
                <path d="M131 131 L669 669 M131 669 L669 131" stroke-width="1"/>
            </svg>
        </div>

        <!-- Golden Floating Sparks -->
        <div class="absolute inset-0">
            <div class="absolute top-[35%] left-[8%] w-1.5 h-1.5 rounded-full bg-[#f4c466] spark-ultra spark-delay-1"></div>
            <div class="absolute top-[55%] right-[10%] w-1.5 h-1.5 rounded-full bg-[#ffe08a] spark-high spark-delay-3"></div>
            <div class="absolute top-[70%] left-[15%] w-2 h-2 rounded-full bg-[#dfa839] spark-mid spark-delay-5"></div>
            <div class="absolute top-[82%] right-[18%] w-1.5 h-1.5 rounded-full bg-[#f4c466] spark-high spark-delay-7"></div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="max-w-5xl w-full mx-auto px-4 sm:px-6 relative z-10 flex flex-col items-center">

        <!-- Top Header: Official Granth Sanchay Emblem & Title -->
        <div class="text-center space-y-2 mb-6">
            <div class="flex items-center justify-center gap-3">
                <img src="{{ asset('images/granth-sanchay-logo.png') }}" 
                     alt="Granth Sanchay Logo" 
                     class="h-11 sm:h-13 w-auto object-contain drop-shadow-[0_4px_12px_rgba(244,196,102,0.35)]">
                <div class="text-left">
                    <span class="devanagari-title text-2xl sm:text-3xl font-extrabold text-[#f4c466] block leading-none drop-shadow">
                        ग्रंथसंचय
                    </span>
                    <span class="text-xs font-bold text-white tracking-wider uppercase block mt-1">
                        Granth Sanchay Portal
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-center gap-2 pt-1 text-xs text-[#fcebc7]/80">
                <span>Advanced Library Automation • Institutional Terminal</span>
                <span class="inline-flex items-center gap-1 bg-[#240509] px-2 py-0.5 rounded-full border border-[#f4c466]/30 text-[10px] text-[#f4c466] font-mono">
                    🔒 SSL 256-Bit
                </span>
            </div>
        </div>

        <!-- Role Selector Tabs (3 Portals) -->
        <div class="w-full max-w-3xl mb-4">
            <div class="flex items-center justify-between mb-2 px-1">
                <label class="block text-xs font-bold uppercase tracking-wider text-[#f4c466]">
                    Select Your Portal Access:
                </label>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 p-1.5 rounded-2xl bg-[#190205]/95 border border-[#f4c466]/30 shadow-xl">
                <!-- Role: Librarian -->
                <button type="button" 
                        id="tab-librarian"
                        onclick="flipBookToRole('librarian')"
                        class="role-tab active-role-tab py-2.5 px-3 rounded-xl text-xs flex items-center justify-center gap-2 font-bold cursor-pointer transition-all">
                    <span class="text-base">📚</span>
                    <span>Librarian / Staff</span>
                </button>

                <!-- Role: Admin -->
                <button type="button" 
                        id="tab-admin"
                        onclick="flipBookToRole('admin')"
                        class="role-tab py-2.5 px-3 rounded-xl text-xs flex items-center justify-center gap-2 font-medium text-[#fcebc7]/80 hover:text-white hover:bg-[#380a10]/50 cursor-pointer transition-all">
                    <span class="text-base">🏛️</span>
                    <span>Admin / Principal</span>
                </button>

                <!-- Role: Student -->
                <button type="button" 
                        id="tab-student"
                        onclick="flipBookToRole('student')"
                        class="role-tab py-2.5 px-3 rounded-xl text-xs flex items-center justify-center gap-2 font-medium text-[#fcebc7]/80 hover:text-white hover:bg-[#380a10]/50 cursor-pointer transition-all">
                    <span class="text-base">🎓</span>
                    <span>Student / OPAC</span>
                </button>
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- THE PHYSICAL OPEN GRANTH BOOK CONTAINER (REAL 3D PAGE FLIP)       -->
        <!-- ================================================================= -->
        <div class="real-book-stage relative w-full max-w-4xl mx-auto select-none">
            
            <!-- Hard Leather Book Outer Casing / Ledger Cover -->
            <div class="book-leather-casing relative rounded-3xl bg-gradient-to-b from-[#2d070d] via-[#1a0205] to-[#120204] border-2 border-[#dfa839]/40 shadow-[0_30px_70px_-15px_rgba(0,0,0,0.95)] p-2 sm:p-4">
                
                <!-- Central Spine Depth Gutter Ribbon (Real Book Center Fold) -->
                <div class="book-central-spine-shadow absolute top-0 bottom-0 left-1/2 -translate-x-1/2 w-8 pointer-events-none z-30"></div>
                <div class="book-silk-bookmark absolute -top-3 left-1/2 -translate-x-1/2 w-3.5 h-14 bg-gradient-to-b from-[#dfa839] via-[#8c1d28] to-[#dfa839] rounded-b-md shadow-md pointer-events-none z-40 opacity-90"></div>

                <!-- StPageFlip FlipBook Root Element -->
                <div id="granthBook" class="granth-flipbook relative mx-auto overflow-hidden">
                    
                    <!-- ========================================================= -->
                    <!-- SPREAD 1 (PAGES 0 & 1): LIBRARIAN / STAFF PORTAL          -->
                    <!-- ========================================================= -->

                    <!-- Page 0: Librarian Left Folio (Archival Overview) -->
                    <div class="granth-page page-left" data-density="soft">
                        <div class="page-content-wrapper flex flex-col justify-between h-full p-6 sm:p-7 relative overflow-hidden bg-gradient-to-br from-[#240509] via-[#1d0307] to-[#150204] text-white">
                            <!-- Golden Corner Filigrees -->
                            <div class="corner-filigree corner-tl"></div>
                            <div class="corner-filigree corner-bl"></div>

                            <div>
                                <!-- Folio Header -->
                                <div class="flex items-center justify-between pb-3 border-b border-[#f4c466]/20 text-xs">
                                    <span class="text-[#f4c466] font-bold">📜 पत्र १ : ग्रंथाध्यक्ष विभाग</span>
                                    <span class="font-mono text-[10px] text-[#fcebc7]/60 bg-[#160204] px-2 py-0.5 rounded border border-[#f4c466]/20">FOLIO 01</span>
                                </div>

                                <div class="mt-5 text-center sm:text-left space-y-2">
                                    <h3 class="text-xl sm:text-2xl font-extrabold text-[#f4c466] devanagari-title">
                                        ग्रंथालय कार्यप्रणाली
                                    </h3>
                                    <p class="text-xs text-[#fcebc7]/85 leading-relaxed">
                                        Librarian & Staff Circulation Desk. Manage all daily circulation counter operations, catalogue accessions, and inventory audit.
                                    </p>
                                </div>

                                <!-- Feature List -->
                                <div class="mt-6 space-y-3 text-xs text-[#fcebc7]/90">
                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">⚡</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">3-Sec Barcode & RFID Gateway</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Rapid book issue, return, renew and accession barcode scanner support.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">📋</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">Central Accession Register</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Strict adherence to national academic accession format & DDC classification.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">💰</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">Automated Fine Management</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Automated late fine calculation, receipt printing & SMS/WhatsApp alerts.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Folio Footer -->
                            <div class="pt-3 border-t border-[#f4c466]/20 flex items-center justify-between text-[11px] text-[#fcebc7]/60">
                                <span>Helpline: <strong class="text-white">+91 93289 38959</strong></span>
                                <span class="font-mono">Granth Sanchay • Vol. 1</span>
                            </div>
                        </div>
                    </div>

                    <!-- Page 1: Librarian Right Folio (Interactive Form) -->
                    <div class="granth-page page-right" data-density="soft">
                        <div class="page-content-wrapper flex flex-col justify-between h-full p-6 sm:p-7 relative overflow-hidden bg-gradient-to-bl from-[#240509] via-[#1c0307] to-[#140204] text-white">
                            <!-- Golden Corner Filigrees -->
                            <div class="corner-filigree corner-tr"></div>
                            <div class="corner-filigree corner-br"></div>

                            <div>
                                <!-- Folio Header -->
                                <div class="flex items-center justify-between pb-3 border-b border-[#f4c466]/20 text-xs">
                                    <span class="text-[#f4c466] font-bold">Librarian & Staff Portal</span>
                                    <span class="font-mono text-[10px] text-[#fcebc7]/60 bg-[#160204] px-2 py-0.5 rounded border border-[#f4c466]/20">FOLIO 02</span>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-lg font-bold text-white">Staff Sign In</h4>
                                        <span class="text-[10px] text-[#f4c466] bg-[#380a10] px-2 py-0.5 rounded-full border border-[#f4c466]/30">Circulation Active</span>
                                    </div>
                                    <p class="text-xs text-[#fcebc7]/70 mt-1">Enter authorized institutional credentials to access accession register.</p>
                                </div>

                                <!-- Form -->
                                <form onsubmit="handleFormLogin(event, 'Librarian & Staff')" class="mt-5 space-y-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#fcebc7] mb-1">
                                            Librarian ID / Official Email:
                                        </label>
                                        <div class="relative">
                                            <input type="text" 
                                                   id="librarian_user"
                                                   value="librarian@institution.edu"
                                                   required
                                                   class="w-full h-11 bg-[#190205] border border-[#f4c466]/35 rounded-xl px-3.5 text-sm text-white focus:outline-none focus:border-[#f4c466] transition-all">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between mb-1">
                                            <label class="block text-xs font-semibold text-[#fcebc7]">
                                                Password / Security PIN:
                                            </label>
                                            <a href="javascript:void(0)" onclick="alert('For password resets, contact IT Helpdesk at +91 93289 38959.')" class="text-[11px] text-[#f4c466] hover:underline">
                                                Forgot PIN?
                                            </a>
                                        </div>
                                        <div class="relative">
                                            <input type="password" 
                                                   id="librarian_pass"
                                                   value="LibrarianSecure#2026"
                                                   required
                                                   class="w-full h-11 bg-[#190205] border border-[#f4c466]/35 rounded-xl px-3.5 pr-10 text-sm text-white focus:outline-none focus:border-[#f4c466] transition-all">
                                            <button type="button" onclick="togglePasswordView('librarian_pass', this)" class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-[#fcebc7]/70 hover:text-[#f4c466]">
                                                👁️
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between text-xs pt-1">
                                        <label class="flex items-center gap-2 cursor-pointer select-none">
                                            <input type="checkbox" checked class="w-4 h-4 rounded bg-[#190205] border-[#f4c466]/40 text-[#f4c466]">
                                            <span class="text-[#fcebc7]/85 text-[11px]">Remember this library terminal</span>
                                        </label>
                                        <span class="text-[10px] text-[#fcebc7]/50 font-mono">Timeout: 15m</span>
                                    </div>

                                    <div class="pt-2">
                                        <button type="submit" 
                                                class="w-full py-3.5 px-5 rounded-xl font-bold text-sm text-[#240509] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] hover:from-[#fff0c2] hover:via-[#fad485] hover:to-[#ebba52] shadow-lg shadow-[#dfa839]/20 transition-all flex items-center justify-center gap-2 cursor-pointer">
                                            <span>Sign In to Library Portal</span>
                                            <span>→</span>
                                        </button>
                                    </div>

                                    <!-- Feedback alert container -->
                                    <div id="librarian-alert" class="hidden p-3 rounded-xl bg-emerald-900/90 border border-emerald-400/50 text-emerald-100 text-xs shadow-lg"></div>
                                </form>
                            </div>

                            <!-- Folio Footer -->
                            <div class="pt-3 border-t border-[#f4c466]/20 flex items-center justify-between text-[11px] text-[#fcebc7]/60">
                                <span>Terminal Status: <strong class="text-emerald-400">Online</strong></span>
                                <span class="font-mono">MARC-21 • ISO 27001</span>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================================= -->
                    <!-- SPREAD 2 (PAGES 2 & 3): INSTITUTIONAL ADMIN PORTAL        -->
                    <!-- ========================================================= -->

                    <!-- Page 2: Admin Left Folio (Governance Overview) -->
                    <div class="granth-page page-left" data-density="soft">
                        <div class="page-content-wrapper flex flex-col justify-between h-full p-6 sm:p-7 relative overflow-hidden bg-gradient-to-br from-[#240509] via-[#1d0307] to-[#150204] text-white">
                            <div class="corner-filigree corner-tl"></div>
                            <div class="corner-filigree corner-bl"></div>

                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-[#f4c466]/20 text-xs">
                                    <span class="text-[#f4c466] font-bold">📜 पत्र २ : प्रशासनिक नियंत्रण</span>
                                    <span class="font-mono text-[10px] text-[#fcebc7]/60 bg-[#160204] px-2 py-0.5 rounded border border-[#f4c466]/20">FOLIO 03</span>
                                </div>

                                <div class="mt-5 text-center sm:text-left space-y-2">
                                    <h3 class="text-xl sm:text-2xl font-extrabold text-[#f4c466] devanagari-title">
                                        प्रशासन एवं मूल्यांकन
                                    </h3>
                                    <p class="text-xs text-[#fcebc7]/85 leading-relaxed">
                                        Institutional Administration & NAAC Criterion 4.2 Governance. Centralized control across all college departments.
                                    </p>
                                </div>

                                <div class="mt-6 space-y-3 text-xs text-[#fcebc7]/90">
                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">🏛️</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">NAAC 4.2 Automated Audit Reports</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">One-click export of annual library expenditure, book additions, and usage records.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">🔒</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">Multi-Campus Privilege Matrix</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Granular permission management for librarians, assistants, and department heads.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">🛡️</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">ISO 27001 Data Security</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Complete encryption, tamper-proof logs, and automated daily backup routines.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3 border-t border-[#f4c466]/20 flex items-center justify-between text-[11px] text-[#fcebc7]/60">
                                <span>License: <strong class="text-[#f4c466]">Academic 2026-27</strong></span>
                                <span class="font-mono">NAAC Criterion 4.2</span>
                            </div>
                        </div>
                    </div>

                    <!-- Page 3: Admin Right Folio (Interactive Form) -->
                    <div class="granth-page page-right" data-density="soft">
                        <div class="page-content-wrapper flex flex-col justify-between h-full p-6 sm:p-7 relative overflow-hidden bg-gradient-to-bl from-[#240509] via-[#1c0307] to-[#140204] text-white">
                            <div class="corner-filigree corner-tr"></div>
                            <div class="corner-filigree corner-br"></div>

                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-[#f4c466]/20 text-xs">
                                    <span class="text-[#f4c466] font-bold">Institutional Admin Portal</span>
                                    <span class="font-mono text-[10px] text-[#fcebc7]/60 bg-[#160204] px-2 py-0.5 rounded border border-[#f4c466]/20">FOLIO 04</span>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-lg font-bold text-white">Administrator Sign In</h4>
                                        <span class="text-[10px] text-[#f4c466] bg-[#380a10] px-2 py-0.5 rounded-full border border-[#f4c466]/30">Governance Mode</span>
                                    </div>
                                    <p class="text-xs text-[#fcebc7]/70 mt-1">Institutional principals & directors governance authentication terminal.</p>
                                </div>

                                <form onsubmit="handleFormLogin(event, 'Institutional Admin')" class="mt-5 space-y-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#fcebc7] mb-1">
                                            Administrator Username / Email:
                                        </label>
                                        <div class="relative">
                                            <input type="text" 
                                                   id="admin_user"
                                                   value="principal@campus.edu"
                                                   required
                                                   class="w-full h-11 bg-[#190205] border border-[#f4c466]/35 rounded-xl px-3.5 text-sm text-white focus:outline-none focus:border-[#f4c466] transition-all">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between mb-1">
                                            <label class="block text-xs font-semibold text-[#fcebc7]">
                                                Password / Security PIN:
                                            </label>
                                            <a href="javascript:void(0)" onclick="alert('For administrator password recovery, contact Granth Sanchay Security Support.')" class="text-[11px] text-[#f4c466] hover:underline">
                                                Recovery PIN?
                                            </a>
                                        </div>
                                        <div class="relative">
                                            <input type="password" 
                                                   id="admin_pass"
                                                   value="AdminGov#2026"
                                                   required
                                                   class="w-full h-11 bg-[#190205] border border-[#f4c466]/35 rounded-xl px-3.5 pr-10 text-sm text-white focus:outline-none focus:border-[#f4c466] transition-all">
                                            <button type="button" onclick="togglePasswordView('admin_pass', this)" class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-[#fcebc7]/70 hover:text-[#f4c466]">
                                                👁️
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between text-xs pt-1">
                                        <label class="flex items-center gap-2 cursor-pointer select-none">
                                            <input type="checkbox" checked class="w-4 h-4 rounded bg-[#190205] border-[#f4c466]/40 text-[#f4c466]">
                                            <span class="text-[#fcebc7]/85 text-[11px]">Enforce dual-signature logging</span>
                                        </label>
                                        <span class="text-[10px] text-[#fcebc7]/50 font-mono">Audit: Enabled</span>
                                    </div>

                                    <div class="pt-2">
                                        <button type="submit" 
                                                class="w-full py-3.5 px-5 rounded-xl font-bold text-sm text-[#240509] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] hover:from-[#fff0c2] hover:via-[#fad485] hover:to-[#ebba52] shadow-lg shadow-[#dfa839]/20 transition-all flex items-center justify-center gap-2 cursor-pointer">
                                            <span>Sign In to Library Portal</span>
                                            <span>→</span>
                                        </button>
                                    </div>

                                    <div id="admin-alert" class="hidden p-3 rounded-xl bg-emerald-900/90 border border-emerald-400/50 text-emerald-100 text-xs shadow-lg"></div>
                                </form>
                            </div>

                            <div class="pt-3 border-t border-[#f4c466]/20 flex items-center justify-between text-[11px] text-[#fcebc7]/60">
                                <span>Security Level: <strong class="text-[#f4c466]">Executive Level 1</strong></span>
                                <span class="font-mono">Granth Sanchay Cloud</span>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================================= -->
                    <!-- SPREAD 3 (PAGES 4 & 5): STUDENT & MEMBER WEB OPAC         -->
                    <!-- ========================================================= -->

                    <!-- Page 4: Student Left Folio (Member Guidelines) -->
                    <div class="granth-page page-left" data-density="soft">
                        <div class="page-content-wrapper flex flex-col justify-between h-full p-6 sm:p-7 relative overflow-hidden bg-gradient-to-br from-[#240509] via-[#1d0307] to-[#150204] text-white">
                            <div class="corner-filigree corner-tl"></div>
                            <div class="corner-filigree corner-bl"></div>

                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-[#f4c466]/20 text-xs">
                                    <span class="text-[#f4c466] font-bold">📜 पत्र ३ : वाचक एवं अध्येता OPAC</span>
                                    <span class="font-mono text-[10px] text-[#fcebc7]/60 bg-[#160204] px-2 py-0.5 rounded border border-[#f4c466]/20">FOLIO 05</span>
                                </div>

                                <div class="mt-5 text-center sm:text-left space-y-2">
                                    <h3 class="text-xl sm:text-2xl font-extrabold text-[#f4c466] devanagari-title">
                                        वाचक स्वयं-सेवा
                                    </h3>
                                    <p class="text-xs text-[#fcebc7]/85 leading-relaxed">
                                        Student & Faculty Member Web OPAC. Search catalogue, track issued books, and reserve titles online.
                                    </p>
                                </div>

                                <div class="mt-6 space-y-3 text-xs text-[#fcebc7]/90">
                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">🔍</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">Web OPAC Book Search</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Explore full library catalog by title, author, subject, rack or call number.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">🔖</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">Online Hold & Book Reservation</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Place holds on currently checked-out copies with automated queue priority.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2.5 p-2 rounded-xl bg-[#190205]/80 border border-[#f4c466]/15">
                                        <span class="text-base text-[#f4c466]">💳</span>
                                        <div>
                                            <strong class="text-[#ffe49e] block font-semibold">Digital Library Member Pass</strong>
                                            <span class="text-[11px] text-[#fcebc7]/70">Barcode-enabled digital pass for rapid desk verification on mobile screens.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3 border-t border-[#f4c466]/20 flex items-center justify-between text-[11px] text-[#fcebc7]/60">
                                <span>Circulation Limit: <strong class="text-white">Up to 3 Books</strong></span>
                                <span class="font-mono">Member Services</span>
                            </div>
                        </div>
                    </div>

                    <!-- Page 5: Student Right Folio (Interactive Form) -->
                    <div class="granth-page page-right" data-density="soft">
                        <div class="page-content-wrapper flex flex-col justify-between h-full p-6 sm:p-7 relative overflow-hidden bg-gradient-to-bl from-[#240509] via-[#1c0307] to-[#140204] text-white">
                            <div class="corner-filigree corner-tr"></div>
                            <div class="corner-filigree corner-br"></div>

                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-[#f4c466]/20 text-xs">
                                    <span class="text-[#f4c466] font-bold">Student & Member Web OPAC</span>
                                    <span class="font-mono text-[10px] text-[#fcebc7]/60 bg-[#160204] px-2 py-0.5 rounded border border-[#f4c466]/20">FOLIO 06</span>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-lg font-bold text-white">Member Sign In</h4>
                                        <span class="text-[10px] text-[#f4c466] bg-[#380a10] px-2 py-0.5 rounded-full border border-[#f4c466]/30">Student OPAC</span>
                                    </div>
                                    <p class="text-xs text-[#fcebc7]/70 mt-1">Enter your Institutional Roll No. or Member PRN to view issued books.</p>
                                </div>

                                <form onsubmit="handleFormLogin(event, 'Student & Member')" class="mt-5 space-y-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#fcebc7] mb-1">
                                            Member PRN / Roll No. / Email:
                                        </label>
                                        <div class="relative">
                                            <input type="text" 
                                                   id="student_user"
                                                   value="student.opac@college.edu"
                                                   required
                                                   class="w-full h-11 bg-[#190205] border border-[#f4c466]/35 rounded-xl px-3.5 text-sm text-white focus:outline-none focus:border-[#f4c466] transition-all">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between mb-1">
                                            <label class="block text-xs font-semibold text-[#fcebc7]">
                                                Password / PIN:
                                            </label>
                                            <a href="javascript:void(0)" onclick="alert('Students can reset their OPAC password at the library counter.')" class="text-[11px] text-[#f4c466] hover:underline">
                                                Forgot PIN?
                                            </a>
                                        </div>
                                        <div class="relative">
                                            <input type="password" 
                                                   id="student_pass"
                                                   value="StudentPass#2026"
                                                   required
                                                   class="w-full h-11 bg-[#190205] border border-[#f4c466]/35 rounded-xl px-3.5 pr-10 text-sm text-white focus:outline-none focus:border-[#f4c466] transition-all">
                                            <button type="button" onclick="togglePasswordView('student_pass', this)" class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-[#fcebc7]/70 hover:text-[#f4c466]">
                                                👁️
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between text-xs pt-1">
                                        <label class="flex items-center gap-2 cursor-pointer select-none">
                                            <input type="checkbox" checked class="w-4 h-4 rounded bg-[#190205] border-[#f4c466]/40 text-[#f4c466]">
                                            <span class="text-[#fcebc7]/85 text-[11px]">Remember my student login</span>
                                        </label>
                                        <span class="text-[10px] text-[#fcebc7]/50 font-mono">OPAC 2026</span>
                                    </div>

                                    <div class="pt-2">
                                        <button type="submit" 
                                                class="w-full py-3.5 px-5 rounded-xl font-bold text-sm text-[#240509] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] hover:from-[#fff0c2] hover:via-[#fad485] hover:to-[#ebba52] shadow-lg shadow-[#dfa839]/20 transition-all flex items-center justify-center gap-2 cursor-pointer">
                                            <span>Sign In to Library Portal</span>
                                            <span>→</span>
                                        </button>
                                    </div>

                                    <div id="student-alert" class="hidden p-3 rounded-xl bg-emerald-900/90 border border-emerald-400/50 text-emerald-100 text-xs shadow-lg"></div>
                                </form>
                            </div>

                            <div class="pt-3 border-t border-[#f4c466]/20 flex items-center justify-between text-[11px] text-[#fcebc7]/60">
                                <span>OPAC Gateway: <strong class="text-emerald-400">Available</strong></span>
                                <span class="font-mono">Web OPAC v3.4</span>
                            </div>
                        </div>
                    </div>

                </div> <!-- End Granth FlipBook -->

            </div> <!-- End Leather Casing -->

        </div> <!-- End Real Book Stage -->

        <!-- Bottom Notice: New Campus Registration -->
        <div class="mt-8 text-center text-xs text-[#fcebc7]/80 space-y-1.5">
            <p>
                Is your school, college, or university setting up Granth Sanchay for the first time?
            </p>
            <p>
                <a href="{{ route('schedule-demo') }}" class="text-[#f4c466] font-bold hover:underline inline-flex items-center gap-1">
                    <span>Schedule a Free 20-Minute Demo</span>
                    <span>→</span>
                </a>
                <span class="text-[#fcebc7]/40 mx-2">•</span>
                <span>Helpline: <a href="tel:+919328938959" class="text-white hover:text-[#f4c466] font-bold">+91 93289 38959</a></span>
            </p>
        </div>

    </div>

</div>

<!-- Real StPageFlip Engine Script -->
<script src="{{ asset('js/page-flip.browser.js') }}"></script>

<script>
// =========================================================================
// REAL 3D BOOK PAGE FLIP CONTROLLER (StPageFlip Engine)
// =========================================================================

let granthBookFlip = null;

// Synthesizes crisp physical paper turn sound via Web Audio API
window.playGranthRustle = function() {
    try {
        const AudioCtx = window.AudioContext || window.webkitAudioContext;
        if (!AudioCtx) return;
        const ctx = new AudioCtx();
        if (ctx.state === 'suspended') ctx.resume();
        
        const bufferSize = Math.floor(ctx.sampleRate * 0.18);
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
        filter.frequency.exponentialRampToValueAtTime(340, ctx.currentTime + 0.18);
        filter.Q.value = 1.6;

        const gain = ctx.createGain();
        gain.gain.setValueAtTime(0.001, ctx.currentTime);
        gain.gain.linearRampToValueAtTime(0.045, ctx.currentTime + 0.02);
        gain.gain.exponentialRampToValueAtTime(0.0001, ctx.currentTime + 0.18);

        noise.connect(filter);
        filter.connect(gain);
        gain.connect(ctx.destination);

        noise.start();
        noise.stop(ctx.currentTime + 0.18);
    } catch (e) {}
};

function initGranthFlipBook() {
    const bookEl = document.getElementById('granthBook');
    if (!bookEl || !window.St || !window.St.PageFlip) return;

    try {
        const isMobile = window.innerWidth < 768;

        granthBookFlip = new St.PageFlip(bookEl, {
            width: isMobile ? 360 : 440,
            height: isMobile ? 520 : 560,
            size: 'stretch',
            minWidth: 300,
            maxWidth: 480,
            minHeight: 480,
            maxHeight: 600,
            maxShadowOpacity: 0.7,
            showCover: false,
            mobileScrollSupport: false,
            flippingTime: 750,
            usePortrait: true,
            startPage: 0,
            useMouseEvents: true,
            showPageCorners: true,
            clickEventForward: true
        });

        const pages = document.querySelectorAll('#granthBook .granth-page');
        granthBookFlip.loadFromHTML(pages);

        // Sync tabs when user manually drags or flips pages
        granthBookFlip.on('flip', function(e) {
            const pageIndex = e.data;
            if (pageIndex === 0 || pageIndex === 1) {
                updateTabHighlight('librarian');
            } else if (pageIndex === 2 || pageIndex === 3) {
                updateTabHighlight('admin');
            } else if (pageIndex === 4 || pageIndex === 5) {
                updateTabHighlight('student');
            }
        });

        // Prevent inputs from triggering page corner drag
        protectInputInteractions();

    } catch (err) {
        console.error('Granth page-flip initialization notice:', err);
    }
}

function updateTabHighlight(role) {
    const tabs = {
        librarian: document.getElementById('tab-librarian'),
        admin: document.getElementById('tab-admin'),
        student: document.getElementById('tab-student')
    };

    Object.keys(tabs).forEach(r => {
        const btn = tabs[r];
        if (!btn) return;
        if (r === role) {
            btn.className = 'role-tab active-role-tab py-2.5 px-3 rounded-xl text-xs flex items-center justify-center gap-2 font-bold cursor-pointer transition-all';
        } else {
            btn.className = 'role-tab py-2.5 px-3 rounded-xl text-xs flex items-center justify-center gap-2 font-medium text-[#fcebc7]/80 hover:text-white hover:bg-[#380a10]/50 cursor-pointer transition-all';
        }
    });
}

function flipBookToRole(role) {
    if (!granthBookFlip) return;

    let targetPage = 0;
    if (role === 'librarian') targetPage = 0;
    else if (role === 'admin') targetPage = 2;
    else if (role === 'student') targetPage = 4;

    const current = granthBookFlip.getCurrentPageIndex();
    if (current === targetPage || current === targetPage + 1) return;

    window.playGranthRustle();
    granthBookFlip.flip(targetPage);
    updateTabHighlight(role);
}

function protectInputInteractions() {
    const book = document.getElementById('granthBook');
    if (!book) return;
    const elements = book.querySelectorAll('input, button, label, a, select, textarea');
    elements.forEach(el => {
        el.addEventListener('pointerdown', e => e.stopPropagation());
        el.addEventListener('mousedown', e => e.stopPropagation());
        el.addEventListener('touchstart', e => e.stopPropagation(), { passive: true });
        el.addEventListener('click', e => e.stopPropagation());
    });
}

function togglePasswordView(inputId, btn) {
    const input = document.getElementById(inputId);
    if (!input) return;
    if (input.type === 'password') {
        input.type = 'text';
        btn.textContent = '🙈';
    } else {
        input.type = 'password';
        btn.textContent = '👁️';
    }
}

function handleFormLogin(e, roleName) {
    e.preventDefault();
    const btn = e.target.querySelector('button[type="submit"]');
    if (btn) {
        const originalText = btn.innerHTML;
        btn.innerHTML = '<span>Verifying Terminal Credentials...</span>';
        btn.disabled = true;

        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.disabled = false;
            
            // Show alert box
            const alertBox = e.target.querySelector('[id$="-alert"]');
            if (alertBox) {
                alertBox.innerHTML = '<strong>✓ Authentication Successful!</strong> Signed in to ' + roleName + ' Portal. Database connection verified.';
                alertBox.classList.remove('hidden');
                setTimeout(() => alertBox.classList.add('hidden'), 5000);
            }
        }, 900);
    }
}

// Initialize on DOM load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initGranthFlipBook);
} else {
    initGranthFlipBook();
}

window.addEventListener('resize', function() {
    protectInputInteractions();
});
</script>

<style>
/* ========================================================================= */
/* SACRED OPEN GRANTH REAL 3D BOOK STYLES                                    */
/* ========================================================================= */

.active-role-tab {
    background: linear-gradient(to right, #ffe49e, #f4c466, #dfa839) !important;
    color: #240509 !important;
    box-shadow: 0 4px 15px rgba(223, 168, 57, 0.35) !important;
}

/* StPageFlip Canvas and Block Tweaks */
.granth-flipbook {
    width: 100%;
    min-height: 560px;
}

.stf__parent {
    margin: 0 auto;
}

/* Real Book Leather Casing */
.book-leather-casing {
    box-shadow: 
        0 25px 60px -10px rgba(0, 0, 0, 0.95),
        0 0 0 1px rgba(244, 196, 102, 0.25),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

/* Central Book Spine Shadow (Center Crease) */
.book-central-spine-shadow {
    background: linear-gradient(to right, 
        rgba(0, 0, 0, 0.6) 0%, 
        rgba(0, 0, 0, 0.2) 30%, 
        rgba(0, 0, 0, 0.7) 50%, 
        rgba(0, 0, 0, 0.2) 70%, 
        rgba(0, 0, 0, 0.6) 100%
    );
    border-left: 1px solid rgba(244, 196, 102, 0.1);
    border-right: 1px solid rgba(244, 196, 102, 0.1);
}

/* Left Page Inner Spine Crease Shadow */
.page-left {
    box-shadow: inset -22px 0 35px -10px rgba(0, 0, 0, 0.85);
    border-right: 1px solid rgba(0, 0, 0, 0.4);
}

/* Right Page Inner Spine Crease Shadow */
.page-right {
    box-shadow: inset 22px 0 35px -10px rgba(0, 0, 0, 0.85);
    border-left: 1px solid rgba(0, 0, 0, 0.4);
}

/* Corner Filigrees on Parchment Pages */
.corner-filigree {
    position: absolute;
    width: 14px;
    height: 14px;
    pointer-events: none;
    border-color: rgba(244, 196, 102, 0.35);
}
.corner-tl {
    top: 8px;
    left: 8px;
    border-top: 2px solid;
    border-left: 2px solid;
}
.corner-tr {
    top: 8px;
    right: 8px;
    border-top: 2px solid;
    border-right: 2px solid;
}
.corner-bl {
    bottom: 8px;
    left: 8px;
    border-bottom: 2px solid;
    border-left: 2px solid;
}
.corner-br {
    bottom: 8px;
    right: 8px;
    border-bottom: 2px solid;
    border-right: 2px solid;
}

/* Ensure text inside pages is crisp and unselectable during drag */
.granth-page {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
}

@media (max-width: 767px) {
    .granth-flipbook {
        min-height: 520px;
    }
}
</style>
@endsection
