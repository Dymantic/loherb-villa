<?php

namespace Tests\Feature;

use Dymantic\Secretary\MessageReceived;
use Dymantic\Secretary\Secretary;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReceiveContactFormMessageTest extends TestCase
{
    /**
     * @test
     */
    public function a_contact_message_gets_sent()
    {
        $this->withoutExceptionHandling();
        Notification::fake();

        $response = $this->postJson('/contact', [
            'name' => 'Test Name',
            'email' => 'email@test.com',
            'message_body' => 'Test message'
        ]);

        $response->assertStatus(200);

        Notification::assertSentTo(app(Secretary::class), MessageReceived::class, function($notification, $channels) {
            return $channels === ['mail'];
        });
    }
}
