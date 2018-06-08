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
     }
     // --------------------------------------------------------------------------
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
       // $response->assertRedirect('cinemas/1');
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
     }

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
     }



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
     }

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
     }



    //  public function testLoginPost(){
    //    Session::start();
    //    $response = $this->call('POST', '/login', [
    //      'email' => 'badUsername@gmail.com',
    //      'password' => 'badPass',
    //      '_token' => csrf_token()
    //    ]);
    //    $this->assertEquals(200, $response->getStatusCode());
    //    $this->assertEquals('auth.login', $response->original->name());
    // }
}
