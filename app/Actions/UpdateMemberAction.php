<?php

declare(strict_types=1);

namespace App\Actions;

use App\DataTransferObjects\MemberData;
use App\Models\Member;

class UpdateMemberAction
{
    public function execute(Member $member, MemberData $memberData): bool
    {
        return $member->update($memberData->toArray());
    }
}
