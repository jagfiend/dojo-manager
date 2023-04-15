<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Member;

final class StoreMemberAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(array $data): void
    {
        Member::query()->create($data);
    }
}
