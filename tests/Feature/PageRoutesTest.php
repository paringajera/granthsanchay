<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Granth Sanchay');
        $response->assertSee('ग्रंथसंचय');
    }

    public function test_features_page_loads_successfully(): void
    {
        $response = $this->get(route('features'));

        $response->assertStatus(200);
        $response->assertSee('Smart Book Master');
    }

    public function test_videos_page_loads_successfully(): void
    {
        $response = $this->get(route('videos'));

        $response->assertStatus(200);
        $response->assertSeeText('See Granth Sanchay in Action');
    }

    public function test_screenshots_page_loads_successfully(): void
    {
        $response = $this->get(route('screenshots'));

        $response->assertStatus(200);
        $response->assertSee('Software Interface');
        $response->assertSee('Screenshots');
    }

    public function test_price_page_loads_successfully(): void
    {
        $response = $this->get(route('price'));

        $response->assertStatus(200);
        $response->assertSee('Starter Edition');
        $response->assertSee('Professional Edition');
    }

    public function test_support_page_loads_successfully(): void
    {
        $response = $this->get(route('support'));

        $response->assertStatus(200);
        $response->assertSee('+91 93289 38959');
        $response->assertSee('granthsanchaylib@gmail.com');
    }

    public function test_schedule_demo_page_loads_successfully(): void
    {
        $response = $this->get(route('schedule-demo'));

        $response->assertStatus(200);
        $response->assertSeeText('Schedule a Free Live Demo');
    }

    public function test_schedule_demo_submission_works(): void
    {
        $response = $this->post(route('schedule-demo.submit'), [
            'institution_name' => 'Sardar Patel College',
            'contact_person' => 'Dr. Kulkarni',
            'phone' => '+91 9876543210',
            'email' => 'kulkarni@college.edu',
            'approx_books' => '15,000 - 35,000 Books',
            'demo_type' => 'Online Video Demo (Zoom / Google Meet)',
            'preferred_date' => date('Y-m-d', strtotime('+2 days')),
            'message' => 'Need demonstration for library committee',
        ]);

        $response->assertRedirect(route('schedule-demo'));
        $response->assertSessionHas('success');
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('granthsanchaylib@gmail.com');
        $response->assertSee('+91 93289 38959');
    }

    public function test_contact_form_submission_works(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'Prof. Sharma',
            'email' => 'sharma@school.edu',
            'phone' => '+91 9988776655',
            'subject' => 'New Library Automation Inquiry',
            'message' => 'Please share information on barcode printer compatibility.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');
    }
}
