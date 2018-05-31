<?php
declare(strict_types = 1);

use app\Http\Controllers\CinemaController;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Database\Eloquent\Model;

require dirname(__DIR__) . '/app/Http/Controllers/CinemaController.php';

final class CinemaTest extends TestCase
{
    private $controller;

    protected function setUp()
    {
        $this->controller  = new CinemaController();
    }

    protected function tearDown()
    {
        $this->controller  = NULL;
    }

    // public function testStoreFromValidInput($name, $seats)
    public function testStoreFromValidInput()
    {
        parent::setUp();
        $requested_arr = [
            // 'name' => $name,
            // 'seats' => $seats
            'name' => 'FilmstadenTest',
            'seats' => 100
        ];
        // $controller = new CinemaController();
        // $response = $this->controller->store(new Request ($requested_arr));
        // $data = json_decode($response->getContent(), true);
        // if ($data['status']) {
        //     $this->assertTrue(true);
        // } else {
        //     $this->assertTrue(false);
        // }
        // $response->assertRedirect(route('cinemas.index'));

        $response = $this->followingRedirects()
        ->post('/cinema/store', $requested_arr)
        ->assertStatus(200);
    }
}
