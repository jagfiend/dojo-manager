<?php

declare(strict_types=1);

namespace App\Http\Controllers\Members;

use App\Actions\UpdateMemberAction;
use App\DataTransferObjects\MemberData;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

final class UpdateController extends Controller
{
    public function __invoke(UpdateMemberRequest $request, Member $member, UpdateMemberAction $action): RedirectResponse
    {
        try {
            $action->execute($member, MemberData::fromRequest($request));
            session()->flash('success', 'Member updated');
        } catch (Exception $e) {
            Log::error('Member Update Controller: ' . $e->getMessage());
            session()->flash('warning', 'Something went wrong');
        }

        return to_route('members.index');
    }
}
