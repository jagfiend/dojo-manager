<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void
{
    $ecsConfig->sets([
        SetList::CLEAN_CODE,
        SetList::DOCBLOCK,
        SetList::PSR_12,
    ]);

    $ecsConfig->paths([
    	__DIR__ . '/app',
    	__DIR__ . '/config',
    	__DIR__ . '/database',
    	__DIR__ . '/routes',
    	__DIR__ . '/tests',
    ]);
};
