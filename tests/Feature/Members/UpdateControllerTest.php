<?php

declare(strict_types=1);

namespace Tests\Feature\Members;

use App\Models\Member;
use App\Models\User;
use Tests\TestCase;

class UpdateControllerTest extends TestCase
{
    /** @test */
    public function guest_cannot_update_member(): void
    {
        $member = Member::factory()->create();

        $data = [
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
        ];

        $this
            ->put(route('members.update', $member), $data)
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function authenticated_can_update_member(): void
    {
        $user = User::factory()->create();

        $member = Member::factory()->create();

        $data = [
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
        ];

        $this
            ->actingAs($user)
            ->put(route('members.update', $member), $data)
            ->assertRedirectToRoute('members.index')
            ->assertSessionHas('success', 'Member updated');

        $this->assertDatabaseHas('members', $data);
    }
}
