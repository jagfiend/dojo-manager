<?php

declare(strict_types=1);

namespace App\DTOs;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
#[MapOutputName(SnakeCaseMapper::class)]
class MemberDto extends Data
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        #[MapInputName('address_1')]
        #[MapOutputName('address_1')]
        public readonly ?string $address1,
        #[MapInputName('address_2')]
        #[MapOutputName('address_2')]
        public readonly ?string $address2,
        #[MapInputName('address_3')]
        #[MapOutputName('address_3')]
        public readonly ?string $address3,
        public readonly ?string $city,
        public readonly ?string $county,
        public readonly ?string $postcode,
        public readonly ?string $dateOfBirth,
        public readonly ?string $gender,
        public readonly ?string $phone,
        public readonly ?string $email,
        public readonly ?string $insuranceDate,
        public readonly ?int $insuranceType,
        public readonly ?string $emergencyContactName,
        public readonly ?string $emergencyContactPhone,
        public readonly ?string $emergencyContactEmail,
        public readonly ?int $grade,
        public readonly ?string $lastGradingDate,
        public readonly ?string $gradedBy,
        public readonly ?string $nextGradingDate,
        public readonly ?bool $isInstructor,
        public readonly ?bool $emailContactConsent,
    ) {
    }
}
