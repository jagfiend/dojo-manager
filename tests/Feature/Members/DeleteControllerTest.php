<?php

declare(strict_types=1);

namespace Tests\Feature\Members;

use App\Models\Member;
use App\Models\User;
use Tests\TestCase;

class DeleteControllerTest extends TestCase
{
    /**
     * @test
     */
    public function guest_cannot_delete_member(): void
    {
        $member = Member::factory()->create();

        $this
            ->delete(route('members.delete', $member))
            ->assertRedirect(route('login'));
    }

    /**
     * @test
     */
    public function authenticated_can_delete_member(): void
    {
        $user = User::factory()->create();

        $member = Member::factory()->create();

        $this
            ->actingAs($user)
            ->delete(route('members.delete', $member))
            ->assertRedirectToRoute('members.index')
            ->assertSessionHas('success', 'Member deleted');

        $this->assertDatabaseCount('members', 0);
    }
}
