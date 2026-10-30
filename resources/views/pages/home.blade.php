@extends('layouts.app')

@section('title', 'Granth Sanchay (ग्रंथसंचय) - Advanced Library Management Software | Read Learn Grow')
@section('meta_description', 'Granth Sanchay is India\'s advanced library management software with 3D interactive Granth, barcode & RFID circulation, student web OPAC, and 1-click NAAC audit reports.')

@section('content')
    <!-- ========================================================================= -->
    <!-- CONTINUOUS SACRED GRANTH EXPERIENCE (Hero + 4 Pillars Seamless, No Divider) -->
    <!-- ========================================================================= -->
    <div class="relative bg-[#120204] text-white overflow-hidden" id="hero-and-pillars-wrapper">

        <!-- CONTINUOUS SACRED GRANTH PARALLAX BACKGROUND (Extends through Hero down into 4 Pillars) -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none select-none z-0">

            <!-- Open Granth Background Image (Slow Parallax extending behind 4 Pillars boxes) -->
            <div class="absolute -top-[5%] left-0 right-0 h-[145vh] min-h-[1050px] bg-cover bg-center opacity-85 will-change-transform"
                style="background-image: url('{{ asset('images/open-granth-real.jpg') }}'); transform: translate3d(0, calc(var(--scroll-y, 0px) * 0.38), 0) scale(1.12); -webkit-mask-image: linear-gradient(to bottom, black 72%, transparent 98%); mask-image: linear-gradient(to bottom, black 72%, transparent 98%);">
            </div>

            <!-- Continuous Atmospheric Vignette & Contrast Gradients (Zero Divider Line) -->
            <div
                class="absolute inset-0 bg-gradient-to-b from-[#140204]/60 via-[#180205]/65 to-[#120204]/90 pointer-events-none">
            </div>
            <div
                class="absolute inset-0 bg-radial-at-c from-transparent via-[#200408]/60 to-[#140204]/85 pointer-events-none">
            </div>
            <div
                class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,rgba(223,168,57,0.12)_0%,transparent_50%),radial-gradient(ellipse_at_bottom_right,rgba(92,20,30,0.2)_0%,transparent_55%)] pointer-events-none">
            </div>

            <!-- Rotating Sacred Knowledge Mandala Watermark (Hardware Accelerated GPU Composition) -->
            <div
                class="absolute top-[68%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[780px] h-[780px] opacity-[0.045] text-[#f4c466] pointer-events-none">
                <svg class="w-full h-full animate-spin-slow" viewBox="0 0 800 800" fill="none" stroke="currentColor">
                    <circle cx="400" cy="400" r="380" stroke-width="1.5" stroke-dasharray="6 6" />
                    <circle cx="400" cy="400" r="340" stroke-width="1" />
                    <circle cx="400" cy="400" r="280" stroke-width="1.5" stroke-dasharray="12 4" />
                    <circle cx="400" cy="400" r="220" stroke-width="1" />
                    <circle cx="400" cy="400" r="160" stroke-width="1.5" stroke-dasharray="8 8" />
                    <circle cx="400" cy="400" r="100" stroke-width="1" />
                    <path d="M400 20 L400 780 M20 400 L780 400" stroke-width="1" />
                    <path d="M131 131 L669 669 M131 669 L669 131" stroke-width="1" />
                    <path d="M254 54 L546 746 M54 254 L746 546" stroke-width="0.75" stroke-dasharray="4 4" />
                    <path d="M546 54 L254 746 M54 546 L746 254" stroke-width="0.75" stroke-dasharray="4 4" />
                    <polygon points="400,60 420,100 400,120 380,100" fill="currentColor" fill-opacity="0.3" />
                    <polygon points="400,740 420,700 400,680 380,700" fill="currentColor" fill-opacity="0.3" />
                    <polygon points="60,400 100,420 120,400 100,380" fill="currentColor" fill-opacity="0.3" />
                    <polygon points="740,400 700,420 680,400 700,380" fill="currentColor" fill-opacity="0.3" />
                </svg>
            </div>

            <!-- Archival Watermark Badges -->
            <div
                class="absolute top-[52%] right-12 hidden lg:flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-[#f4c466]/15 bg-[#2d070d]/30 text-[10px] font-mono text-[#f4c466]/40 uppercase tracking-widest pointer-events-none">
                <span>DDC 025.4 • DEWEY DECIMAL REGISTER</span>
            </div>
            <div
                class="absolute top-[75%] left-12 hidden lg:flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-[#f4c466]/15 bg-[#2d070d]/30 text-[10px] font-mono text-[#f4c466]/40 uppercase tracking-widest pointer-events-none">
                <span>MARC-21 • UNICODE MULTILINGUAL CORE</span>
            </div>

            <!-- Floating Golden Ember Sparks -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-[55%] left-[8%] w-1.5 h-1.5 rounded-full bg-[#f4c466] spark-ultra spark-delay-1">
                </div>
                <div class="absolute top-[68%] right-[12%] w-1.5 h-1.5 rounded-full bg-[#ffe08a] spark-high spark-delay-3">
                </div>
                <div class="absolute top-[82%] left-[14%] w-2 h-2 rounded-full bg-[#dfa839] spark-mid spark-delay-5"></div>
                <div class="absolute top-[92%] right-[16%] w-1.5 h-1.5 rounded-full bg-[#f4c466] spark-high spark-delay-7">
                </div>
            </div>
        </div>

        <!-- HERO SECTION (Seamless, Transparent Background) -->
        <section class="relative z-10 pt-12 pb-16 min-h-[90vh] flex items-center" id="hero-section">

            <!-- Floating Golden Ember Sparks & Luminous Blobs (Pure CSS GPU, 0% CPU Load) -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Center Spine Core Stream (Rising Ultra High) -->
                <div
                    class="absolute bottom-[30%] left-[50%] w-3 h-3 rounded-full bg-[#f4c466] shadow-[0_0_14px_#f4c466,0_0_28px_#dfa839] spark-ultra spark-delay-0">
                </div>
                <div
                    class="absolute bottom-[32%] left-[49%] w-2 h-2 rounded-full bg-[#ffe49e] shadow-[0_0_10px_#ffe49e] spark-high spark-delay-2">
                </div>
                <div
                    class="absolute bottom-[28%] left-[51%] w-2.5 h-2.5 rounded-full bg-[#f4c466] shadow-[0_0_12px_#f4c466] spark-ultra spark-delay-5">
                </div>
                <div
                    class="absolute bottom-[34%] left-[50%] w-1.5 h-1.5 rounded-full bg-[#ffffff] shadow-[0_0_8px_#ffe49e] spark-high spark-delay-8">
                </div>
                <div
                    class="absolute bottom-[29%] left-[49.5%] w-3.5 h-3.5 rounded-full bg-[#f4c466]/90 shadow-[0_0_16px_#f4c466,0_0_32px_#dfa839] spark-ultra spark-delay-11">
                </div>
                <div
                    class="absolute bottom-[31%] left-[50.5%] w-2 h-2 rounded-full bg-[#ffe49e] shadow-[0_0_8px_#ffe49e] spark-mid spark-delay-14">
                </div>

                <!-- Left Page Embers (Floating High & Mid) -->
                <div
                    class="absolute bottom-[31%] left-[46%] w-2 h-2 rounded-full bg-[#f4c466] shadow-[0_0_10px_#f4c466] spark-high spark-delay-1">
                </div>
                <div
                    class="absolute bottom-[27%] left-[44%] w-3 h-3 rounded-full bg-[#dfa839] shadow-[0_0_14px_#dfa839] spark-ultra spark-delay-4">
                </div>
                <div
                    class="absolute bottom-[33%] left-[47%] w-1.5 h-1.5 rounded-full bg-[#ffe49e] shadow-[0_0_6px_#ffe49e] spark-mid spark-delay-6">
                </div>
                <div
                    class="absolute bottom-[30%] left-[43%] w-2.5 h-2.5 rounded-full bg-[#f4c466] shadow-[0_0_12px_#f4c466] spark-high spark-delay-9">
                </div>
                <div
                    class="absolute bottom-[35%] left-[45%] w-1 h-1 rounded-full bg-[#ffffff] shadow-[0_0_6px_#ffffff] spark-ultra spark-delay-12">
                </div>
                <div
                    class="absolute bottom-[29%] left-[41%] w-2 h-2 rounded-full bg-[#ffe49e] shadow-[0_0_8px_#ffe49e] spark-mid spark-delay-3">
                </div>
                <div
                    class="absolute bottom-[32%] left-[38%] w-1.5 h-1.5 rounded-full bg-[#f4c466] shadow-[0_0_8px_#f4c466] spark-high spark-delay-15">
                </div>

                <!-- Right Page Embers (Floating High & Mid) -->
                <div
                    class="absolute bottom-[31%] left-[54%] w-2.5 h-2.5 rounded-full bg-[#ffe49e] shadow-[0_0_12px_#ffe49e] spark-high spark-delay-3">
                </div>
                <div
                    class="absolute bottom-[28%] left-[56%] w-3 h-3 rounded-full bg-[#f4c466] shadow-[0_0_14px_#f4c466] spark-ultra spark-delay-7">
                </div>
                <div
                    class="absolute bottom-[34%] left-[53%] w-1.5 h-1.5 rounded-full bg-[#ffe49e] shadow-[0_0_6px_#ffe49e] spark-mid spark-delay-10">
                </div>
                <div
                    class="absolute bottom-[29%] left-[57%] w-2 h-2 rounded-full bg-[#dfa839] shadow-[0_0_10px_#dfa839] spark-high spark-delay-13">
                </div>
                <div
                    class="absolute bottom-[33%] left-[55%] w-1 h-1 rounded-full bg-[#ffffff] shadow-[0_0_6px_#ffffff] spark-ultra spark-delay-1">
                </div>
                <div
                    class="absolute bottom-[30%] left-[59%] w-2 h-2 rounded-full bg-[#ffe49e] shadow-[0_0_8px_#ffe49e] spark-mid spark-delay-8">
                </div>
                <div
                    class="absolute bottom-[32%] left-[62%] w-1.5 h-1.5 rounded-full bg-[#f4c466] shadow-[0_0_8px_#f4c466] spark-high spark-delay-14">
                </div>

                <!-- Ambient Radiant Micro-Sparks -->
                <div
                    class="absolute bottom-[35%] left-[48%] w-1 h-1 rounded-full bg-[#ffffff] shadow-[0_0_6px_#ffffff] spark-mid spark-delay-2">
                </div>
                <div
                    class="absolute bottom-[36%] left-[52%] w-1 h-1 rounded-full bg-[#ffffff] shadow-[0_0_6px_#ffffff] spark-high spark-delay-6">
                </div>
                <div
                    class="absolute bottom-[26%] left-[47.5%] w-2 h-2 rounded-full bg-[#ffe49e] shadow-[0_0_10px_#ffe49e] spark-ultra spark-delay-10">
                </div>
                <div
                    class="absolute bottom-[27%] left-[52.5%] w-2 h-2 rounded-full bg-[#f4c466] shadow-[0_0_10px_#f4c466] spark-ultra spark-delay-4">
                </div>
            </div>

            <!-- Hero Content Overlay (Razor Sharp & Highly Legible) -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-8">

                <!-- Top Pill Badge -->
                <div class="flex items-center justify-center lg:justify-start mb-6">
                    <div
                        class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-[#2d070d]/90 border border-[#f4c466]/40 text-[#fcebc7] text-xs font-semibold shadow-xl backdrop-blur-md">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#f4c466] shadow-[0_0_8px_#f4c466] animate-pulse"></span>
                        <span>Ready for a Digital Transformation?</span>
                        <span class="text-[#f4c466] font-bold">★ 250+ Libraries Digitized</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-stretch">

                    <!-- Left Column: Copy & Value Proposition (Full Height Flex) -->
                    <div class="lg:col-span-7 flex flex-col justify-between text-center lg:text-left h-full self-stretch">

                        <div class="space-y-6">
                            <!-- Main Headline -->
                            <div class="space-y-3">
                                <h1 class="text-4xl sm:text-5xl font-black tracking-tight leading-[1.12]">
                                    Transform Your Library with
                                    <span
                                        class="block sm:text-6xl devanagari-title text-transparent bg-clip-text bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] drop-shadow-[0_4px_16px_rgba(244,196,102,0.35)] mt-1">
                                        ग्रंथसंचय...
                                    </span>
                                </h1>
                                <p
                                    class="text-xl sm:text-2xl font-bold text-[#f4c466] tracking-wide uppercase drop-shadow-md">
                                    Advanced Library Management Software
                                </p>
                                <p class="text-xs font-bold uppercase tracking-[0.35em] text-[#fcebc7]/80">
                                    READ • LEARN • GROW
                                </p>
                            </div>

                            <!-- Descriptive Paragraph -->
                            <p
                                class="text-base sm:text-lg text-[#fcebc7]/90 max-w-2xl leading-relaxed mx-auto lg:mx-0 font-normal drop-shadow">
                                Step into modern academic automation. Replace outdated paper registers with <strong
                                    class="text-white font-semibold">Granth Sanchay</strong> — delivering 3-second barcode
                                circulation, automated accession cataloging, 24/7 student Web OPAC, and inspection-certified
                                NAAC reports.
                            </p>

                            <!-- Action Buttons (Matched 56px Height) -->
                            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                                <a href="{{ route('schedule-demo') }}"
                                    class="w-full sm:w-auto h-[56px] px-8 rounded-2xl font-bold text-base text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl shadow-[#dfa839]/25 hover:shadow-2xl hover:shadow-[#dfa839]/40 hover:scale-[1.03] active:scale-[0.98] transition-all flex items-center justify-center gap-2.5 group gold-sheen">
                                    <span>Schedule a Free Demo</span>
                                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>

                                <a href="#four-pillars"
                                    class="w-full sm:w-auto h-[56px] px-7 rounded-2xl font-semibold text-sm text-[#fcebc7] bg-[#240509]/75 hover:bg-[#380a10] border border-[#f4c466]/40 hover:border-[#f4c466] transition-all flex items-center justify-center gap-2 group backdrop-blur-md shadow-lg">
                                    <span
                                        class="w-7 h-7 rounded-full bg-[#f4c466]/20 flex items-center justify-center text-[#f4c466] group-hover:scale-115 transition-transform">
                                        🏛️
                                    </span>
                                    <span>Explore Key Pillars ↓</span>
                                </a>
                            </div>
                        </div>

                        <!-- Live Statistics Counter Strip (All 4 Box Heights 100% Matched & Single-Line Numbers) -->
                        <div
                            class="pt-6 mt-8 border-t border-[#460d15]/80 grid grid-cols-2 sm:grid-cols-4 gap-3.5 items-stretch text-left">
                            <div
                                class="bg-[#240509]/85 p-3.5 sm:p-4 rounded-2xl border border-[#f4c466]/25 backdrop-blur-md hover:border-[#f4c466]/50 transition-all shadow-lg flex flex-col justify-between h-full min-h-[96px]">
                                <span
                                    class="text-xl sm:text-2xl xl:text-3xl font-black text-[#f4c466] block font-mono whitespace-nowrap tracking-tight">⚡
                                    3 Sec</span>
                                <span class="text-xs text-[#fcebc7]/80 font-medium leading-snug mt-1.5 block">Barcode
                                    Circulation</span>
                            </div>
                            <div
                                class="bg-[#240509]/85 p-3.5 sm:p-4 rounded-2xl border border-[#f4c466]/25 backdrop-blur-md hover:border-[#f4c466]/50 transition-all shadow-lg flex flex-col justify-between h-full min-h-[96px]">
                                <span
                                    class="text-xl sm:text-2xl xl:text-3xl font-black text-[#f4c466] block font-mono whitespace-nowrap tracking-tight">50,000+</span>
                                <span class="text-xs text-[#fcebc7]/80 font-medium leading-snug mt-1.5 block">Books
                                    Supported</span>
                            </div>
                            <div
                                class="bg-[#240509]/85 p-3.5 sm:p-4 rounded-2xl border border-[#f4c466]/25 backdrop-blur-md hover:border-[#f4c466]/50 transition-all shadow-lg flex flex-col justify-between h-full min-h-[96px]">
                                <span
                                    class="text-xl sm:text-2xl xl:text-3xl font-black text-[#f4c466] block font-mono whitespace-nowrap tracking-tight">24/7</span>
                                <span class="text-xs text-[#fcebc7]/80 font-medium leading-snug mt-1.5 block">Mobile OPAC
                                    Portal</span>
                            </div>
                            <div
                                class="bg-[#240509]/85 p-3.5 sm:p-4 rounded-2xl border border-[#f4c466]/25 backdrop-blur-md hover:border-[#f4c466]/50 transition-all shadow-lg flex flex-col justify-between h-full min-h-[96px]">
                                <span
                                    class="text-xl sm:text-2xl xl:text-3xl font-black text-[#f4c466] block font-mono whitespace-nowrap tracking-tight">100%</span>
                                <span class="text-xs text-[#fcebc7]/80 font-medium leading-snug mt-1.5 block">NAAC / NBA
                                    Ready</span>
                            </div>
                        </div>

                    </div>

                    <!-- Right Column: Visual Poster Card in Gilded Glass Frame (Matching Full Height) -->
                    <div class="lg:col-span-5 relative h-full flex flex-col self-stretch">
                        <div class="relative mx-auto max-w-md lg:max-w-none w-full h-full flex flex-col flex-1">

                            <!-- Main Card Container (Equal Height & Flex Column) -->
                            <div
                                class="rounded-3xl bg-gradient-to-b from-[#460d15]/95 via-[#380a10]/95 to-[#240509]/95 p-5 shadow-2xl border-2 border-[#f4c466]/50 relative overflow-hidden group backdrop-blur-md hover:border-[#f4c466] transition-all duration-300 flex-1 flex flex-col justify-between h-full">

                                <!-- Top Header Strip inside card -->
                                <div
                                    class="bg-[#1f0407]/90 rounded-2xl p-3.5 mb-3 border border-[#f4c466]/25 flex items-center justify-between shrink-0">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                        <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                        <span class="w-3 h-3 rounded-full bg-green-500"></span>
                                        <span class="text-xs font-mono text-[#f4c466] ml-2 font-bold tracking-wider">🔒
                                            granthsanchay.com</span>
                                    </div>
                                    <span
                                        class="text-[11px] font-bold text-white bg-[#5c141e] px-3 py-1 rounded-full border border-[#f4c466]/30">
                                        2026 Edition
                                    </span>
                                </div>

                                <!-- Official Granth Sanchay Transparent Logo Display (Expands in center) -->
                                <div
                                    class="rounded-2xl p-5 sm:p-6 bg-gradient-to-b from-[#2d070d]/90 to-[#190205]/95 border border-[#f4c466]/30 shadow-inner relative group overflow-hidden flex flex-col items-center justify-center flex-1 my-2">

                                    <!-- Golden Backlight Glow behind Logo -->
                                    <div
                                        class="absolute inset-0 bg-radial-at-c from-[#dfa839]/20 via-transparent to-transparent pointer-events-none">
                                    </div>

                                    <!-- Interactive Living Logo (Animated Soaring Birds & Swaying Book Tree) -->
                                    <div
                                        class="relative w-full max-w-[320px] sm:max-w-[340px] aspect-[1024/623] mx-auto z-10 select-none">

                                        <!-- Layer 1: Solid Base (Typography, Calligraphy Flourish & Rooted Trunk) -->
                                        <img src="{{ asset('images/logo-layer-base.png') }}"
                                            alt="Granth Sanchay Typography and Tree Trunk"
                                            class="absolute inset-0 w-full h-full object-contain pointer-events-none drop-shadow-[0_12px_24px_rgba(244,196,102,0.2)]">

                                        <!-- Layer 2: Book Tree Canopy (Gently Swaying & Fluttering in the Breeze) -->
                                        <img src="{{ asset('images/logo-layer-canopy.png') }}"
                                            alt="Granth Sanchay Book Tree Canopy"
                                            class="absolute inset-0 w-full h-full object-contain pointer-events-none animate-book-breeze drop-shadow-[0_8px_16px_rgba(244,196,102,0.25)]">

                                        <!-- Layer 3: Realistic Flying Golden Birds with Flapping Wings -->
                                        <div
                                            class="absolute left-[14%] top-[46%] animate-bird-fly-1 pointer-events-none z-20">
                                            <svg class="w-4 h-4 text-[#ffe49e] drop-shadow-[0_0_8px_#ffe49e]"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path class="animate-wing-flap origin-center"
                                                    d="M12 9 C8 4 3 6 1 7 C5 9 8 11 12 12 C16 11 19 9 23 7 C21 6 16 4 12 9 Z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute left-[20%] top-[54%] animate-bird-fly-2 pointer-events-none z-20">
                                            <svg class="w-3.5 h-3.5 text-[#f4c466] drop-shadow-[0_0_6px_#f4c466]"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path class="animate-wing-flap origin-center"
                                                    d="M12 9 C8 4 3 6 1 7 C5 9 8 11 12 12 C16 11 19 9 23 7 C21 6 16 4 12 9 Z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute left-[8%] top-[38%] animate-bird-fly-3 pointer-events-none z-20">
                                            <svg class="w-4 h-4 text-[#ffd978] drop-shadow-[0_0_8px_#ffd978]"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path class="animate-wing-flap origin-center"
                                                    d="M12 9 C8 4 3 6 1 7 C5 9 8 11 12 12 C16 11 19 9 23 7 C21 6 16 4 12 9 Z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute left-[26%] top-[50%] animate-bird-fly-4 pointer-events-none z-20">
                                            <svg class="w-3 h-3 text-[#f4c466] drop-shadow-[0_0_6px_#f4c466]"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path class="animate-wing-flap origin-center"
                                                    d="M12 9 C8 4 3 6 1 7 C5 9 8 11 12 12 C16 11 19 9 23 7 C21 6 16 4 12 9 Z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute left-[16%] top-[34%] animate-bird-fly-5 pointer-events-none z-20">
                                            <svg class="w-2.5 h-2.5 text-[#fff0c2] drop-shadow-[0_0_5px_#fff0c2]"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path class="animate-wing-flap origin-center"
                                                    d="M12 9 C8 4 3 6 1 7 C5 9 8 11 12 12 C16 11 19 9 23 7 C21 6 16 4 12 9 Z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Subtle Tagline Badge below Logo -->
                                    <div class="mt-4 pt-3 border-t border-[#f4c466]/20 text-center w-full relative z-10">
                                        <span class="text-xs font-bold uppercase tracking-widest text-[#f4c466] block">
                                            Advanced Library Management Software
                                        </span>
                                        <span class="text-[11px] text-[#fcebc7]/70 mt-1 block font-medium">
                                            Complete Digital Campus Automation
                                        </span>
                                    </div>

                                    <!-- 4 Key Capability Chips in 2x2 Grid (Balanced & Symmetrical) -->
                                    <div class="mt-3.5 grid grid-cols-2 gap-2 w-full text-center relative z-10">
                                        <div
                                            class="bg-[#1f0407]/75 py-2 px-2.5 rounded-xl border border-[#f4c466]/20 text-[11px] font-bold text-[#fcebc7]/90 flex items-center justify-center gap-1.5">
                                            <span>⚡</span>
                                            <span>3-Sec Circulation</span>
                                        </div>
                                        <div
                                            class="bg-[#1f0407]/75 py-2 px-2.5 rounded-xl border border-[#f4c466]/20 text-[11px] font-bold text-[#fcebc7]/90 flex items-center justify-center gap-1.5">
                                            <span>📱</span>
                                            <span>24/7 Web OPAC</span>
                                        </div>
                                        <div
                                            class="bg-[#1f0407]/75 py-2 px-2.5 rounded-xl border border-[#f4c466]/20 text-[11px] font-bold text-[#fcebc7]/90 flex items-center justify-center gap-1.5">
                                            <span>📊</span>
                                            <span>NAAC Criterion 4.2</span>
                                        </div>
                                        <div
                                            class="bg-[#1f0407]/75 py-2 px-2.5 rounded-xl border border-[#f4c466]/20 text-[11px] font-bold text-[#fcebc7]/90 flex items-center justify-center gap-1.5">
                                            <span>🏷️</span>
                                            <span>Barcode & Labels</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bottom Contact Strip on Card -->
                                <div
                                    class="mt-2 bg-[#1f0407]/90 rounded-xl p-3 text-center border border-[#f4c466]/25 shrink-0">
                                    <p class="text-xs text-[#fcebc7]/90 flex items-center justify-center gap-2 flex-wrap">
                                        <span>📞 Helpline: <a href="tel:+919328938959"
                                                class="text-[#f4c466] font-bold hover:underline">+91 93289 38959</a></span>
                                        <span class="text-[#f4c466]/40 hidden sm:inline">•</span>
                                        <span class="text-[#fcebc7]/70 hidden sm:inline">www.granthsanchay.com</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Floating Badge 1 (Bottom Left) -->
                            <div
                                class="absolute -bottom-3 -left-3 bg-[#1f0407]/95 backdrop-blur-md p-3 rounded-2xl border border-[#f4c466]/50 shadow-2xl flex items-center gap-3 hidden sm:flex z-20">
                                <div
                                    class="w-8 h-8 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-sm">
                                    ✓
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-white block">Free Excel Migration</span>
                                    <span class="text-[10px] text-[#fcebc7]/70">We import your old register</span>
                                </div>
                            </div>

                            <!-- Floating Badge 2 (Top Right) -->
                            <div
                                class="absolute -top-3 -right-3 bg-gradient-to-r from-[#ffe49e] to-[#f4c466] text-[#2d070d] px-3.5 py-1.5 rounded-xl font-black shadow-2xl flex items-center gap-1.5 hidden sm:flex z-20 text-xs">
                                <span>⚡</span>
                                <span>Same-Day Setup</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- 4 KEY PILLARS OF GRANTH SANCHAY (Continuous Background Flowing to Boxes) -->
        <!-- ========================================================================= -->
        <section id="four-pillars" class="relative z-10 pt-10 pb-24 text-white">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-gradient-to-r from-[#380a10] via-[#5c141e] to-[#380a10] text-[#f4c466] text-xs font-bold border border-[#f4c466]/40 shadow-[0_0_20px_rgba(244,196,102,0.2)] backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-[#f4c466] animate-beacon"></span>
                        <span>चार प्रमुख आधारस्तंभ • The 4 Pillars</span>
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        Complete Academic <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839]">Automation</span>
                    </h2>
                    <p class="text-base sm:text-lg text-[#fcebc7]/85 leading-relaxed font-normal">
                        Granth Sanchay unites classical library precision with fast, modern digital automation — engineered
                        to run smoothly on any computer without lag.
                    </p>
                </div>

                <!-- 4 Pillars Grid (2x2 on desktop, 3D interactive tilt cards) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

                    <!-- Pillar 1: Accession & Cataloging -->
                    <div class="pillar-card-wrap">
                        <div class="pillar-card p-8 group flex flex-col justify-between h-full">
                            <div class="card-top-shine"></div>

                            <div class="space-y-5 relative z-10">
                                <!-- Top Bar: Custom SVG Icon + Pillar Badge -->
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#f4c466]/25 via-[#460d15] to-[#1f0407] border border-[#f4c466]/40 flex items-center justify-center relative shadow-[0_0_25px_rgba(244,196,102,0.22)] group-hover:shadow-[0_0_35px_rgba(244,196,102,0.45)] group-hover:scale-110 transition-all duration-300">
                                        <!-- Glowing Ambient Behind Icon -->
                                        <div
                                            class="absolute inset-0 bg-[#f4c466]/15 rounded-2xl blur-sm group-hover:blur-md transition-all">
                                        </div>
                                        <!-- Heritage Illuminated Manuscript & Quill SVG -->
                                        <svg class="w-9 h-9 text-[#f4c466] relative z-10" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a2.5 2.5 0 0 1-2.5-2.5Z" />
                                            <path d="M6 6h10" />
                                            <path d="M6 10h10" />
                                            <path d="M6 14h6" />
                                            <path d="M18 18l-4-4 4-4" stroke="#dfa839" stroke-width="2" />
                                            <circle cx="18" cy="6" r="1.5" fill="#f4c466" />
                                        </svg>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-2 bg-[#1f0407]/90 px-3.5 py-1.5 rounded-full border border-[#f4c466]/30 shadow-inner group-hover:border-[#f4c466]/60 transition-colors">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] animate-beacon"></span>
                                        <span class="text-[11px] font-bold text-[#f4c466] uppercase tracking-wider">Pillar
                                            01 • Heritage</span>
                                    </div>
                                </div>

                                <!-- Titles -->
                                <div>
                                    <span
                                        class="devanagari-title text-sm font-semibold tracking-wide text-[#f4c466] flex items-center gap-2 mb-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] shadow-[0_0_6px_#f4c466]"></span>
                                        सा विद्या या विमुक्तये
                                    </span>
                                    <h3
                                        class="text-2xl font-bold text-white tracking-tight group-hover:text-[#ffe49e] transition-colors">
                                        Master Accession Register & Cataloging
                                    </h3>
                                </div>

                                <p class="text-sm text-[#fcebc7]/80 leading-relaxed font-normal">
                                    Replace fragile manual accession registers. Catalog up to 50,000+ volumes with official
                                    DDC/UDC Dewey decimal numbers, instant ISBN title/author autofill, and exact rack &
                                    shelf locators.
                                </p>

                                <!-- Feature Checkpoints with Interactive Micro-Slide -->
                                <div class="pt-4 space-y-2.5 text-xs text-[#fcebc7]/90 border-t border-[#460d15]/80">
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Instant
                                                ISBN Fetch:</strong> Auto-pulls author, publisher, title, and edition in
                                            1s.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Multilingual
                                                Unicode:</strong> Seamless support for Hindi, Sanskrit, Gujarati,
                                            English.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Rack &
                                                Shelf Locator:</strong> Find any physical book in 5 seconds flat.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div
                                class="pt-6 mt-6 border-t border-[#460d15]/80 flex items-center justify-between relative z-10">
                                <a href="{{ route('features') }}"
                                    class="inline-flex items-center gap-2 text-xs font-bold text-[#f4c466] group-hover:text-[#ffe49e] py-1.5 px-3 rounded-lg hover:bg-[#5c141e]/50 border border-transparent hover:border-[#f4c466]/30 transition-all">
                                    <span>Explore Cataloging Specs</span>
                                    <span class="group-hover:translate-x-1.5 transition-transform">→</span>
                                </a>
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-[#1f0407] border border-[#f4c466]/20 text-[11px] font-mono text-[#fcebc7]/70">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_6px_#34d399] animate-pulse"></span>
                                    <span>50K+ Records</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 2: 3-Second Circulation Desk -->
                    <div class="pillar-card-wrap">
                        <div class="pillar-card p-8 group flex flex-col justify-between h-full">
                            <div class="card-top-shine"></div>

                            <div class="space-y-5 relative z-10">
                                <!-- Top Bar: Custom SVG Icon + Pillar Badge -->
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#f4c466]/25 via-[#460d15] to-[#1f0407] border border-[#f4c466]/40 flex items-center justify-center relative shadow-[0_0_25px_rgba(244,196,102,0.22)] group-hover:shadow-[0_0_35px_rgba(244,196,102,0.45)] group-hover:scale-110 transition-all duration-300 overflow-hidden">
                                        <div
                                            class="absolute inset-0 bg-[#f4c466]/15 rounded-2xl blur-sm group-hover:blur-md transition-all">
                                        </div>
                                        <!-- Laser Scanning Beam Line -->
                                        <div
                                            class="absolute inset-x-2 h-0.5 bg-gradient-to-r from-transparent via-[#ef4444] to-transparent shadow-[0_0_8px_#ef4444] animate-laser-scan z-20 pointer-events-none">
                                        </div>
                                        <!-- Barcode / RFID Speed Scanner SVG -->
                                        <svg class="w-9 h-9 text-[#f4c466] relative z-10" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M3 5v14" />
                                            <path d="M8 5v14" />
                                            <path d="M12 5v14" />
                                            <path d="M17 5v14" />
                                            <path d="M21 5v14" />
                                            <!-- Lightning Speed Bolt in Gold -->
                                            <path d="M13 3l-4 7h4l-2 7 7-9h-4l3-5z" fill="#f4c466" stroke="#2d070d"
                                                stroke-width="1.2" />
                                        </svg>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-2 bg-[#1f0407]/90 px-3.5 py-1.5 rounded-full border border-[#f4c466]/30 shadow-inner group-hover:border-[#f4c466]/60 transition-colors">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] animate-beacon"></span>
                                        <span class="text-[11px] font-bold text-[#f4c466] uppercase tracking-wider">Pillar
                                            02 • Speed</span>
                                    </div>
                                </div>

                                <!-- Titles -->
                                <div>
                                    <span
                                        class="devanagari-title text-sm font-semibold tracking-wide text-[#f4c466] flex items-center gap-2 mb-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] shadow-[0_0_6px_#f4c466]"></span>
                                        द्रुत संचलन पटल
                                    </span>
                                    <h3
                                        class="text-2xl font-bold text-white tracking-tight group-hover:text-[#ffe49e] transition-colors">
                                        3-Second Circulation Desk
                                    </h3>
                                </div>

                                <p class="text-sm text-[#fcebc7]/80 leading-relaxed font-normal">
                                    Handle massive rush hours at the counter without queues. Plug any standard USB or
                                    wireless barcode/RFID scanner for lightning-fast book issue, return, renewal, and
                                    automated fine calculation.
                                </p>

                                <!-- Feature Checkpoints with Interactive Micro-Slide -->
                                <div class="pt-4 space-y-2.5 text-xs text-[#fcebc7]/90 border-t border-[#460d15]/80">
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Rapid
                                                Barcode Check-In/Out:</strong> 3-second counter turnaround time.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Automated
                                                Fine Engine:</strong> Holiday calendar exclusion & custom member
                                            categories.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Hardware
                                                Agnostic:</strong> Works with any barcode scanner & printer, no expensive
                                            gear.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div
                                class="pt-6 mt-6 border-t border-[#460d15]/80 flex items-center justify-between relative z-10">
                                <a href="{{ route('features') }}"
                                    class="inline-flex items-center gap-2 text-xs font-bold text-[#f4c466] group-hover:text-[#ffe49e] py-1.5 px-3 rounded-lg hover:bg-[#5c141e]/50 border border-transparent hover:border-[#f4c466]/30 transition-all">
                                    <span>Explore Circulation Engine</span>
                                    <span class="group-hover:translate-x-1.5 transition-transform">→</span>
                                </a>
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-[#1f0407] border border-[#f4c466]/20 text-[11px] font-mono text-[#fcebc7]/70">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_6px_#34d399] animate-pulse"></span>
                                    <span>Zero Queues</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 3: Student Web OPAC & Mobile App -->
                    <div class="pillar-card-wrap">
                        <div class="pillar-card p-8 group flex flex-col justify-between h-full">
                            <div class="card-top-shine"></div>

                            <div class="space-y-5 relative z-10">
                                <!-- Top Bar: Custom SVG Icon + Pillar Badge -->
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#f4c466]/25 via-[#460d15] to-[#1f0407] border border-[#f4c466]/40 flex items-center justify-center relative shadow-[0_0_25px_rgba(244,196,102,0.22)] group-hover:shadow-[0_0_35px_rgba(244,196,102,0.45)] group-hover:scale-110 transition-all duration-300">
                                        <div
                                            class="absolute inset-0 bg-[#f4c466]/15 rounded-2xl blur-sm group-hover:blur-md transition-all">
                                        </div>
                                        <!-- Modern Smartphone & OPAC Radar SVG -->
                                        <svg class="w-9 h-9 text-[#f4c466] relative z-10" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="5" y="2" width="14" height="20" rx="3" ry="3" />
                                            <path d="M11 18h2" />
                                            <!-- Mini Book Card on Phone Screen -->
                                            <path d="M8 7h8" />
                                            <path d="M8 10h5" />
                                            <path d="M8 13h6" />
                                            <!-- Wireless OPAC Signal Waves -->
                                            <path d="M19 5a3 3 0 0 1 0 4" stroke="#dfa839" />
                                            <path d="M21 3a6 6 0 0 1 0 8" stroke="#f4c466" />
                                        </svg>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-2 bg-[#1f0407]/90 px-3.5 py-1.5 rounded-full border border-[#f4c466]/30 shadow-inner group-hover:border-[#f4c466]/60 transition-colors">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] animate-beacon"></span>
                                        <span class="text-[11px] font-bold text-[#f4c466] uppercase tracking-wider">Pillar
                                            03 • Accessibility</span>
                                    </div>
                                </div>

                                <!-- Titles -->
                                <div>
                                    <span
                                        class="devanagari-title text-sm font-semibold tracking-wide text-[#f4c466] flex items-center gap-2 mb-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] shadow-[0_0_6px_#f4c466]"></span>
                                        छात्र वेब ओपेक
                                    </span>
                                    <h3
                                        class="text-2xl font-bold text-white tracking-tight group-hover:text-[#ffe49e] transition-colors">
                                        24/7 Student Web OPAC & Digital Cards
                                    </h3>
                                </div>

                                <p class="text-sm text-[#fcebc7]/80 leading-relaxed font-normal">
                                    Empower students and faculty to search your entire catalog anytime, anywhere from
                                    smartphones, tablets, or campus kiosks. Real-time availability, book holds, and digital
                                    barcode ID cards.
                                </p>

                                <!-- Feature Checkpoints with Interactive Micro-Slide -->
                                <div class="pt-4 space-y-2.5 text-xs text-[#fcebc7]/90 border-t border-[#460d15]/80">
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Live
                                                Mobile Discovery:</strong> Search by title, author, subject, or ISBN.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Digital
                                                Member ID Card:</strong> Students carry library barcodes on their
                                            phones.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">WhatsApp
                                                & SMS Alerts:</strong> Automated reminders before due dates prevent
                                            fines.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div
                                class="pt-6 mt-6 border-t border-[#460d15]/80 flex items-center justify-between relative z-10">
                                <a href="{{ route('features') }}"
                                    class="inline-flex items-center gap-2 text-xs font-bold text-[#f4c466] group-hover:text-[#ffe49e] py-1.5 px-3 rounded-lg hover:bg-[#5c141e]/50 border border-transparent hover:border-[#f4c466]/30 transition-all">
                                    <span>Explore OPAC Features</span>
                                    <span class="group-hover:translate-x-1.5 transition-transform">→</span>
                                </a>
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-[#1f0407] border border-[#f4c466]/20 text-[11px] font-mono text-[#fcebc7]/70">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_6px_#34d399] animate-pulse"></span>
                                    <span>24/7 Access</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 4: NAAC & NBA Inspection Audit Reports -->
                    <div class="pillar-card-wrap">
                        <div class="pillar-card p-8 group flex flex-col justify-between h-full">
                            <div class="card-top-shine"></div>

                            <div class="space-y-5 relative z-10">
                                <!-- Top Bar: Custom SVG Icon + Pillar Badge -->
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#f4c466]/25 via-[#460d15] to-[#1f0407] border border-[#f4c466]/40 flex items-center justify-center relative shadow-[0_0_25px_rgba(244,196,102,0.22)] group-hover:shadow-[0_0_35px_rgba(244,196,102,0.45)] group-hover:scale-110 transition-all duration-300">
                                        <div
                                            class="absolute inset-0 bg-[#f4c466]/15 rounded-2xl blur-sm group-hover:blur-md transition-all">
                                        </div>
                                        <!-- Official Accreditation Shield & Analytics SVG -->
                                        <svg class="w-9 h-9 text-[#f4c466] relative z-10" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                            <path d="M9 12l2 2 4-4" stroke="#dfa839" stroke-width="2" />
                                            <!-- Analytics Benchmark Bar Sparks -->
                                            <path d="M9 17h6" stroke-dasharray="1 2" />
                                        </svg>
                                    </div>

                                    <div
                                        class="inline-flex items-center gap-2 bg-[#1f0407]/90 px-3.5 py-1.5 rounded-full border border-[#f4c466]/30 shadow-inner group-hover:border-[#f4c466]/60 transition-colors">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] animate-beacon"></span>
                                        <span class="text-[11px] font-bold text-[#f4c466] uppercase tracking-wider">Pillar
                                            04 • Compliance</span>
                                    </div>
                                </div>

                                <!-- Titles -->
                                <div>
                                    <span
                                        class="devanagari-title text-sm font-semibold tracking-wide text-[#f4c466] flex items-center gap-2 mb-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#f4c466] shadow-[0_0_6px_#f4c466]"></span>
                                        मूल्यांकन एवं अंकेक्षण
                                    </span>
                                    <h3
                                        class="text-2xl font-bold text-white tracking-tight group-hover:text-[#ffe49e] transition-colors">
                                        1-Click NAAC & NBA Audit Registers
                                    </h3>
                                </div>

                                <p class="text-sm text-[#fcebc7]/80 leading-relaxed font-normal">
                                    Never panic before an accreditation committee visit. Granth Sanchay produces fully
                                    formatted NAAC Criterion 4.2 reports, annual stock verification, and student footfall
                                    logs in 1 click.
                                </p>

                                <!-- Feature Checkpoints with Interactive Micro-Slide -->
                                <div class="pt-4 space-y-2.5 text-xs text-[#fcebc7]/90 border-t border-[#460d15]/80">
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Criterion
                                                4.2 Reports:</strong> Instant certified library utilization metrics.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">Annual
                                                Stock Verification:</strong> Barcode reconciliation flags missing books in
                                            minutes.</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-3 group/item hover:translate-x-1.5 transition-transform duration-200">
                                        <div
                                            class="w-5 h-5 rounded-md bg-[#5c141e]/90 border border-[#f4c466]/50 flex items-center justify-center text-[#f4c466] font-bold shrink-0 mt-0.5 shadow-[0_0_8px_rgba(244,196,102,0.3)]">
                                            ✓
                                        </div>
                                        <span class="leading-snug"><strong
                                                class="text-white group-hover/item:text-[#f4c466] transition-colors">1-Click
                                                Export:</strong> Download official registers in Excel (.xlsx) and printable
                                            PDF.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div
                                class="pt-6 mt-6 border-t border-[#460d15]/80 flex items-center justify-between relative z-10">
                                <a href="{{ route('features') }}"
                                    class="inline-flex items-center gap-2 text-xs font-bold text-[#f4c466] group-hover:text-[#ffe49e] py-1.5 px-3 rounded-lg hover:bg-[#5c141e]/50 border border-transparent hover:border-[#f4c466]/30 transition-all">
                                    <span>Explore Audit Reports</span>
                                    <span class="group-hover:translate-x-1.5 transition-transform">→</span>
                                </a>
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-[#1f0407] border border-[#f4c466]/20 text-[11px] font-mono text-[#fcebc7]/70">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_6px_#34d399] animate-pulse"></span>
                                    <span>100% Certified</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Section Footer CTA Banner with Luxury Border & Gold Sheen -->
                <div
                    class="mt-16 p-7 rounded-3xl bg-gradient-to-r from-[#1c0306]/95 via-[#2d070d]/90 to-[#1c0306]/95 border border-[#f4c466]/35 shadow-2xl flex flex-col sm:flex-row items-center justify-between gap-5 text-center sm:text-left relative overflow-hidden backdrop-blur-xl">
                    <div class="absolute inset-0 bg-radial-gradient pointer-events-none opacity-20"></div>
                    <div class="relative z-10 space-y-1">
                        <span
                            class="text-[#f4c466] font-bold text-sm sm:text-base flex items-center gap-2 justify-center sm:justify-start">
                            <span class="w-2 h-2 rounded-full bg-[#f4c466] animate-beacon"></span>
                            Want to experience these modules live with your institutional catalog?
                        </span>
                        <span class="text-xs text-[#fcebc7]/70 block">Schedule a customized 20-minute demonstration tailored
                            to your school, college, or university library.</span>
                    </div>
                    <a href="{{ route('schedule-demo') }}"
                        class="relative z-10 px-7 py-3 rounded-xl font-bold text-xs uppercase tracking-wider text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] hover:scale-105 active:scale-95 transition-transform shadow-[0_0_20px_rgba(244,196,102,0.35)] whitespace-nowrap">
                        Schedule Demo →
                    </a>
                </div>

            </div>
        </section>
    </div> <!-- End #hero-and-pillars-wrapper -->

    <!-- ========================================================================= -->
    <!-- INTERACTIVE BARCODE CIRCULATION SIMULATOR -->
    <!-- ========================================================================= -->
    <section class="py-20 bg-[#fdfaf3] relative" x-data="{
                     isScanning: false,
                     scanSuccess: false,
                     scannedBook: null,
                     activeTab: 'demo-scan',
                     simulateScan() {
                         this.isScanning = true;
                         this.scanSuccess = false;
                         setTimeout(() => {
                             this.isScanning = false;
                             this.scanSuccess = true;
                             this.scannedBook = {
                                 title: 'Atomic Habits',
                                 author: 'James Clear',
                                 accNo: 'GSA-04562',
                                 member: 'Rajnish Kumar (GS-S11409)',
                                 dueDate: '14 Days (Nov 11, 2026)',
                                 status: 'Issued Successfully'
                             };
                         }, 1200);
                     }
                 }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Left Info -->
                <div class="lg:col-span-5 space-y-5">
                    <span
                        class="text-xs font-bold uppercase tracking-wider text-[#932a39] bg-[#faebed] px-3.5 py-1.5 rounded-full border border-[#932a39]/20">
                        Live Interactive Simulation
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#2d070d]">
                        Experience The 3-Second Checkout
                    </h2>
                    <p class="text-base text-stone-600 leading-relaxed">
                        Test our rapid barcode scanning engine right now. Click the button to simulate a live counter
                        checkout with real-time membership validation and automated due dates.
                    </p>

                    <div class="space-y-3 text-sm text-stone-700">
                        <div class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-[#faebed] text-[#932a39] font-bold flex items-center justify-center text-xs">1</span>
                            <span>Scan Member ID Card (Barcode or QR)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-[#faebed] text-[#932a39] font-bold flex items-center justify-center text-xs">2</span>
                            <span>Scan Book Spine Barcode</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-[#faebed] text-[#932a39] font-bold flex items-center justify-center text-xs">3</span>
                            <span>Automated Receipt & Return Date Generation</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button @click="simulateScan()" :disabled="isScanning"
                            class="px-8 py-4 rounded-xl font-bold text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-105 active:scale-95 transition-all flex items-center gap-2">
                            <span x-show="!isScanning">⚡ Click to Scan Book Barcode</span>
                            <span x-show="isScanning" x-cloak class="flex items-center gap-2">
                                <svg class="animate-spin h-4 w-4 text-[#2d070d]" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                <span>Scanning Barcode...</span>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Right Interactive Simulation Screen -->
                <div class="lg:col-span-7">
                    <div
                        class="rounded-3xl bg-[#240509] p-6 sm:p-8 border-2 border-[#f4c466]/40 shadow-2xl text-white relative overflow-hidden">

                        <!-- Scanner Laser Beam Animation -->
                        <div x-show="isScanning" x-cloak
                            class="absolute inset-x-0 h-1 bg-red-500 shadow-[0_0_15px_#ef4444] animate-bounce top-1/3 z-30 pointer-events-none">
                        </div>

                        <!-- Screen Header -->
                        <div class="flex items-center justify-between pb-4 border-b border-[#460d15] mb-5">
                            <div class="flex items-center gap-3">
                                <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span
                                    class="font-mono text-xs text-[#f4c466] font-bold uppercase tracking-wider">Circulation
                                    Desk v2.4</span>
                            </div>
                            <span class="text-xs text-[#fcebc7]/60 font-mono">Scanner: USB Ready</span>
                        </div>

                        <!-- Simulated Member & Book Barcode Interface -->
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="bg-[#380a10] p-4 rounded-xl border border-[#f4c466]/20">
                                    <span class="text-[11px] text-[#fcebc7]/60 block mb-1">Student Member ID</span>
                                    <strong class="text-sm text-white font-mono block">GS-S11409</strong>
                                    <span class="text-xs text-emerald-400">Rajnish Kumar • Active</span>
                                </div>
                                <div class="bg-[#380a10] p-4 rounded-xl border border-[#f4c466]/20">
                                    <span class="text-[11px] text-[#fcebc7]/60 block mb-1">Barcode Scanner Input</span>
                                    <div class="flex items-center gap-2">
                                        <span class="font-mono text-xs text-[#f4c466]"
                                            x-text="isScanning ? 'Reading laser...' : (scanSuccess ? '978-0735211292' : 'Waiting for scan...')"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Result Box -->
                            <div class="bg-[#1f0407] rounded-2xl p-5 border border-[#f4c466]/30 text-xs space-y-2">
                                <div
                                    class="flex items-center justify-between font-bold text-sm text-[#f4c466] border-b border-[#460d15] pb-2">
                                    <span>Transaction Status</span>
                                    <span
                                        x-text="scanSuccess ? '✓ BOOK ISSUED' : (isScanning ? 'SCANNING...' : 'READY')"></span>
                                </div>

                                <div x-show="!scanSuccess && !isScanning" class="py-6 text-center text-stone-400">
                                    <span class="text-3xl block mb-2">🏷️</span>
                                    <span>Click "⚡ Click to Scan Book Barcode" to test checkout speed</span>
                                </div>

                                <div x-show="isScanning" x-cloak class="py-6 text-center text-[#f4c466]">
                                    <span class="text-sm font-mono block animate-pulse">Scanning Barcode Laser... Validating
                                        Book Master...</span>
                                </div>

                                <div x-show="scanSuccess" x-cloak class="space-y-2 text-[#fcebc7]/90 pt-2 animate-fadeIn">
                                    <div class="flex justify-between">
                                        <span class="text-stone-400">Book Title:</span>
                                        <strong class="text-white">Atomic Habits by James Clear</strong>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-stone-400">Accession No:</span>
                                        <span class="font-mono text-[#f4c466]">GSA-04562</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-stone-400">Loan Period:</span>
                                        <span>14 Days (Due: Nov 11, 2026)</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-stone-400">Librarian Operator:</span>
                                        <span>Admin Terminal 01</span>
                                    </div>
                                    <div
                                        class="p-2.5 rounded-lg bg-emerald-950/60 border border-emerald-500/40 text-emerald-300 text-center font-bold mt-3">
                                        ✓ Completed in 1.2 Seconds • SMS & Email Alert Sent to Student
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="mt-5 pt-4 border-t border-[#460d15] flex items-center justify-between text-xs text-[#fcebc7]/70">
                            <span>Granth Sanchay High-Speed Checkout</span>
                            <a href="{{ route('schedule-demo') }}" class="text-[#f4c466] font-bold hover:underline">Get Full
                                Software Demo →</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- INTERACTIVE ROI & TIME SAVINGS CALCULATOR -->
    <!-- ========================================================================= -->
    <section class="py-20 bg-gradient-to-b from-[#240509] via-[#380a10] to-[#240509] text-white" x-data="{
                     bookCount: 15000,
                     studentCount: 2000,
                     get hoursSaved() {
                         return Math.round((this.studentCount * 0.08) + (this.bookCount * 0.005));
                     },
                     get lostBooksSaved() {
                         return Math.round(this.bookCount * 0.02);
                     },
                     get moneySaved() {
                         return (this.lostBooksSaved * 350).toLocaleString('en-IN');
                     }
                 }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span
                    class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
                    Institutional Value
                </span>
                <h2 class="text-3xl sm:text-5xl font-black text-white">
                    Calculate Your Library's <span class="text-[#f4c466]">Time & Cost Savings</span>
                </h2>
                <p class="text-base text-[#fcebc7]/80">
                    Slide the controls below to estimate the weekly hours and book loss expenses Granth Sanchay will save
                    for your institution.
                </p>
            </div>

            <div class="bg-[#1f0407] rounded-3xl p-6 sm:p-12 border-2 border-[#f4c466]/30 shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

                    <!-- Left: Sliders -->
                    <div class="lg:col-span-6 space-y-8">

                        <!-- Slider 1: Total Books -->
                        <div class="space-y-3">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-bold text-[#fcebc7]">Total Books in Your Library:</span>
                                <span class="font-mono text-lg font-bold text-[#f4c466]"
                                    x-text="bookCount.toLocaleString() + ' Books'"></span>
                            </div>
                            <input type="range" min="2000" max="60000" step="1000" x-model="bookCount"
                                class="w-full h-2 bg-[#460d15] rounded-lg appearance-none cursor-pointer accent-[#f4c466]">
                            <div class="flex justify-between text-[11px] text-[#fcebc7]/50 font-mono">
                                <span>2,000 (Small School)</span>
                                <span>30,000 (Degree College)</span>
                                <span>60,000+ (University)</span>
                            </div>
                        </div>

                        <!-- Slider 2: Total Students -->
                        <div class="space-y-3">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-bold text-[#fcebc7]">Active Students & Faculties:</span>
                                <span class="font-mono text-lg font-bold text-[#f4c466]"
                                    x-text="studentCount.toLocaleString() + ' Members'"></span>
                            </div>
                            <input type="range" min="300" max="10000" step="100" x-model="studentCount"
                                class="w-full h-2 bg-[#460d15] rounded-lg appearance-none cursor-pointer accent-[#f4c466]">
                            <div class="flex justify-between text-[11px] text-[#fcebc7]/50 font-mono">
                                <span>300 Members</span>
                                <span>5,000 Members</span>
                                <span>10,000+ Campus</span>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#380a10]/80 border border-[#f4c466]/20 text-xs text-[#fcebc7]/80">
                            <strong class="text-[#f4c466] block font-semibold mb-1">💡 Real Librarian Benchmark:</strong>
                            <span>Granth Sanchay reduces manual bookkeeping by over 85%, freeing your librarians to focus on
                                student guidance and research support.</span>
                        </div>

                    </div>

                    <!-- Right: Calculated Results Cards -->
                    <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="bg-[#380a10] p-6 rounded-2xl border border-[#f4c466]/30 text-center">
                            <span class="text-3xl sm:text-4xl font-black text-[#f4c466] font-mono block mb-1"
                                x-text="hoursSaved + ' hrs'"></span>
                            <h4 class="font-bold text-sm text-white mb-1">Time Saved Monthly</h4>
                            <p class="text-xs text-[#fcebc7]/70">In manual register writing and overdue calculations</p>
                        </div>

                        <div class="bg-[#380a10] p-6 rounded-2xl border border-[#f4c466]/30 text-center">
                            <span class="text-3xl sm:text-4xl font-black text-emerald-400 font-mono block mb-1"
                                x-text="'₹' + moneySaved"></span>
                            <h4 class="font-bold text-sm text-white mb-1">Estimated Book Savings</h4>
                            <p class="text-xs text-[#fcebc7]/70">Prevented book loss via automatic barcode tracking</p>
                        </div>

                        <div class="bg-[#380a10] p-6 rounded-2xl border border-[#f4c466]/30 text-center">
                            <span class="text-3xl sm:text-4xl font-black text-[#f4c466] font-mono block mb-1">2
                                Minutes</span>
                            <h4 class="font-bold text-sm text-white mb-1">NAAC Audit Reports</h4>
                            <p class="text-xs text-[#fcebc7]/70">Previously took 2 to 3 weeks of manual tallying</p>
                        </div>

                        <div class="bg-[#380a10] p-6 rounded-2xl border border-[#f4c466]/30 text-center">
                            <span class="text-3xl sm:text-4xl font-black text-emerald-400 font-mono block mb-1">100%</span>
                            <h4 class="font-bold text-sm text-white mb-1">Member Satisfaction</h4>
                            <p class="text-xs text-[#fcebc7]/70">Zero queue delays and 24/7 web OPAC search</p>
                        </div>

                        <div class="sm:col-span-2 mt-2">
                            <a href="{{ route('schedule-demo') }}"
                                class="w-full py-4 px-6 rounded-xl font-bold text-sm text-center text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-102 transition-all block">
                                Lock in These Savings — Schedule Free Demo
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- CORE MODULES GALLERY WITH TABS -->
    <!-- ========================================================================= -->
    <section class="py-20 bg-[#fdfaf3]" x-data="{ activeModule: 'dashboard' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
                <span
                    class="inline-block text-xs font-bold uppercase tracking-wider text-[#932a39] bg-[#faebed] px-3.5 py-1.5 rounded-full border border-[#932a39]/20">
                    Intuitive User Experience
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#2d070d]">
                    Designed for Speed, Simplicity & Elegance
                </h2>
                <p class="text-base text-stone-600">
                    Explore each major screen of Granth Sanchay. Built with modern UI paradigms so any staff member can
                    master circulation and cataloging on day one.
                </p>
            </div>

            <!-- Module Selector Tabs -->
            <div class="flex items-center justify-center gap-2 sm:gap-4 flex-wrap mb-10">
                <button @click="activeModule = 'dashboard'"
                    :class="activeModule === 'dashboard' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow-lg shadow-[#460d15]/30' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                    class="px-5 py-3 rounded-2xl text-xs sm:text-sm transition-all duration-200">
                    📊 Executive Dashboard
                </button>
                <button @click="activeModule = 'catalog'"
                    :class="activeModule === 'catalog' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow-lg shadow-[#460d15]/30' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                    class="px-5 py-3 rounded-2xl text-xs sm:text-sm transition-all duration-200">
                    📚 Book Master Catalog
                </button>
                <button @click="activeModule = 'circulation'"
                    :class="activeModule === 'circulation' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow-lg shadow-[#460d15]/30' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                    class="px-5 py-3 rounded-2xl text-xs sm:text-sm transition-all duration-200">
                    ⚡ Circulation & Barcode
                </button>
                <button @click="activeModule = 'opac'"
                    :class="activeModule === 'opac' ? 'bg-[#460d15] text-[#f4c466] font-bold shadow-lg shadow-[#460d15]/30' : 'bg-white text-stone-700 hover:bg-stone-100 border border-[#ede1cb]'"
                    class="px-5 py-3 rounded-2xl text-xs sm:text-sm transition-all duration-200">
                    🔍 Student Web OPAC
                </button>
            </div>

            <!-- Tab Content Display -->
            <div
                class="bg-[#1f0407] rounded-3xl p-4 sm:p-8 border-2 border-[#f4c466]/40 shadow-2xl relative overflow-hidden text-white">

                <!-- Tab 1: Dashboard -->
                <div x-show="activeModule === 'dashboard'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-98" x-transition:enter-end="opacity-100 scale-100">
                    <div class="rounded-2xl overflow-hidden border border-[#f4c466]/20 shadow-2xl">
                        <img src="{{ asset('images/screenshot-dashboard.jpg') }}" alt="Granth Sanchay Dashboard"
                            class="w-full h-auto object-cover">
                    </div>
                    <div
                        class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs sm:text-sm text-[#fcebc7]/90 px-2">
                        <div>
                            <strong class="text-[#f4c466] text-base">Executive Analytics Dashboard:</strong> Live counters
                            for 45,820+ Books, 3,240+ Active Members, daily circulation graphs, and overdue warning desk.
                        </div>
                        <a href="{{ route('screenshots') }}"
                            class="text-xs font-bold text-[#f4c466] hover:underline shrink-0">
                            View Full Screenshot Gallery →
                        </a>
                    </div>
                </div>

                <!-- Tab 2: Catalog -->
                <div x-show="activeModule === 'catalog'" x-cloak x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-98" x-transition:enter-end="opacity-100 scale-100">
                    <div class="rounded-2xl overflow-hidden border border-[#f4c466]/20 shadow-2xl">
                        <img src="{{ asset('images/screenshot-catalog.jpg') }}" alt="Book Master Catalog"
                            class="w-full h-auto object-cover">
                    </div>
                    <div
                        class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs sm:text-sm text-[#fcebc7]/90 px-2">
                        <div>
                            <strong class="text-[#f4c466] text-base">Book Master Management:</strong> Instant search, ISBN
                            barcode scanning, accession number tracking, and rack/shelf locator.
                        </div>
                        <a href="{{ route('screenshots') }}"
                            class="text-xs font-bold text-[#f4c466] hover:underline shrink-0">
                            View Full Screenshot Gallery →
                        </a>
                    </div>
                </div>

                <!-- Tab 3: Circulation -->
                <div x-show="activeModule === 'circulation'" x-cloak x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-98" x-transition:enter-end="opacity-100 scale-100">
                    <div class="rounded-2xl overflow-hidden border border-[#f4c466]/20 shadow-2xl">
                        <img src="{{ asset('images/screenshot-circulation.jpg') }}" alt="Circulation Desk"
                            class="w-full h-auto object-cover">
                    </div>
                    <div
                        class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs sm:text-sm text-[#fcebc7]/90 px-2">
                        <div>
                            <strong class="text-[#f4c466] text-base">Circulation Desk:</strong> Student photo profile,
                            active borrowings, fine calculator, and single-click barcode scan checkout.
                        </div>
                        <a href="{{ route('screenshots') }}"
                            class="text-xs font-bold text-[#f4c466] hover:underline shrink-0">
                            View Full Screenshot Gallery →
                        </a>
                    </div>
                </div>

                <!-- Tab 4: OPAC -->
                <div x-show="activeModule === 'opac'" x-cloak x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-98" x-transition:enter-end="opacity-100 scale-100">
                    <div class="rounded-2xl overflow-hidden border border-[#f4c466]/20 shadow-2xl">
                        <img src="{{ asset('images/screenshot-opac.jpg') }}" alt="Student OPAC"
                            class="w-full h-auto object-cover">
                    </div>
                    <div
                        class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs sm:text-sm text-[#fcebc7]/90 px-2">
                        <div>
                            <strong class="text-[#f4c466] text-base">Digital OPAC Portal:</strong> Students and faculties
                            can browse 50,000+ volumes, filter by subject, check real-time availability, and reserve books.
                        </div>
                        <a href="{{ route('screenshots') }}"
                            class="text-xs font-bold text-[#f4c466] hover:underline shrink-0">
                            View Full Screenshot Gallery →
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- INSTITUTIONAL TESTIMONIALS & TRUST -->
    <!-- ========================================================================= -->
    <section class="py-20 bg-[#240509] text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                <span
                    class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
                    Endorsed by Indian Educators
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                    Loved by Academic Institutions Across India
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="bg-[#380a10] p-8 rounded-3xl border border-[#f4c466]/20 flex flex-col justify-between hover:border-[#f4c466]/60 transition-colors">
                    <div>
                        <div class="text-[#f4c466] text-2xl mb-3">★★★★★</div>
                        <p class="text-sm text-[#fcebc7]/90 leading-relaxed italic mb-6">
                            "Granth Sanchay transformed our college library. During our NAAC inspection, we were able to
                            present our complete accession register and student footfall analytics in less than 2 minutes."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#5c141e] flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-[#f4c466] text-[#2d070d] font-bold flex items-center justify-center">
                            VK
                        </div>
                        <div>
                            <strong class="text-white text-sm block">Dr. Vijay Kulkarni</strong>
                            <span class="text-xs text-[#fcebc7]/60">Chief Librarian, Arts & Commerce College, Pune</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#380a10] p-8 rounded-3xl border border-[#f4c466]/20 flex flex-col justify-between hover:border-[#f4c466]/60 transition-colors">
                    <div>
                        <div class="text-[#f4c466] text-2xl mb-3">★★★★★</div>
                        <p class="text-sm text-[#fcebc7]/90 leading-relaxed italic mb-6">
                            "The barcode scanning feature is remarkably fast. With over 2,400 students visiting during
                            recess and lunch, book queues vanished completely. Support by the Granth Sanchay team is
                            responsive and polite."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#5c141e] flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-[#f4c466] text-[#2d070d] font-bold flex items-center justify-center">
                            SP
                        </div>
                        <div>
                            <strong class="text-white text-sm block">Smt. Pratibha Sharma</strong>
                            <span class="text-xs text-[#fcebc7]/60">Principal, Model Public Senior Secondary School,
                                Jaipur</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#380a10] p-8 rounded-3xl border border-[#f4c466]/20 flex flex-col justify-between hover:border-[#f4c466]/60 transition-colors">
                    <div>
                        <div class="text-[#f4c466] text-2xl mb-3">★★★★★</div>
                        <p class="text-sm text-[#fcebc7]/90 leading-relaxed italic mb-6">
                            "Our library previously used an outdated desktop software that kept corrupting our database. The
                            Granth Sanchay team migrated all 38,000 book records in one weekend without a single error. Best
                            decision we made."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#5c141e] flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-[#f4c466] text-[#2d070d] font-bold flex items-center justify-center">
                            RN
                        </div>
                        <div>
                            <strong class="text-white text-sm block">Prof. R. N. Patel</strong>
                            <span class="text-xs text-[#fcebc7]/60">Head of IT, Engineering Institute, Ahmedabad</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- FINAL CALL TO ACTION BANNER (POSTER THEME) -->
    <!-- ========================================================================= -->
    <section class="py-16 bg-gradient-to-r from-[#dfa839] via-[#f4c466] to-[#ffe49e] text-[#240509]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <h2 class="text-3xl sm:text-5xl font-black tracking-tight">
                Ready for a Digital Transformation?
            </h2>
            <p class="text-base sm:text-xl font-medium text-[#2d070d]/85 max-w-2xl mx-auto">
                Experience Granth Sanchay live with your own library data. Our specialists will walk you through barcode
                setup, cataloging, and web OPAC in a free 15-minute demo.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                <a href="{{ route('schedule-demo') }}"
                    class="px-9 py-4 rounded-2xl font-bold text-base text-[#fcebc7] bg-[#2d070d] hover:bg-[#460d15] shadow-2xl transition-all transform hover:scale-105 active:scale-95">
                    Schedule Your Free Demo Now
                </a>
                <a href="tel:+919328938959"
                    class="px-8 py-4 rounded-2xl font-bold text-base text-[#2d070d] bg-white/70 hover:bg-white border border-[#2d070d]/20 transition-all">
                    Call Us: +91 93289 38959
                </a>
            </div>
            <p class="text-xs font-semibold text-[#2d070d]/70 tracking-wider">
                Email: granthsanchaylib@gmail.com • www.granthsanchay.com
            </p>
        </div>
    </section>
@endsection