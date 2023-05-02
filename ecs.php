<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterNotSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\CamelCapsFunctionNameSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\BooleanOperatorPlacementSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\CommentedOutCodeSniff;
use SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff;
use SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff;
use SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff;
use SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\EarlyExitSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\NewWithParenthesesSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceOperatorSniff;
use SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff;
use SlevomatCodingStandard\Sniffs\PHP\ShortListSniff;
use SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff;
use SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff;
use SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff;
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
        AlphabeticallySortedUsesSniff::class,
        CamelCapsFunctionNameSniff::class, // functionsNamedLikeThis()
        ClassConstantVisibilitySniff::class, // must be fixed manually
        DeadCatchSniff::class,
        EarlyExitSniff::class,
        EmptyCommentSniff::class,
        LongTypeHintsSniff::class,
        MultipleUsesPerLineSniff::class, // this is in conflict with Laravel approach
        NewWithParenthesesSniff::class,
        NullableTypeForNullDefaultValueSniff::class,
        ParameterTypeHintSpacingSniff::class,
        ShortListSniff::class,
        RequireNullCoalesceOperatorSniff::class,
        ReturnTypeHintSpacingSniff::class,
        TrailingArrayCommaSniff::class,
        TypeCastSniff::class,
        UnusedInheritedVariablePassedToClosureSniff::class,
        UnusedParameterSniff::class,
        UnusedUsesSniff::class,
        UseFromSameNamespaceSniff::class,
        UselessFunctionDocCommentSniff::class,
        UselessParameterDefaultValueSniff::class,
        UselessParenthesesSniff::class,
        UselessSemicolonSniff::class,
    ]);

    $ecsConfig->rulesWithConfiguration([
        BooleanOperatorPlacementSniff::class => [
            'allowOnly' => 'last', // put && or || at the end of multi line conditionals
        ],
        CommentedOutCodeSniff::class => [
            'maxPercentage' => 25,
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
            __DIR__ .  '/tests/*', // test_methods_named_like_this()
        ],
        CommentedOutCodeSniff::class => [
            __DIR__ . '/app/Http/Kernel.php',
            __DIR__ . '/app/Http/Middleware/ValidateSignature.php',
            __DIR__ . '/config/*',
        ],
        UnusedParameterSniff::class => [
            __DIR__ . '/app/Console/Kernel.php',
            __DIR__ . '/app/Exceptions/Handler.php',
            __DIR__ . '/database/factories/*', // ignore unused $attributes param
        ]
    ]);
};
