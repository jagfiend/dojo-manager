<?php

declare(strict_types=1);

namespace Tests\Unit\Actions;

use App\Actions\UpdateMemberAction;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Tests\TestCase;

class UpdateMemberActionTest extends TestCase
{
    /** @test */
    public function can_store_only_required_member_data(): void
    {
        $member = Member::factory()->create();

        $data = new UpdateMemberRequest([
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
        ]);

        app(UpdateMemberAction::class)->execute($member, $data->getData());

        $this->assertDatabaseHas('members', [
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
        ]);
    }

    /** @test */
    public function can_store_all_member_data(): void
    {
        $member = Member::factory()->create();

        $data = new UpdateMemberRequest([
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
            'address_1' => 'Here',
            'address_2' => 'There',
            'address_3' => 'Everywhere',
            'city' => 'Oxford',
            'county' => 'Oxfordshire',
            'postcode' => 'OX14 1SJ',
            'date_of_birth' => '1980-12-01',
            'gender' => 'M',
            'phone' => '01234 567890',
            'email' => 'test@example.com',
            'insurance_date' => '2022-12-31',
            'insurance_type' => 1,
            'emergency_contact_name' => 'Dad',
            'emergency_contact_phone' => '01234 765987',
            'emergency_contact_email' => 'help@example.com',
            'grade' => 1,
            'last_grading_date' => '2019-01-31',
            'graded_by' => 'Mini Boss',
            'next_grading_date' => '2023-09-28',
            'is_instructor' => 1,
            'email_contact_consent' => 1,
        ]);

        app(UpdateMemberAction::class)->execute($member, $data->getData());

        $this->assertDatabaseHas('members', [
            'first_name' => 'Kevin',
            'last_name' => 'Le Minion',
            'address_1' => 'Here',
            'address_2' => 'There',
            'address_3' => 'Everywhere',
            'city' => 'Oxford',
            'county' => 'Oxfordshire',
            'postcode' => 'OX14 1SJ',
            'date_of_birth' => '1980-12-01',
            'gender' => 'M',
            'phone' => '01234 567890',
            'email' => 'test@example.com',
            'insurance_date' => '2022-12-31',
            'insurance_type' => 1,
            'emergency_contact_name' => 'Dad',
            'emergency_contact_phone' => '01234 765987',
            'emergency_contact_email' => 'help@example.com',
            'grade' => 1,
            'last_grading_date' => '2019-01-31',
            'graded_by' => 'Mini Boss',
            'next_grading_date' => '2023-09-28',
            'is_instructor' => 1,
            'email_contact_consent' => 1,
        ]);
    }
}
