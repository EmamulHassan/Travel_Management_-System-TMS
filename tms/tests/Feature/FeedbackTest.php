<?php

namespace Tests\Feature;

use App\Models\Backend\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
     public function see_all_feedback()
     {

        $response = $this->get('/feedbacks');
        $response->assertStatus(200);

     }

    public function feedback_can_be_added_through_form()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/feedback/store',[
        'name' => 'Emam',
        'email' => 'emam@gmail.com',
        'orderid' => '1',
        'service' =>'united states',
        'feedback' =>'nice',
        ]);
        $this ->assertCount(1,Feedback::all());
    }

    public function add_feedback_page()
    {

        $response = $this->get('/feedback/manage');
        $response->assertStatus(200);
    }

}
