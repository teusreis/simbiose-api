<?php

namespace Tests\Feature\Rouanet;

use App\Models\Rouanet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class RouanetIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_should_be_able_to_read_the_data_from_projeto_rouanet_table(): void
    {
        // Arrange
        Rouanet::factory()->count(10)->create();

        // Act
        $response = $this->getJson('/api/rouanet');

        // Assert
        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json)  =>
            $json->hasAll(['status', 'data.data'])
                ->where('status', 'ok')
        );
    }
}
