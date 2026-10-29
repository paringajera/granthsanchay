@extends('layouts.app')

@section('title', 'Login Portal - Granth Sanchay (ग्रंथसंचय) Library Management Software')
@section('meta_description', 'Official secure login portal for librarians, staff, administrators, and student OPAC members of Granth Sanchay Library Management Software.')

@section('content')
<!-- ========================================================================= -->
<!-- DEDICATED SACRED GRANTH AUTHENTICATION PORTAL (UI ONLY)                    -->
<!-- ========================================================================= -->
<div class="relative min-h-[calc(100vh-140px)] bg-[#120204] text-white overflow-hidden py-12 sm:py-16 flex items-center justify-center">

    <!-- Atmospheric Sacred Granth Parallax Background Layer -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none select-none z-0">
        <!-- Open Granth Background Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-40 will-change-transform" 
             style="background-image: url('{{ asset('images/open-granth-real.jpg') }}'); -webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 100%); mask-image: linear-gradient(to bottom, black 70%, transparent 100%);">
        </div>

        <!-- Atmospheric Vignettes & Contrast Overlays -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#140204]/80 via-[#180205]/75 to-[#120204]/95"></div>
        <div class="absolute inset-0 bg-radial-at-c from-transparent via-[#200408]/70 to-[#140204]/90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,rgba(223,168,57,0.15)_0%,transparent_50%),radial-gradient(ellipse_at_bottom_right,rgba(92,20,30,0.25)_0%,transparent_55%)]"></div>

        <!-- Rotating Sacred Knowledge Mandala Watermark -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[720px] h-[720px] opacity-[0.04] text-[#f4c466]">
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
            <div class="absolute top-[35%] left-[10%] w-1.5 h-1.5 rounded-full bg-[#f4c466] spark-ultra spark-delay-1"></div>
            <div class="absolute top-[55%] right-[12%] w-1.5 h-1.5 rounded-full bg-[#ffe08a] spark-high spark-delay-3"></div>
            <div class="absolute top-[70%] left-[18%] w-2 h-2 rounded-full bg-[#dfa839] spark-mid spark-delay-5"></div>
            <div class="absolute top-[82%] right-[20%] w-1.5 h-1.5 rounded-full bg-[#f4c466] spark-high spark-delay-7"></div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="max-w-4xl w-full mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
         x-data="{
             portalRole: 'librarian',
             userId: 'librarian@institution.edu',
             password: '••••••••',
             showPassword: false,
             rememberMe: true,
             isLoading: false,
             loginSuccess: false,
             loginMessage: '',

             roles: {
                 librarian: {
                     title: 'Librarian & Staff Portal',
                     badge: '📚 Full Catalog & Circulation Access',
                     placeholder: 'e.g. LIB-9421 or librarian@institution.edu',
                     label: 'Librarian ID / Official Email',
                     demoUser: 'librarian@institution.edu',
                     demoPass: 'LibrarianSecure#2026',
                     desc: 'Access barcode issuance, accession register, overdue fines, and book inventory.'
                 },
                 admin: {
                     title: 'Institutional Admin Portal',
                     badge: '🏛️ NAAC & Governance Control',
                     placeholder: 'e.g. ADMIN-001 or principal@campus.edu',
                     label: 'Administrator Username / Email',
                     demoUser: 'principal@campus.edu',
                     demoPass: 'AdminGov#2026',
                     desc: 'Manage multi-campus permissions, NAAC 4.2 audit trails, and staff credentials.'
                 },
                 student: {
                     title: 'Student & Member Web OPAC',
                     badge: '🎓 Member Self-Service',
                     placeholder: 'e.g. STU-2026-4819 or Roll Number',
                     label: 'Member PRN / Roll No. / Email',
                     demoUser: 'student.opac@college.edu',
                     demoPass: 'StudentPass#2026',
                     desc: 'Search the Web OPAC, reserve available books, view dues, and access digital cards.'
                 }
             },

             setRole(role) {
                 this.portalRole = role;
                 this.userId = this.roles[role].demoUser;
                 this.password = this.roles[role].demoPass;
                 this.loginSuccess = false;
             },

             fillDemo() {
                 this.userId = this.roles[this.portalRole].demoUser;
                 this.password = this.roles[this.portalRole].demoPass;
             },

             handleLogin() {
                 this.isLoading = true;
                 this.loginSuccess = false;
                 setTimeout(() => {
                     this.isLoading = false;
                     this.loginSuccess = true;
                     this.loginMessage = 'Authentication Successful! Signed in as ' + this.roles[this.portalRole].title + ' (' + this.userId + '). This is an interactive UI preview.';
                 }, 950);
             }
         }">

        <!-- Central Login Card in Royal Frame -->
        <div class="rounded-3xl bg-gradient-to-b from-[#2d070d]/95 via-[#240509]/95 to-[#1a0205]/98 border-2 border-[#f4c466]/40 shadow-2xl shadow-black/80 relative overflow-hidden backdrop-blur-xl p-6 sm:p-10">
            
            <!-- Top Ambient Glow Edge -->
            <div class="absolute top-0 left-10 right-10 h-[2px] bg-gradient-to-r from-transparent via-[#f4c466] to-transparent opacity-70"></div>
            
            <!-- Background Radial Glow -->
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#dfa839]/15 rounded-full blur-3xl pointer-events-none"></div>

            <!-- Card Header: Official Granth Sanchay Crest & Titles -->
            <div class="text-center space-y-3 pb-6 border-b border-[#460d15]/80 relative z-10">
                <div class="flex items-center justify-center gap-3">
                    <img src="{{ asset('images/granth-sanchay-logo.png') }}" 
                         alt="Granth Sanchay Logo" 
                         class="h-12 sm:h-14 w-auto object-contain drop-shadow-[0_4px_12px_rgba(244,196,102,0.3)]">
                    <div class="text-left">
                        <span class="devanagari-title text-2xl sm:text-3xl font-extrabold text-[#f4c466] block leading-none drop-shadow">
                            ग्रंथसंचय
                        </span>
                        <span class="text-xs font-bold text-white tracking-wider uppercase block mt-1">
                            Granth Sanchay Portal
                        </span>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-2 pt-1">
                    <span class="text-xs text-[#fcebc7]/80 font-medium">
                        Advanced Library Automation Software • Campus Terminal
                    </span>
                    <span class="inline-flex items-center gap-1 bg-[#1f0407] px-2.5 py-0.5 rounded-full border border-[#f4c466]/30 text-[10px] text-[#f4c466] font-mono">
                        🔒 SSL 256-Bit
                    </span>
                </div>
            </div>

            <!-- Role Selector Tabs (3 Portals) -->
            <div class="pt-6 relative z-10">
                <label class="block text-xs font-bold uppercase tracking-wider text-[#f4c466] mb-3 text-center sm:text-left">
                    Select Your Portal Access:
                </label>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 p-1.5 rounded-2xl bg-[#190205]/90 border border-[#f4c466]/25">
                    
                    <!-- Role: Librarian -->
                    <button type="button" 
                            @click="setRole('librarian')"
                            :class="portalRole === 'librarian' 
                                ? 'bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] text-[#240509] shadow-md font-bold' 
                                : 'text-[#fcebc7]/80 hover:text-white hover:bg-[#380a10]/50 font-medium'"
                            class="py-3 px-3 rounded-xl text-xs flex items-center justify-center gap-2 transition-all cursor-pointer">
                        <span class="text-base">📚</span>
                        <span>Librarian / Staff</span>
                    </button>

                    <!-- Role: Admin -->
                    <button type="button" 
                            @click="setRole('admin')"
                            :class="portalRole === 'admin' 
                                ? 'bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] text-[#240509] shadow-md font-bold' 
                                : 'text-[#fcebc7]/80 hover:text-white hover:bg-[#380a10]/50 font-medium'"
                            class="py-3 px-3 rounded-xl text-xs flex items-center justify-center gap-2 transition-all cursor-pointer">
                        <span class="text-base">🏛️</span>
                        <span>Admin / Principal</span>
                    </button>

                    <!-- Role: Student / Member OPAC -->
                    <button type="button" 
                            @click="setRole('student')"
                            :class="portalRole === 'student' 
                                ? 'bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] text-[#240509] shadow-md font-bold' 
                                : 'text-[#fcebc7]/80 hover:text-white hover:bg-[#380a10]/50 font-medium'"
                            class="py-3 px-3 rounded-xl text-xs flex items-center justify-center gap-2 transition-all cursor-pointer">
                        <span class="text-base">🎓</span>
                        <span>Student / OPAC</span>
                    </button>

                </div>
            </div>

            <!-- Login Form (UI Simulation) -->
            <form @submit.prevent="handleLogin()" class="mt-6 space-y-5 relative z-10">

                <!-- Username / Member ID / Accession ID -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="block text-xs font-semibold text-[#fcebc7]" x-text="roles[portalRole].label">
                            Member ID / Email
                        </label>
                        <span class="text-[11px] text-[#f4c466]/80 font-mono">
                            Required
                        </span>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-[#f4c466]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <input type="text" 
                               x-model="userId"
                               required 
                               :placeholder="roles[portalRole].placeholder"
                               class="w-full h-12 bg-[#190205] border border-[#f4c466]/30 rounded-xl pl-11 pr-4 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#f4c466] focus:ring-1 focus:ring-[#f4c466] transition-all">
                    </div>
                </div>

                <!-- Password Field with Show/Hide Toggle -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="block text-xs font-semibold text-[#fcebc7]">
                            Password / Security PIN
                        </label>
                        <a href="javascript:void(0)" 
                           @click="alert('For password resets, please contact your Institutional Chief Librarian or IT Support at +91 93289 38959.')" 
                           class="text-xs text-[#f4c466] hover:underline">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-[#f4c466]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <input :type="showPassword ? 'text' : 'password'" 
                               x-model="password"
                               required 
                               placeholder="••••••••"
                               class="w-full h-12 bg-[#190205] border border-[#f4c466]/30 rounded-xl pl-11 pr-11 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#f4c466] focus:ring-1 focus:ring-[#f4c466] transition-all">
                        
                        <button type="button" 
                                @click="showPassword = !showPassword"
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-[#fcebc7]/60 hover:text-[#f4c466] transition-colors focus:outline-none"
                                title="Toggle password visibility">
                            <span x-show="!showPassword" class="text-sm">👁️</span>
                            <span x-show="showPassword" x-cloak class="text-sm">🙈</span>
                        </button>
                    </div>
                </div>

                <!-- Remember Terminal & Security Notice -->
                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" 
                               x-model="rememberMe"
                               class="w-4 h-4 rounded border-[#f4c466]/40 bg-[#190205] text-[#f4c466] focus:ring-0 focus:ring-offset-0">
                        <span class="text-[#fcebc7]/80">Remember this library terminal</span>
                    </label>

                    <span class="text-[#fcebc7]/60 hidden sm:inline">
                        Session Auto-Timeout: 15 Mins
                    </span>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" 
                            :disabled="isLoading"
                            class="w-full h-13 rounded-2xl font-black text-base text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl shadow-[#dfa839]/25 hover:shadow-2xl hover:shadow-[#dfa839]/40 hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center gap-2.5 group gold-sheen disabled:opacity-75 disabled:cursor-wait">
                        <span x-show="!isLoading" class="flex items-center gap-2">
                            <span>Sign In to Library Portal</span>
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </span>
                        <span x-show="isLoading" x-cloak class="flex items-center gap-2 text-sm font-bold">
                            <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-[#2d070d]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span>Verifying Credentials & Permissions...</span>
                        </span>
                    </button>
                </div>

                <!-- Simulation Success Alert -->
                <div x-show="loginSuccess" 
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="p-4 rounded-xl bg-emerald-900/90 border border-emerald-400/50 text-emerald-100 text-xs shadow-xl space-y-1">
                    <div class="flex items-center gap-2 font-bold text-emerald-300">
                        <span>✓</span>
                        <span x-text="loginMessage"></span>
                    </div>
                    <p class="text-[11px] text-emerald-200/80">
                        Institutional database connection simulated successfully. You can explore all software modules from the navigation bar above.
                    </p>
                </div>

            </form>

            <!-- Card Bottom Strip: Institutional Trust Badges -->
            <div class="mt-8 pt-6 border-t border-[#460d15]/80 grid grid-cols-2 sm:grid-cols-4 gap-3 text-center text-xs text-[#fcebc7]/70">
                <div class="bg-[#190205]/60 p-2.5 rounded-xl border border-[#f4c466]/15">
                    <span class="block text-[#f4c466] font-bold text-sm">⚡ 3 Sec</span>
                    <span class="text-[10px]">Barcode Gateway</span>
                </div>
                <div class="bg-[#190205]/60 p-2.5 rounded-xl border border-[#f4c466]/15">
                    <span class="block text-[#f4c466] font-bold text-sm">MARC-21</span>
                    <span class="text-[10px]">Catalog Standard</span>
                </div>
                <div class="bg-[#190205]/60 p-2.5 rounded-xl border border-[#f4c466]/15">
                    <span class="block text-[#f4c466] font-bold text-sm">Criterion 4.2</span>
                    <span class="text-[10px]">NAAC Certified</span>
                </div>
                <div class="bg-[#190205]/60 p-2.5 rounded-xl border border-[#f4c466]/15">
                    <span class="block text-[#f4c466] font-bold text-sm">ISO 27001</span>
                    <span class="text-[10px]">Data Privacy</span>
                </div>
            </div>

        </div>

        <!-- Outside Card Notice: New Campus Registration -->
        <div class="mt-8 text-center text-xs text-[#fcebc7]/80 space-y-2">
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
@endsection
