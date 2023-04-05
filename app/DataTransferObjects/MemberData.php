<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

readonly class MemberData
{
    public function __construct(
        public string $first_name,
        public string $last_name,
        public ?string $address_1,
        public ?string $address_2,
        public ?string $address_3,
        public ?string $city,
        public ?string $county,
        public ?string $postcode,
        public ?string $date_of_birth,
        public ?string $gender,
        public ?string $phone,
        public ?string $email,
        public ?string $insurance_date,
        public ?int $insurance_type,
        public ?string $emergency_contact_name,
        public ?string $emergency_contact_phone,
        public ?string $emergency_contact_email,
        public ?int $grade,
        public ?string $last_grading_date,
        public ?string $graded_by,
        public ?string $next_grading_date,
        public ?bool $is_instructor,
        public ?bool $email_contact_consent,
    ) {
    }

    public static function fromRequest(StoreMemberRequest|UpdateMemberRequest $request): self
    {
        return new self(
            $request->string('first_name')->toString(),
            $request->string('last_name')->toString(),
            $request->input('address_1') ? $request->string('address_1')->toString() : null,
            $request->input('address_2') ? $request->string('address_2')->toString() : null,
            $request->input('address_3') ? $request->string('address_3')->toString() : null,
            $request->input('city') ? $request->string('city')->toString() : null,
            $request->input('county') ? $request->string('county')->toString() : null,
            $request->input('postcode') ? $request->string('postcode')->toString() : null,
            $request->input('date_of_birth') ? $request->string('date_of_birth')->toString() : null,
            $request->input('gender') ? $request->string('gender')->toString() : null,
            $request->input('phone') ? $request->string('phone')->toString() : null,
            $request->input('email') ? $request->string('email')->toString() : null,
            $request->input('insurance_date') ? $request->string('insurance_date')->toString() : null,
            $request->input('insurance_type') ? $request->integer('insurance_type') : null,
            $request->input('emergency_contact_name') ? $request->string('emergency_contact_name')->toString() : null,
            $request->input('emergency_contact_phone') ? $request->string('emergency_contact_phone')->toString() : null,
            $request->input('emergency_contact_email') ? $request->string('emergency_contact_email')->toString() : null,
            $request->input('grade') ? $request->integer('grade') : null,
            $request->input('last_grading_date') ? $request->string('last_grading_date')->toString() : null,
            $request->input('graded_by') ? $request->string('graded_by')->toString() : null,
            $request->input('next_grading_date') ? $request->string('next_grading_date')->toString() : null,
            $request->input('is_instructor') ? $request->boolean('is_instructor') : null,
            $request->input('email_contact_consent') ? $request->boolean('email_contact_consent') : null,
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return (array)$this;
    }
}
