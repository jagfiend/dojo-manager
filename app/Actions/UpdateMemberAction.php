<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Member;

final class UpdateMemberAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(Member $member, array $data): void
    {
        $member->update($data);
    }
}
