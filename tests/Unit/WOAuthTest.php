<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WOAuthTest extends TestCase
{

    public function testHomePage()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }
    public function testCinemaPage()
    {
        $response = $this->call('GET', '/cinemas');
        $response->assertViewHas('cinemas');
        $this->assertEquals(200, $response->status());
    }

    public function testCinemaSinglePage()
    {
        $response = $this->call('GET', '/cinemas/1');
        $response->assertViewHas('cinema');
        $this->assertEquals(200, $response->status());
    }

    public function testMoviesPage()
    {
        $response = $this->call('GET', '/movies');
        $response->assertViewHas('movies');
        $this->assertEquals(200, $response->status());
    }

    public function testMovieSinglePage()
    {
        $response = $this->call('GET', '/movies/1');
        $response->assertViewHas('movie');
        $this->assertEquals(200, $response->status());
    }

    public function testTicketsPage()
    {
        $response = $this->call('GET', '/tickets');
        $response->assertViewHas('tickets');
        $this->assertEquals(200, $response->status());
    }

}
