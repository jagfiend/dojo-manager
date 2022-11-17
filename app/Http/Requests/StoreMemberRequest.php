<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\DTOs\MemberDto;
use http\Encoding\Stream\Inflate;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class StoreMemberRequest extends FormRequest
{
    use WithData;

    /**
     * @return array<string, string[]>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'address_1' => ['nullable', 'string'],
            'address_2' => ['nullable', 'string'],
            'address_3' => ['nullable', 'string'],
            'city' => ['nullable', 'string'],
            'county' => ['nullable', 'string'],
            'postcode' => ['nullable', 'string'],
            'date_of_birth' => ['nullable', 'date'],
            'gender' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'insurance_date' => ['nullable', 'date'],
            'insurance_type' => ['nullable', 'int'],
            'emergency_contact_name' => ['nullable', 'string'],
            'emergency_contact_phone' => ['nullable', 'string'],
            'emergency_contact_email' => ['nullable', 'email'],
            'grade' => ['nullable', 'int'],
            'last_grading_date' => ['nullable', 'date'],
            'graded_by' => ['nullable', 'string'],
            'next_grading_date' => ['nullable', 'date'],
            'is_instructor' => ['nullable', 'int'],
            'email_contact_consent' => ['nullable', 'int'],
        ];
    }

    protected function dataClass(): string
    {
        return MemberDto::class;
    }
}
