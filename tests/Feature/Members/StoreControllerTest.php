<?php

declare(strict_types=1);

namespace Tests\Feature\Members;

use App\Models\User;
use Tests\TestCase;

class StoreControllerTest extends TestCase
{
    /** @test */
    public function guest_cannot_store_member(): void
    {
        $data = [
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
        ];

        $this
            ->post(route('members.store'), $data)
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function authenticated_can_store_member(): void
    {
        $user = User::factory()->create();

        $data = [
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
        ];

        $this
            ->actingAs($user)
            ->post(route('members.store'), $data)
            ->assertRedirectToRoute('members.index')
            ->assertSessionHas('success', 'Member record stored');

        $this->assertDatabaseHas('members', $data);
    }
}
