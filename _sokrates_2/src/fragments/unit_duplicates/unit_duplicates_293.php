vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [161:170]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function formatUserCodeError(Throwable $throwable, bool $includeErrorDetails = true, bool $decorated = true): string
    {
        $parts = [
            'PHPStan was unable to bootstrap your application due to an error in your code.',
            '',
            sprintf('%s Fix the misconfiguration in your application code and run PHPStan again.', $this->getTipSymbol($decorated)),
        ];

        return $this->appendErrorDetails($parts, $throwable, $includeErrorDetails);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [161:170]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function formatUserCodeError(Throwable $throwable, bool $includeErrorDetails = true, bool $decorated = true): string
    {
        $parts = [
            'PHPStan was unable to bootstrap your application due to an error in your code.',
            '',
            sprintf('%s Fix the misconfiguration in your application code and run PHPStan again.', $this->getTipSymbol($decorated)),
        ];

        return $this->appendErrorDetails($parts, $throwable, $includeErrorDetails);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



