<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_a_contact_message_can_be_stored() {

        $this->withoutExceptionHandling();

        $response = $this->post('/api/submit-contact-form', [
            'name' => 'Test Test',
            'email' => 'test@test.com',
            'message' => 'Test message'
        ]);

        $response->assertStatus(200);
        $this->assertCount(1, Contact::all());
    }

    public function test_a_name_is_required() {

        $this->withoutExceptionHandling();
        $response = $this->post('/api/submit-contact-form', [
            'email' => 'test@test.com',
            'message' => 'Test message'
        ]);

        $response->assertStatus(422);
        $this->assertCount(0, Contact::all());
    }

    public function test_a_email_is_required() {

        $this->withoutExceptionHandling();
        $response = $this->post('/api/submit-contact-form', [
            'name' => 'Test',
            'message' => 'Test message'
        ]);

        $response->assertStatus(422);
        $this->assertCount(0, Contact::all());
    }
}
