<?php

declare(strict_types=1);

namespace App\Actions;

use App\DataTransferObjects\MemberData;
use App\Models\Member;

class StoreMemberAction
{
    public function execute(MemberData $memberData): void
    {
        Member::query()->create($memberData->toArray());
    }
}
