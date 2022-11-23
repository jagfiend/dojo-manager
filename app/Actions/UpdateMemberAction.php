<?php

declare(strict_types=1);

namespace App\Actions;

use App\DTOs\MemberDto;
use App\Models\Member;

class UpdateMemberAction
{
    public function execute(Member $member, MemberDto $memberDto): bool
    {
        return $member->update($memberDto->toArray());
    }
}
