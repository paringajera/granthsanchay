@extends('layouts.app')

@section('title', 'Customer Support & Helpdesk - Granth Sanchay')
@section('meta_description', 'Get immediate assistance for Granth Sanchay Library Management Software. Call +91 93289 38959, email granthsanchaylib@gmail.com or request AnyDesk remote support.')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
            Dedicated Customer Care
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white">
            Support & <span class="text-[#f4c466]">Technical Assistance</span>
        </h1>
        <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
            We are dedicated to ensuring your library operates smoothly every single day. Reach our expert engineers through phone, email, WhatsApp, or remote desktop.
        </p>
    </div>
</div>

<!-- Support Channels Grid -->
<div class="py-16 bg-[#faf6ed] relative overflow-hidden" style="background-image: radial-gradient(ellipse at 50% 20%, rgba(244,196,102,0.12), transparent 70%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 xl:gap-7 mb-16">
            
            <!-- Channel 1: Phone -->
            <div class="support-card-wrapper relative group"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#e3d7bf] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#cbbfa6] opacity-75 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#eee4d0] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#ded3be] opacity-90 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#fffefc] via-[#fbf7f0] to-[#f5ede2] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-[#dfa839] shadow-md group-hover:shadow-2xl transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-[#faebed] text-[#460d15] border border-[#f4c466]/30 flex items-center justify-center mx-auto shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#2d070d]">Direct Phone Hotline</h3>
                        <p class="text-xs text-stone-600">Speak directly with a support technician.</p>
                        <a href="tel:+919328938959" class="block font-bold text-base text-[#932a39] hover:text-[#460d15] hover:underline transition-colors">
                            +91 93289 38959
                        </a>
                    </div>
                    <div class="pt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-stone-500 block">Mon - Sat: 9 AM - 7 PM IST</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- Channel 2: WhatsApp -->
            <div class="support-card-wrapper relative group"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#e3d7bf] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#cbbfa6] opacity-75 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#eee4d0] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#ded3be] opacity-90 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#fffefc] via-[#fbf7f0] to-[#f5ede2] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-emerald-600 shadow-md group-hover:shadow-2xl transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 border border-emerald-200 flex items-center justify-center mx-auto shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#2d070d]">WhatsApp Support</h3>
                        <p class="text-xs text-stone-600">Send error screenshots or queries instantly.</p>
                        <a href="https://wa.me/919328938959" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 font-bold text-base text-emerald-700 hover:text-emerald-800 hover:underline transition-colors">
                            <span>Chat on WhatsApp</span>
                            <span>→</span>
                        </a>
                    </div>
                    <div class="pt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-bold text-emerald-800 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-200 inline-block">Fast 15-Minute Response</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- Channel 3: Email -->
            <div class="support-card-wrapper relative group"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#e3d7bf] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#cbbfa6] opacity-75 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#eee4d0] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#ded3be] opacity-90 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#fffefc] via-[#fbf7f0] to-[#f5ede2] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-[#dfa839] shadow-md group-hover:shadow-2xl transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-[#faebed] text-[#460d15] border border-[#f4c466]/30 flex items-center justify-center mx-auto shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#2d070d]">Official Support Email</h3>
                        <p class="text-xs text-stone-600">For detailed requests, data, and inquiries.</p>
                        <a href="mailto:granthsanchaylib@gmail.com" class="block font-bold text-xs sm:text-sm text-[#932a39] hover:text-[#460d15] hover:underline break-all transition-colors">
                            granthsanchaylib@gmail.com
                        </a>
                    </div>
                    <div class="pt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-stone-500 block">Response within 4 hours</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

            <!-- Channel 4: Remote AnyDesk -->
            <div class="support-card-wrapper relative group"
                 @mouseenter="window.playGranthRustle && window.playGranthRustle()">
                <!-- Physical Stacked Book Sheets -->
                <div class="absolute inset-0 bg-[#e3d7bf] rounded-3xl translate-x-2.5 translate-y-3 shadow-md border border-[#cbbfa6] opacity-75 transition-all duration-500 group-hover:translate-x-3.5 group-hover:translate-y-4 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[#eee4d0] rounded-3xl translate-x-1.5 translate-y-1.5 shadow-sm border border-[#ded3be] opacity-90 transition-all duration-500 group-hover:translate-x-2 group-hover:translate-y-2 pointer-events-none"></div>

                <!-- Main Book Leaf -->
                <div class="book-page-front w-full h-full bg-gradient-to-b from-[#fffefc] via-[#fbf7f0] to-[#f5ede2] rounded-3xl p-6 sm:p-7 border-2 border-[#dfa839]/35 group-hover:border-amber-500 shadow-md group-hover:shadow-2xl transition-all duration-500 flex flex-col justify-between text-center relative overflow-hidden group-hover:[transform:perspective(1000px)_rotateY(-6deg)_rotateX(2deg)_translateY(-8px)]">
                    <div class="page-sheen-sweep pointer-events-none"></div>

                    <div class="space-y-3 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-700 border border-amber-200 flex items-center justify-center mx-auto shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#2d070d]">Remote Assistance</h3>
                        <p class="text-xs text-stone-600">Live AnyDesk & TeamViewer screen help.</p>
                        <span class="block font-bold text-sm text-[#dfa839]">
                            AnyDesk / TeamViewer
                        </span>
                    </div>
                    <div class="pt-3 border-t border-[#dfa839]/20 relative z-10">
                        <span class="text-[11px] font-medium text-stone-500 block">Zero setup headache</span>
                    </div>

                    <!-- 3D Corner Page Curl -->
                    <div class="page-curl-corner pointer-events-none">
                        <div class="page-curl-fold"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Two Column Section: Knowledge Base & Quick Ticket Form -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left: Knowledge Base & Downloads -->
            <div class="lg:col-span-7 space-y-6">
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Self Service</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#2d070d]">Library Guides & Templates</h2>
                    <p class="text-sm text-stone-600">Download quick references and official templates to jumpstart your workflow.</p>
                </div>

                <div class="space-y-4">
                    
                    <!-- Guide 1 -->
                    <div class="bg-white p-5 rounded-2xl border border-[#ede1cb] shadow-sm flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-red-100 text-red-700 flex items-center justify-center font-bold text-sm shrink-0">
                                PDF
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-[#2d070d]">Granth Sanchay Quick-Start Manual</h4>
                                <span class="text-xs text-stone-500">Step-by-step librarian guide for day-to-day operations (12 pages)</span>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="px-4 py-2 rounded-lg bg-stone-100 hover:bg-[#f4c466] text-xs font-bold text-[#2d070d] transition-colors shrink-0">
                            Download
                        </a>
                    </div>

                    <!-- Guide 2 -->
                    <div class="bg-white p-5 rounded-2xl border border-[#ede1cb] shadow-sm flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm shrink-0">
                                XLS
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-[#2d070d]">Standard Book Accession Import Template</h4>
                                <span class="text-xs text-stone-500">Pre-formatted Excel sheet to migrate your books into Granth Sanchay</span>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="px-4 py-2 rounded-lg bg-stone-100 hover:bg-[#f4c466] text-xs font-bold text-[#2d070d] transition-colors shrink-0">
                            Download
                        </a>
                    </div>

                    <!-- Guide 3 -->
                    <div class="bg-white p-5 rounded-2xl border border-[#ede1cb] shadow-sm flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm shrink-0">
                                DOC
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-[#2d070d]">Barcode Scanner & Thermal Printer Setup Guide</h4>
                                <span class="text-xs text-stone-500">Driver configuration and label calibration instructions</span>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="px-4 py-2 rounded-lg bg-stone-100 hover:bg-[#f4c466] text-xs font-bold text-[#2d070d] transition-colors shrink-0">
                            Download
                        </a>
                    </div>

                </div>

                <!-- Emergency Support Callout -->
                <div class="bg-[#240509] text-white p-6 rounded-2xl border-2 border-[#f4c466]/30 shadow-lg space-y-3">
                    <span class="text-xs font-bold text-[#f4c466] uppercase tracking-wider block">Urgent Help Needed?</span>
                    <h3 class="text-lg font-bold text-white">Inspection or Audit Tomorrow?</h3>
                    <p class="text-xs text-[#fcebc7]/80 leading-relaxed">
                        If your school or college has an impending NAAC, NBA, or Directorate inspection and you need emergency assistance with accession register generation, call our emergency hotline directly:
                    </p>
                    <a href="tel:+919328938959" class="inline-flex items-center gap-2 font-bold text-base text-[#f4c466] hover:underline">
                        <span>📞 Call Priority Line: +91 93289 38959</span>
                    </a>
                </div>
            </div>

            <!-- Right: Support Request Form -->
            <div class="lg:col-span-5 bg-white p-8 rounded-3xl border border-[#ede1cb] shadow-md">
                <div class="space-y-2 mb-6">
                    <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Fast Ticket Resolution</span>
                    <h3 class="text-xl font-bold text-[#2d070d]">Submit a Support Request</h3>
                    <p class="text-xs text-stone-500">Our technical team will review your inquiry and connect via phone or AnyDesk.</p>
                </div>

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Your Name *</label>
                        <input type="text" name="name" required placeholder="Librarian / Staff Name" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Phone / Mobile *</label>
                            <input type="tel" name="phone" required placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Email Address *</label>
                            <input type="email" name="email" required placeholder="librarian@college.edu" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Issue Category *</label>
                        <select name="subject" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm bg-white">
                            <option value="General Support Inquiry">General Software Inquiry</option>
                            <option value="Barcode Scanner Configuration">Barcode Scanner / Printer Configuration</option>
                            <option value="Excel Data Migration Help">Excel Data Migration Assistance</option>
                            <option value="NAAC / Audit Report Generation">NAAC / Audit Report Assistance</option>
                            <option value="Web OPAC Setup">Web OPAC Configuration</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Describe Issue / Query *</label>
                        <textarea name="message" rows="4" required placeholder="Please describe how we can assist your library..." class="w-full px-4 py-2.5 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 px-6 rounded-xl font-bold text-sm text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-md hover:scale-102 transition-all">
                        Submit Support Ticket
                    </button>
                    <p class="text-[11px] text-stone-400 text-center">
                        Need urgent response? Call <a href="tel:+919328938959" class="text-[#932a39] font-bold">+91 93289 38959</a>
                    </p>
                </form>
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
.support-card-wrapper:hover .page-sheen-sweep {
    opacity: 1;
    transform: translateX(100%);
}

/* 3D Page Curl Dog-Ear in Bottom-Right Corner */
.page-curl-corner {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 40px;
    height: 40px;
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
    border-width: 0 0 38px 38px;
    border-color: transparent transparent #e8dcc4 transparent;
    filter: drop-shadow(-3px -3px 4px rgba(0, 0, 0, 0.16));
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
}

/* Hover expansion of page curl (smooth corner peeling effect) */
.support-card-wrapper:hover .page-curl-corner {
    width: 60px;
    height: 60px;
}
.support-card-wrapper:hover .page-curl-fold {
    border-width: 0 0 58px 58px;
    filter: drop-shadow(-5px -5px 7px rgba(0, 0, 0, 0.25));
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
