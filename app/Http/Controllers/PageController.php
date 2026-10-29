<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the Home page.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Display the Features page.
     */
    public function features(): View
    {
        return view('pages.features');
    }

    /**
     * Display the Videos page.
     */
    public function videos(): View
    {
        return view('pages.videos');
    }

    /**
     * Display the Screenshots page.
     */
    public function screenshots(): View
    {
        return view('pages.screenshots');
    }

    /**
     * Display the Pricing page.
     */
    public function price(): View
    {
        return view('pages.price');
    }

    /**
     * Display the Support page.
     */
    public function support(): View
    {
        return view('pages.support');
    }

    /**
     * Display the Schedule a Demo page.
     */
    public function scheduleDemo(): View
    {
        return view('pages.schedule-demo');
    }

    /**
     * Handle demo form submission.
     */
    public function submitDemo(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'institution_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'approx_books' => 'nullable|string|max:100',
            'demo_type' => 'nullable|string|max:50',
            'preferred_date' => 'nullable|date',
            'message' => 'nullable|string|max:1000',
        ]);

        return redirect()->route('schedule-demo')
            ->with('success', 'Thank you, '.$validated['contact_person'].'! Your demo request for "'.$validated['institution_name'].'" has been received. Our library specialist will call you at '.$validated['phone'].' shortly to confirm your preferred slot.');
    }

    /**
     * Display the Contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        return redirect()->route('contact')
            ->with('success', 'Thank you, '.$validated['name'].'! Your message has been sent successfully. Our team will get back to you at '.$validated['email'].' within 24 hours.');
    }
}
