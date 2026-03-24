vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [172:189]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function formatFrameworkError(Throwable $throwable, bool $includeErrorDetails = true, bool $decorated = true): string
    {
        $parts = [
            'PHPStan was unable to bootstrap your application because Laravel failed to start.',
            '',
            'Larastan launches your Laravel application during analysis to provide smarter results.',
            'The framework reported an error while starting, so the analysis could not continue.',
            '',
            sprintf('%s Try the following:', $this->getTipSymbol($decorated)),
            ' - Check your environment variables in the .env file',
            ' - Check the Laravel logs in storage/logs/laravel.log for more details',
            ' - Run composer dump-autoload to ensure classes are indexed',
            ' - Verify service provider registration and configuration',
            ' - Verify the application boots by running php artisan about',
        ];

        return $this->appendErrorDetails($parts, $throwable, $includeErrorDetails);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [172:189]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function formatFrameworkError(Throwable $throwable, bool $includeErrorDetails = true, bool $decorated = true): string
    {
        $parts = [
            'PHPStan was unable to bootstrap your application because Laravel failed to start.',
            '',
            'Larastan launches your Laravel application during analysis to provide smarter results.',
            'The framework reported an error while starting, so the analysis could not continue.',
            '',
            sprintf('%s Try the following:', $this->getTipSymbol($decorated)),
            ' - Check your environment variables in the .env file',
            ' - Check the Laravel logs in storage/logs/laravel.log for more details',
            ' - Run composer dump-autoload to ensure classes are indexed',
            ' - Verify service provider registration and configuration',
            ' - Verify the application boots by running php artisan about',
        ];

        return $this->appendErrorDetails($parts, $throwable, $includeErrorDetails);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



