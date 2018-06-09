<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

// use Illuminate\Foundation\Testing\WithoutMiddleware;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WAuthTest extends TestCase
{
    // use DatabaseMigrations;
    use DatabaseTransactions;

     /**
     * Testing auth pages for cinema.
     */
     public function test_guest_access_to_cinema_create_page()
     {
      $response = $this->call('GET', '/cinemas/create');
      $this->assertEquals(302, $response->status());
      $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_cinema_create_page()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('GET', '/cinemas/create');
       $this->assertEquals(200, $response->status());
       $response->assertViewIs('cinemas.create');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_cinema_edit_page()
     {
       $response = $this->call('GET', '/cinemas/1/edit');
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_cinema_edit_page()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('GET', '/cinemas/1/edit');
       $this->assertEquals(200, $response->status());
       $response->assertViewIs('cinemas.edit');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_cinema_store()
     {
       $response = $this->call('POST', '/cinemas', [
            'name' => 'random',
            'seats' => '123',
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_cinema_store()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('POST', '/cinemas', [
            'name' => 'random',
            'seats' => '123',
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('cinemas');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_cinema_update()
     {
       $response = $this->call('PUT', '/cinemas/1', [
            'name' => 'random',
            'seats' => '123',
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_cinema_update()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('PUT', '/cinemas/1', [
            'name' => 'random',
            'seats' => '123',
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('cinemas/1');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_cinema_destroy()
     {
       $response = $this->call('DELETE', '/cinemas/1', [
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_cinema_destroy()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('DELETE', '/cinemas/1', [
            '_token' => csrf_token(),
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('cinemas');
     }
     // ------------------------------------------------------------------------





     /**
      * Testing auth pages for movie.
      */
      public function test_guest_access_to_movie_create_page()
      {
       $response = $this->call('GET', '/movies/create');
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
      }

      public function test_authenticated_user_access_to_movie_create_page()
      {
        $this->actingAs(factory('App\User')->make());
        $response = $this->call('GET', '/movies/create');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('movies.create');
      }
      // -----------------------------------------------------------------------
      public function test_guest_access_to_movie_edit_page()
      {
        $response = $this->call('GET', '/movies/1/edit');
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('login');
      }

      public function test_authenticated_user_access_to_movie_edit_page()
      {
        $this->actingAs(factory('App\User')->make());
        $response = $this->call('GET', '/movies/1/edit');
        $this->assertEquals(200, $response->status());
        $response->assertViewIs('movies.edit');
      }
      // -----------------------------------------------------------------------
      public function test_guest_access_to_movie_store()
      {
        $response = $this->call('POST', '/movies', [
             'title' => 'random',
             'genre' => 'random',
             'runtime' => 120,
             '_token' => csrf_token()
           ]);
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('login');
      }

      public function test_authenticated_user_access_to_movie_store()
      {
        $this->actingAs(factory('App\User')->make());
        $response = $this->call('POST', '/movies', [
             'title' => 'random',
             'genre' => 'random',
             'runtime' => 120,
             '_token' => csrf_token()
           ]);
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('movies');
      }
      // -----------------------------------------------------------------------
      public function test_guest_access_to_movie_update()
      {
        $response = $this->call('PUT', '/movies/1', [
          'title' => 'random',
          'genre' => 'random',
          'runtime' => 120,
             '_token' => csrf_token()
           ]);
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('login');
      }

      public function test_authenticated_user_access_to_movie_update()
      {
        $this->actingAs(factory('App\User')->make());
        $response = $this->call('PUT', '/movies/1', [
          'title' => 'random',
          'genre' => 'random',
          'runtime' => 120,
             '_token' => csrf_token()
           ]);
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('movies/1');
      }
      // -----------------------------------------------------------------------
      public function test_guest_access_to_movie_destroy()
      {
        $response = $this->call('DELETE', '/movies/1', [
             '_token' => csrf_token()
           ]);
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('login');
      }

      public function test_authenticated_user_access_to_movie_destroy()
      {
        $this->actingAs(factory('App\User')->make());
        $response = $this->call('DELETE', '/movies/1', [
             '_token' => csrf_token(),
           ]);
        $this->assertEquals(302, $response->status());
        $response->assertRedirect('movies');
      }
      // -----------------------------------------------------------------------




     /**
     * Testing auth pages for ticket.
     */
     public function test_guest_access_to_ticket_create_page()
     {
      $response = $this->call('GET', '/tickets/create');
      $this->assertEquals(302, $response->status());
      $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_ticket_create_page()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('GET', '/tickets/create');
       $this->assertEquals(200, $response->status());
       $response->assertViewIs('tickets.create');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_ticket_edit_page()
     {
       $response = $this->call('GET', '/tickets/1/edit');
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_ticket_edit_page()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('GET', '/tickets/1/edit');
       $this->assertEquals(200, $response->status());
       $response->assertViewIs('tickets.edit');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_ticket_store()
     {
       $response = $this->call('POST', '/tickets', [
         'time' => '2018-08-28 16:15:00',
         'seat' => 1,
         'price' => 120,
         'cinema_id' => 1,
         'movie_id' => 1,
         'user_id' => null,
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_ticket_store()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('POST', '/tickets', [
         'time' => '2018-08-28 16:15:00',
         'seat' => 1,
         'price' => 120,
         'cinema_id' => 1,
         'movie_id' => 1,
         'user_id' => null,
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('tickets');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_ticket_update()
     {
       $response = $this->call('PUT', '/tickets/1', [
         'time' => '2018-08-28 16:15:00',
         'seat' => 1,
         'price' => 120,
         'cinema_id' => 1,
         'movie_id' => 1,
         'user_id' => null,
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_ticket_update()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('PUT', '/tickets/1', [
         'time' => '2018-08-28 16:15:00',
         'seat' => 1,
         'price' => 120,
         'cinema_id' => 1,
         'movie_id' => 1,
         'user_id' => null,
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('tickets/1');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_ticket_destroy()
     {
       $response = $this->call('DELETE', '/tickets/1', [
            '_token' => csrf_token()
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_ticket_destroy()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('DELETE', '/tickets/1', [
            '_token' => csrf_token(),
          ]);
       $this->assertEquals(302, $response->status());
       $response->assertRedirect('tickets');
     }
     // ------------------------------------------------------------------------
     public function test_guest_access_to_show_my_tickets_page()
     {
      $response = $this->call('GET', '/myTickets');
      $this->assertEquals(302, $response->status());
      $response->assertRedirect('login');
     }

     public function test_authenticated_user_access_to_show_my_tickets_page()
     {
       $this->actingAs(factory('App\User')->make());
       $response = $this->call('GET', '/myTickets');
       $this->assertEquals(200, $response->status());
       $response->assertViewIs('tickets.showMyTickets');
     }
     // ------------------------------------------------------------------------


}
