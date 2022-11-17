<?php

declare(strict_types=1);

namespace App\Actions;

use App\DTOs\MemberDto;
use App\Models\Member;

class StoreMemberAction
{
    public function execute(MemberDto $memberDto): bool
    {
        $member = Member::create($memberDto->toArray());

        return $member instanceof Member;
    }
}
