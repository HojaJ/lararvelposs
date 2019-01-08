<?php

namespace Tests\Feature;

use App\Concert;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewConcertListingTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_view_a_concert_listing()
    {
        // Create a concert
        $concert = Concert::create([
            'title' => 'The Red Chord',
            'subtitle' => 'with Animosity and Lethargy',
            'date' => Carbon::parse('December 13, 2018 8:00pm'),
            'ticket_price' => 3250,
            'venue' => 'The Most Pit',
            'venue_address' => '132 Example Lane',
            'city' => 'Laraville',
            'state' => 'ON',
            'zip'   => '17916',
            'additional_information' => 'For tickets, call (555) 555-5555.'
        ]);

        $response = $this->get('/concert/'. $concert->id);

        $response->assertSee('The Red Chord');
        $response->assertSee('with Animosity and Letharg');
        $response->assertSee('December 13, 2018');
        $response->assertSee('8:00pm');
        $response->assertSee('32.50');
        $response->assertSee('The Most Pit');
        $response->assertSee('132 Example Lane');
        $response->assertSee('Laraville, ON 17916');
        $response->assertSee('For tickets, call (555) 555-5555.');
    }
}