<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterNotSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\CamelCapsFunctionNameSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\BooleanOperatorPlacementSniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void
{
    $ecsConfig->paths([
    	__DIR__ . '/app',
    	__DIR__ . '/config',
    	__DIR__ . '/database',
    	__DIR__ . '/routes',
    	__DIR__ . '/tests',
    ]);

    $ecsConfig->sets([
        SetList::CLEAN_CODE,
        SetList::DOCBLOCK,
        SetList::PSR_12,
    ]);

    $ecsConfig->rules([
        CamelCapsFunctionNameSniff::class, // methodsNamedLikeThis()
    ]);

    $ecsConfig->rulesWithConfiguration([
        BooleanOperatorPlacementSniff::class => [
            'allowOnly' => 'last', // put && or || at the end of multi line conditionals
        ],
        ControlSignatureSniff::class => [
            'requiredSpacesBeforeColon' => 0,
        ],
        ForbiddenFunctionsSniff::class => [
            'forbiddenFunctions' => [
                'dd' => null, // The value is NULL if no alternative exists. IE, the function should just not be used.
                'die' => null,
                'print_r' => null,
                'ray' => null,
                'var_dump' => null,
            ],
        ],
        SpaceAfterCastSniff::class => [
            'spacing' => 0, // (int)$castLikeThis
        ],
        SpaceAfterNotSniff::class => [
            'spacing' => 0, // !$negateLikeThis
        ],
    ]);

    $ecsConfig->skip([
        CamelCapsFunctionNameSniff::class => [
            '/tests/*' // test_methods_named_like_this()
        ],
    ]);
};
