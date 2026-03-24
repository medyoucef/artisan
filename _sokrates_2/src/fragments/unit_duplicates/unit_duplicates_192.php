vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [192:205]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function appendErrorDetails(array $parts, Throwable $throwable, bool $includeErrorDetails): string
    {
        if ($includeErrorDetails) {
            $parts = array_merge($parts, [
                '',
                sprintf('Error: %s', $this->formatErrorMessage($throwable)),
                '',
                'Stack trace:',
                $this->formatStackTrace($throwable),
            ]);
        }

        return implode(PHP_EOL, $parts);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [192:205]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function appendErrorDetails(array $parts, Throwable $throwable, bool $includeErrorDetails): string
    {
        if ($includeErrorDetails) {
            $parts = array_merge($parts, [
                '',
                sprintf('Error: %s', $this->formatErrorMessage($throwable)),
                '',
                'Stack trace:',
                $this->formatStackTrace($throwable),
            ]);
        }

        return implode(PHP_EOL, $parts);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



