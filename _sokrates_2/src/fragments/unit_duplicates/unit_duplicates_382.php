vendor/phpunit/phpunit/src/Event/Value/Telemetry/Duration.php [140:147]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function ensureNanoSecondsInRange(int $nanoseconds): void
    {
        if ($nanoseconds > 999999999) {
            throw new InvalidArgumentException(
                'Value for nanoseconds must not be greater than 999999999.',
            );
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Event/Value/Telemetry/HRTime.php [98:105]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function ensureNanoSecondsInRange(int $nanoseconds): void
    {
        if ($nanoseconds > 999999999) {
            throw new InvalidArgumentException(
                'Value for nanoseconds must not be greater than 999999999.',
            );
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



