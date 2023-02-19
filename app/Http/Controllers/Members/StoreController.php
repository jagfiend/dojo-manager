<?php

declare(strict_types=1);

namespace App\Http\Controllers\Members;

use App\Actions\StoreMemberAction;
use App\DataTransferObjects\MemberData;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    public function __invoke(StoreMemberRequest $request, StoreMemberAction $action): RedirectResponse
    {
        try {
            $action->execute(MemberData::fromRequest($request));
            session()->flash('success', 'Member record stored');
        } catch (Exception $e) {
            Log::error($e); // @phpstan-ignore-line
            session()->flash('warning', 'Something went wrong');
        }

        return to_route('members.index');
    }
}
