<?php

namespace Tests\Feature\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class BranchControllerTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function see_all_branch()
    {
        $User = User::factory()->create();
        $this->actingAs($User);
        $response = $this->get('/admin/orders/manage');
        $response->assertStatus(200);
    }
    public function branch_can_be_added_through_form()
    {
        $User = User::factory()->create();
        $this->actingAs($User);
        $response = $this->post('/admin/branch/store',[
        'name' => 'Dhaka Branch',
        'bangla_name' =>'ঢাকা  ব্রাঞ্চ',
        'address_line1' => 'uttara',
        'address_line2' => 'dhaka',
        'email' =>'dhaka@tms.com',
        'phone' =>'01712345678',
        'status' =>'1',
        ]);
        $response->assertStatus(200);
    }
    public function branch_can_be_updated_through_form()
    {
        $User = User::factory()->create();
        $this->actingAs($User);
        $response = $this->post('/admin/branch/update/{1}',[
        'name' => 'Dhaka Branch',
        'bangla_name' =>'ঢাকা  ব্রাঞ্চ',
        'address_line1' => 'uttara',
        'address_line2' => 'dhaka',
        'email' =>'dhaka@tms.com',
        'phone' =>'01712345678',
        'status' =>'2',
        ]);
        $response->assertStatus(200);
    }


}
