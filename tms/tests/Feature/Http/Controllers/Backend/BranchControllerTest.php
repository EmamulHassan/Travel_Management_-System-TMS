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

}
