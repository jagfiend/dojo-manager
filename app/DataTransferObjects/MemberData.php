<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

final readonly class MemberData
{
    public function __construct(
        public string $first_name,
        public string $last_name,
        public ?string $address_1 = null,
        public ?string $address_2 = null,
        public ?string $address_3 = null,
        public ?string $city = null,
        public ?string $county = null,
        public ?string $postcode = null,
        public ?string $date_of_birth = null,
        public ?string $gender = null,
        public ?string $phone = null,
        public ?string $email = null,
        public ?string $insurance_date = null,
        public ?int $insurance_type = null,
        public ?string $emergency_contact_name = null,
        public ?string $emergency_contact_phone = null,
        public ?string $emergency_contact_email = null,
        public ?int $grade = null,
        public ?string $last_grading_date = null,
        public ?string $graded_by = null,
        public ?string $next_grading_date = null,
        public ?bool $is_instructor = null,
        public ?bool $email_contact_consent = null,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return (array)$this;
    }
}
