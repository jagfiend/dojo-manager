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
            $request->input('first_name'),
            $request->input('last_name'),
            $request->input('address_1'),
            $request->input('address_2'),
            $request->input('address_3'),
            $request->input('city'),
            $request->input('county'),
            $request->input('postcode'),
            $request->input('date_of_birth'),
            $request->input('gender'),
            $request->input('phone'),
            $request->input('email'),
            $request->input('insurance_date'),
            $request->input('insurance_type'),
            $request->input('emergency_contact_name'),
            $request->input('emergency_contact_phone'),
            $request->input('emergency_contact_email'),
            $request->input('grade'),
            $request->input('last_grading_date'),
            $request->input('graded_by'),
            $request->input('next_grading_date'),
            $request->input('is_instructor'),
            $request->input('email_contact_consent'),
        );
    }
    
    public function toArray(): array
    {
        return (array)$this;
    }
}
