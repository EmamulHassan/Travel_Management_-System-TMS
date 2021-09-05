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


    public function tripInfo_can_be_added_through_form()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/booktrip/store',[

        'name' => 'Emam',
        'phone' => '1987656',
        'email' => 'emam@gmail.com',
        'dateorder' => '2021-1-1',
        'checkinTime' =>'2:00 am',
        'price' =>'60000',
        ]);
        $this ->assertCount(1,TaskModel::all());
    }


}
