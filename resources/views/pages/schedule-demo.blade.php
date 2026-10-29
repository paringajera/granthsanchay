@extends('layouts.app')

@section('title', 'Schedule a Free Demo - Granth Sanchay Library Management Software')
@section('meta_description', 'Book a free 15-minute live personalized demonstration of Granth Sanchay. See barcode scanning, book accession, and NAAC reports in real time.')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
            Interactive 1-on-1 Demonstration
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white">
            Schedule a <span class="text-[#f4c466]">Free Live Demo</span>
        </h1>
        <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
            Experience Granth Sanchay live. Our library automation specialist will walk through cataloging, barcode scanning, and student web OPAC tailored to your institution.
        </p>
    </div>
</div>

<div class="py-16 bg-[#fdfaf3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left: Interactive Demo Booking Form -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-[#ede1cb] shadow-lg">
                
                <div class="space-y-2 mb-8">
                    <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Zero Obligation</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#2d070d]">Book Your Preferred Time Slot</h2>
                    <p class="text-sm text-stone-600">
                        Fill in your details below. We will confirm your session via phone call or WhatsApp within 2 hours.
                    </p>
                </div>

                <form action="{{ route('schedule-demo.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <!-- Institution Name -->
                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                            Institution / Organization Name *
                        </label>
                        <input type="text" 
                               name="institution_name" 
                               required 
                               placeholder="e.g. Sardar Patel Memorial College of Arts & Science" 
                               class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                    </div>

                    <!-- Contact Person & Designation -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                                Your Full Name *
                            </label>
                            <input type="text" 
                                   name="contact_person" 
                                   required 
                                   placeholder="e.g. Dr. Ramesh Joshi" 
                                   class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                                Your Designation / Role
                            </label>
                            <input type="text" 
                                   name="designation" 
                                   placeholder="e.g. Chief Librarian / Principal" 
                                   class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                    </div>

                    <!-- Phone & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                                Mobile / WhatsApp Number *
                            </label>
                            <input type="tel" 
                                   name="phone" 
                                   required 
                                   placeholder="+91 93289 38959" 
                                   class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                                Official Email Address *
                            </label>
                            <input type="email" 
                                   name="email" 
                                   required 
                                   placeholder="library@institution.edu" 
                                   class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                    </div>

                    <!-- Book Count & Demo Preference -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                                Approximate Book Count
                            </label>
                            <select name="approx_books" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm bg-white">
                                <option value="Under 5,000 Books">Under 5,000 Books</option>
                                <option value="5,000 - 15,000 Books">5,000 - 15,000 Books</option>
                                <option value="15,000 - 35,000 Books" selected>15,000 - 35,000 Books</option>
                                <option value="35,000+ Books">35,000+ Books (Large / Multi-Campus)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                                Preferred Demo Mode
                            </label>
                            <select name="demo_type" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm bg-white">
                                <option value="Online Video Demo (Zoom / Google Meet)" selected>Online Video (Zoom / Google Meet)</option>
                                <option value="On-Site In-Person Visit">On-Site In-Person Visit</option>
                                <option value="Telephone Consultation">Telephone Consultation</option>
                            </select>
                        </div>
                    </div>

                    <!-- Preferred Date -->
                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                            Preferred Demo Date
                        </label>
                        <input type="date" 
                               name="preferred_date" 
                               min="{{ date('Y-m-d') }}"
                               value="{{ date('Y-m-d', strtotime('+1 day')) }}"
                               class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                    </div>

                    <!-- Additional Requirements -->
                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">
                            Specific Questions / Current Library Software
                        </label>
                        <textarea name="message" 
                                  rows="3" 
                                  placeholder="Mention any specific features you need, e.g. barcode printing, RFID, migrating from Excel or older software..." 
                                  class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full py-4 px-6 rounded-xl font-bold text-base text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-[1.01] active:scale-[0.99] transition-all">
                        Confirm Demo Request
                    </button>

                    <p class="text-xs text-stone-400 text-center">
                        Need urgent booking? Call <a href="tel:+919328938959" class="text-[#932a39] font-bold">+91 93289 38959</a> or WhatsApp us directly.
                    </p>
                </form>

            </div>

            <!-- Right: What to Expect & Value Props -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Card 1: What to Expect -->
                <div class="bg-[#240509] text-white p-8 rounded-3xl border-2 border-[#f4c466]/40 shadow-2xl space-y-5">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-3 py-1 rounded-full border border-[#f4c466]/20">
                        What to Expect
                    </span>
                    <h3 class="text-2xl font-extrabold text-white">
                        In Your 15-Minute Live Session
                    </h3>
                    
                    <ul class="space-y-4 text-xs sm:text-sm text-[#fcebc7]/90">
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span>
                            <div>
                                <strong class="text-white block">Tailored Workflow Review:</strong>
                                <span>We demonstrate solutions matching your exact library volume and staff size.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span>
                            <div>
                                <strong class="text-white block">Real Barcode & Scanner Test:</strong>
                                <span>Watch 3-second checkouts and instant ISBN cataloging in action.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span>
                            <div>
                                <strong class="text-white block">Free Excel Migration Plan:</strong>
                                <span>We verify your current register format and explain the seamless transition.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-[#f4c466] text-[#2d070d] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">4</span>
                            <div>
                                <strong class="text-white block">Official Institutional Quote:</strong>
                                <span>Receive transparent documentation ready for purchase committee approval.</span>
                            </div>
                        </li>
                    </ul>

                    <div class="pt-4 border-t border-[#460d15] text-xs text-[#fcebc7]/80 space-y-1">
                        <p class="text-[#f4c466] font-bold">Direct Helpline:</p>
                        <p><a href="tel:+919328938959" class="text-white text-base font-bold hover:underline">+91 93289 38959</a></p>
                        <p><a href="mailto:granthsanchaylib@gmail.com" class="hover:underline">granthsanchaylib@gmail.com</a></p>
                    </div>
                </div>

                <!-- Poster Graphic Card -->
                <div class="rounded-3xl overflow-hidden shadow-xl border border-[#ede1cb] bg-white p-3">
                    <img src="{{ asset('images/granth-sanchay-poster.jpg') }}" alt="Granth Sanchay Identity Poster" class="w-full h-auto rounded-2xl object-cover">
                    <div class="p-3 text-center">
                        <span class="text-xs font-bold text-[#932a39]">Granth Sanchay • Advanced Library Management Software</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
