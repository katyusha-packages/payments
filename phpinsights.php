<?php

use PhpCsFixer\Fixer\Basic\BracesFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use NunoMaduro\PhpInsights\Domain\Sniffs\ForbiddenSetterSniff;
use NunoMaduro\PhpInsights\Domain\Insights\ForbiddenNormalClasses;
use NunoMaduro\PhpInsights\Domain\Insights\ForbiddenPrivateMethods;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff;
use NunoMaduro\PhpInsights\Domain\Insights\CyclomaticComplexityIsHigh;
use SlevomatCodingStandard\Sniffs\Classes\ForbiddenPublicPropertySniff;
use SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\DisallowShortTernaryOperatorSniff;

return [
    /*
      |--------------------------------------------------------------------------
      | Default Preset
      |--------------------------------------------------------------------------
      |
      | This option controls the default preset that will be used by PHP Insights
      | to make your code reliable, simple, and clean. However, you can always
      | adjust the `Metrics` and `Insights` below in this configuration file.
      |
      | Supported: "default", "laravel", "symfony", "magento2", "drupal"
      |
     */

    'preset' => 'laravel',

    /*
    |--------------------------------------------------------------------------
    | IDE
    |--------------------------------------------------------------------------
    |
    | This options allow to add hyperlinks in your terminal to quickly open
    | files in your favorite IDE while browsing your PhpInsights report.
    |
    | Supported: "textmate", "macvim", "emacs", "sublime", "phpstorm",
    | "atom", "vscode".
    |
    | If you have another IDE that is not in this list but which provide an
    | url-handler, you could fill this config with a pattern like this:
    |
    | myide://open?url=file://%f&line=%l
    |
     */

    'ide' => 'phpstorm',

    /*
    |--------------------------------------------------------------------------
    | Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may adjust all the various `Insights` that will be used by PHP
    | Insights. You can either add, remove or configure `Insights`. Keep in
    | mind that all added `Insights` must belong to a specific `Metric`.
    |
     */

    'exclude' => [
        'packages'
    ],

    'add' => [

        //        OneClassPerFileSniff::class,
        //        SuperfluousAbstractClassNamingSniff::class,
        //        OneInterfacePerFileSniff::class,
        //        NamespaceDeclarationSniff::class,
        //        OneTraitPerFileSniff::class,
        //        ClassConstantVisibilitySniff::class,
        //        PropertyDeclarationSniff::class,
        //        UnusedVariableSniff::class,
        //        CodeAnalyzerSniff::class,
        //        EvalSniff::class,
        //        EmptyStatementSniff::class,
        //        ForLoopWithTestFunctionCallSniff::class,
        //        JumbledIncrementerSniff::class,
        //        InlineControlStructureSniff::class,
        //        UselessOverridingMethodSniff::class,
        //        BacktickOperatorSniff::class,
        //        DiscourageGotoSniff::class,
        //        NoSilencedErrorsSniff::class,
        //        ShortFormTypeKeywordsSniff::class,
        //        DisallowImplicitArrayCreationSniff::class,
        //        DisallowShortTernaryOperatorSniff::class,
        //        DeadCatchSniff::class,
        //        UnusedInheritedVariablePassedToClosureSniff::class,
        //        UseFromSameNamespaceSniff::class,
        //        UselessAliasSniff::class,
        //        TypeCastSniff::class,
        //        UselessParenthesesSniff::class,
        //        NullableTypeForNullDefaultValueSniff::class,
        //        FixmeSniff::class,
        //        TodoSniff::class,
        //        ParameterTypeHintSniff::class,
        //        PropertyTypeHintSniff::class,
        //        ReturnTypeHintSniff::class,
        //        UnusedParameterSniff::class,
        //        DeprecatedFunctionsSniff::class,
        //        GlobalKeywordSniff::class,
        //        TernaryToNullCoalescingFixer::class,
        //        NoSuperfluousElseifFixer::class,
        //        ShortScalarCastFixer::class,
        //        NoEmptyCommentFixer::class,
        //        NoSpacesAfterFunctionNameFixer::class,
        //        DisallowEqualOperatorsSniff::class,
        //        ModernClassNameReferenceSniff::class,
        //        Classes::class => [
        //            ForbiddenFinalClasses::class,
        //        ],
    ],

    'remove' => [
        ForbiddenNormalClasses::class,
        AlphabeticallySortedUsesSniff::class,
        DeclareStrictTypesSniff::class,
        ForbiddenSetterSniff::class,
        ForbiddenPublicPropertySniff::class,
        VisibilityRequiredFixer::class,
        DisallowShortTernaryOperatorSniff::class
    ],

    'config' => [
        CyclomaticComplexityIsHigh::class => [
            'maxComplexity' => 3,
        ],
        ForbiddenPrivateMethods::class => [
            'title' => 'The usage of private methods is not idiomatic in Laravel.',
        ],
        LineLengthSniff::class => [
            'lineLimit'         => 120,
            'absoluteLineLimit' => 150,
            'ignoreComments'    => false,
        ],
        BracesFixer::class => [
            'allow_single_line_closure'                   => true,
            'position_after_anonymous_constructs'         => 'same', // possible values ['same', 'next']
            'position_after_control_structures'           => 'same', // possible values ['same', 'next']
            'position_after_functions_and_oop_constructs' => 'same', // possible values ['same', 'next']
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Requirements
    |--------------------------------------------------------------------------
    |
    | Here you may define a level you want to reach per `Insights` category.
    | When a score is lower than the minimum level defined, then an error
    | code will be returned. This is optional and individually defined.
    |
     */

    'requirements' => [
        'min-quality'            => 95,
        'min-complexity'         => 95,
        'min-architecture'       => 95,
        'min-style'              => 95,
        'disable-security-check' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Threads
    |--------------------------------------------------------------------------
    |
    | Here you may adjust how many threads (core) PHPInsights can use to perform
    | the analyse. This is optional, don't provide it and the tool will guess
    | the max core number available. This accept null value or integer > 0.
    |
     */

    'threads' => 16,
];
