<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src/'
    ])
    ->withSkip([
        __DIR__ . '/vendor/'
    ])
    ->withPhpVersion(PhpVersion::PHP_84)
    ->withSets([
        \Rector\Set\ValueObject\SetList::CODE_QUALITY,
        \Rector\Set\ValueObject\SetList::PHP_82,
        \Rector\Set\ValueObject\SetList::PHP_84,
        \Rector\Set\ValueObject\SetList::CODE_QUALITY,
        \Rector\Set\ValueObject\SetList::TYPE_DECLARATION,
    ])
    // ->withRules([
    //     \Rector\Php84\Rector\Param\ExplicitNullableParamTypeRector::class,
    //     \Rector\CodeQuality\Rector\ClassMethod\OptionalParametersAfterRequiredRector::class,
    //     \Rector\Php82\Rector\Encapsed\VariableInStringInterpolationFixerRector::class,
    //     \Rector\CodeQuality\Rector\Class_\CompleteDynamicPropertiesRector::class,
    // ])
;
