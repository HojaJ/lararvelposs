<?php

namespace Tests\Unit;

use App\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class ConcertTest extends TestCase
{
    use DatabaseMigrations;

    /** @test*/
    public function can_get_formatted_date()
    {
        $concert = factory(Concert::class)->create([
            'date' => Carbon::parse('2018-12-01 8:00pm'),
        ]);

        // Retrieve the formatted date
        $date = $concert->formatted_date;

        $this->assertEquals('December 1, 2016', $date);
    }
}
