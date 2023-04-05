<?php

declare(strict_types=1);

namespace App\Actions;

use App\DataTransferObjects\MemberData;
use App\Models\Member;

final class UpdateMemberAction
{
    public function execute(Member $member, MemberData $memberData): void
    {
        $member->update($memberData->toArray());
    }
}
