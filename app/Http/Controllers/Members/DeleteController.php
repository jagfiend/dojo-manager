<?php

declare(strict_types=1);

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Exception;
use Illuminate\Http\RedirectResponse;
use Log;

final class DeleteController extends Controller
{
    public function __invoke(Member $member): RedirectResponse
    {
        try {
            $member->delete();
            session()->flash('success', 'Member deleted');
        } catch (Exception $e) {
            Log::error('Member Delete Controller: ' . $e->getMessage());
            session()->flash('warning', 'Something went wrong');
        }

        return to_route('members.index');
    }
}
