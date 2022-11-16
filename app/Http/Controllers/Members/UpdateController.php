<?php

declare(strict_types=1);

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        return to_route(route('members.index'));
    }
}
