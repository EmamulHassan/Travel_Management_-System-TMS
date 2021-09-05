<?php

namespace Tests\Feature;

use App\Models\Backend\TaskModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BooktripTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
     public function go_to_booktrip_page()
     {

        $response = $this->get('/booktrip');
        $response->assertStatus(200);

     }





}
