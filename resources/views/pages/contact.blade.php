@extends('layouts.app')

@section('title', 'Contact Us - Granth Sanchay Library Management Software')
@section('meta_description', 'Contact Granth Sanchay: Phone +91 93289 38959, Email granthsanchaylib@gmail.com, Website www.granthsanchay.com. We help Indian schools and colleges digitize libraries.')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-b from-[#2d070d] via-[#380a10] to-[#240509] text-white py-16 border-b border-[#460d15]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-wider text-[#f4c466] bg-[#5c141e] px-4 py-1.5 rounded-full border border-[#f4c466]/30">
            Get in Touch
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white">
            Contact <span class="text-[#f4c466]">Granth Sanchay</span>
        </h1>
        <p class="text-base sm:text-lg text-[#fcebc7]/80 max-w-2xl mx-auto">
            Ready for a Digital Transformation? Our team is always eager to assist librarians, trustees, principals, and IT directors across India.
        </p>
    </div>
</div>

<div class="py-16 bg-[#fdfaf3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: Contact Cards & Official Information -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Main Identity Card (Theme Burgundy & Gold) -->
                <div class="bg-gradient-to-br from-[#380a10] to-[#1f0407] rounded-3xl p-8 border-2 border-[#f4c466]/40 shadow-2xl text-white space-y-6 relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-[#dfa839]/10 rounded-full blur-2xl"></div>

                    <div class="space-y-1">
                        <span class="text-xs uppercase tracking-widest text-[#f4c466] font-bold">Official Headquarters</span>
                        <h2 class="devanagari-title text-3xl font-extrabold text-[#f4c466]">ग्रंथसंचय</h2>
                        <p class="text-xs font-bold uppercase tracking-widest text-white/70">READ • LEARN • GROW</p>
                    </div>

                    <p class="text-xs sm:text-sm text-[#fcebc7]/85 leading-relaxed">
                        Granth Sanchay provides end-to-end library automation solutions, barcode scanners, RFID readers, and comprehensive cloud cataloging for academic institutions across India.
                    </p>

                    <div class="space-y-4 pt-4 border-t border-[#460d15] text-sm text-[#fcebc7]">
                        
                        <!-- Phone -->
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-[#5c141e] text-[#f4c466] flex items-center justify-center shrink-0 border border-[#f4c466]/30">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block font-medium">Helpline & Consultation</span>
                                <a href="tel:+919328938959" class="font-bold text-lg text-white hover:text-[#f4c466] transition-colors">
                                    +91 93289 38959
                                </a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-[#5c141e] text-[#f4c466] flex items-center justify-center shrink-0 border border-[#f4c466]/30">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block font-medium">Direct Email</span>
                                <a href="mailto:granthsanchaylib@gmail.com" class="font-bold text-sm text-[#f4c466] hover:underline break-all">
                                    granthsanchaylib@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-[#5c141e] text-[#f4c466] flex items-center justify-center shrink-0 border border-[#f4c466]/30">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block font-medium">Official Portal</span>
                                <a href="https://www.granthsanchay.com" target="_blank" rel="noopener" class="font-bold text-sm text-white hover:text-[#f4c466] transition-colors">
                                    www.granthsanchay.com
                                </a>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-[#5c141e] text-[#f4c466] flex items-center justify-center shrink-0 border border-[#f4c466]/30">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-[#fcebc7]/60 block font-medium">Working Hours</span>
                                <span class="font-bold text-sm text-white">Monday - Saturday</span>
                                <span class="text-xs text-[#fcebc7]/70 block">9:00 AM - 7:00 PM IST</span>
                            </div>
                        </div>

                    </div>

                    <!-- Instant WhatsApp Button -->
                    <div class="pt-2">
                        <a href="https://wa.me/919328938959?text=Hello%20Granth%20Sanchay%20Team%2C%20I%20would%20like%20to%20connect%20regarding%20Library%20Software" 
                           target="_blank" 
                           rel="noopener"
                           class="w-full py-3.5 px-4 rounded-xl font-bold text-center text-sm text-[#052e16] bg-[#22c55e] hover:bg-[#4ade80] shadow-xl flex items-center justify-center gap-2 transition-all">
                            <span>Direct Chat on WhatsApp</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Poster Graphic Card -->
                <div class="bg-white rounded-3xl p-4 border border-[#ede1cb] shadow-sm flex items-center gap-4">
                    <img src="{{ asset('images/granth-sanchay-poster.jpg') }}" alt="Granth Sanchay Poster" class="w-24 h-auto rounded-xl object-cover shrink-0 shadow">
                    <div>
                        <h4 class="font-bold text-sm text-[#2d070d]">Advanced Library Software</h4>
                        <p class="text-xs text-stone-500 mt-1">Book cataloging, barcode scanning & digital transformation for Indian libraries.</p>
                        <a href="{{ route('schedule-demo') }}" class="text-xs font-bold text-[#932a39] hover:underline mt-2 inline-block">
                            Book Live Demo →
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Send Message Form -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-[#ede1cb] shadow-lg">
                
                <div class="space-y-2 mb-8">
                    <span class="text-xs font-bold text-[#932a39] uppercase tracking-wider">Fast Response</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#2d070d]">Send Us a Direct Message</h2>
                    <p class="text-sm text-stone-600">
                        Have questions about pricing, features, or installation? Our executive team will reply within 24 hours.
                    </p>
                </div>

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Your Name *</label>
                            <input type="text" name="name" required placeholder="e.g. Dr. A. K. Sharma" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Institution Name</label>
                            <input type="text" name="institution" placeholder="e.g. National College of Commerce" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Phone / Mobile *</label>
                            <input type="tel" name="phone" required placeholder="+91 93289 38959" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Email Address *</label>
                            <input type="email" name="email" required placeholder="contact@institution.edu" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Subject *</label>
                        <select name="subject" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm bg-white">
                            <option value="New Library Automation Inquiry" selected>New Library Automation Inquiry</option>
                            <option value="Schedule a Free Product Demo">Schedule a Free Product Demo</option>
                            <option value="Pricing Quotation for College Management">Pricing Quotation for Management / Trust</option>
                            <option value="Migrating from Excel or Old Software">Migrating from Excel or Old Software</option>
                            <option value="Barcode / RFID Hardware Integration">Barcode / RFID Hardware Integration</option>
                            <option value="Customer Support Request">Customer Support Request</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Message *</label>
                        <textarea name="message" rows="5" required placeholder="Please write your questions or specific library requirements..." class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-[#460d15] text-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 px-6 rounded-xl font-bold text-base text-[#2d070d] bg-gradient-to-r from-[#ffe49e] via-[#f4c466] to-[#dfa839] shadow-xl hover:scale-[1.01] active:scale-[0.99] transition-all">
                        Send Message Now
                    </button>

                    <p class="text-xs text-stone-400 text-center">
                        Your information is kept strictly confidential and only used to assist your institution.
                    </p>
                </form>

            </div>

        </div>

    </div>
</div>
@endsection
