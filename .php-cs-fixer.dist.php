<?php

declare(strict_types=1);

return (static function (): PhpCsFixer\Config {
    $cacheDirectory = __DIR__ . '/.var/cache/php-cs-fixer';

    return (new PhpCsFixer\Config())
        ->setRiskyAllowed(true)
        ->setCacheFile("{$cacheDirectory}/.php-cs-fixer.cache")
        ->setRules([
            '@PER' => true,
            '@PSR1' => true,
            '@PSR12' => true,
        ])
        ->setFinder(
            PhpCsFixer\Finder::create()
                ->exclude(['assets', 'vendor', 'vendor-bin'])
                ->in(__DIR__)
        );
})();

