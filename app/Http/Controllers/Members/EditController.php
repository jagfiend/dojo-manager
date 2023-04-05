<?php

declare(strict_types=1);

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

final class EditController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Members/Edit');
    }
}
