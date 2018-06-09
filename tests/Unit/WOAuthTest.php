<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WOAuthTest extends TestCase
{

    public function test_home_page()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('welcome');
    }
    public function test_cinema_page()
    {
        $response = $this->call('GET', '/cinemas');
        $response->assertViewHas('cinemas');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('cinemas.index');
    }

    public function test_cinema_single_page()
    {
        $response = $this->call('GET', '/cinemas/1');
        $response->assertViewHas('cinema');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('cinemas.show');
    }

    public function test_movies_page()
    {
        $response = $this->call('GET', '/movies');
        $response->assertViewHas('movies');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('movies.index');
    }

    public function test_movie_single_page()
    {
        $response = $this->call('GET', '/movies/1');
        $response->assertViewHas('movie');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('movies.show');
    }

    public function test_tickets_page()
    {
        $response = $this->call('GET', '/tickets');
        $response->assertViewHas('tickets');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('tickets.index');
    }

    public function test_ticket_single_page()
    {
        $response = $this->call('GET', '/tickets/1');
        $response->assertViewHas('ticket');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('tickets.show');
    }

}
