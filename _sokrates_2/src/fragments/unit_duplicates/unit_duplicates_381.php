vendor/phpunit/phpunit/src/Event/Value/Telemetry/Duration.php [40:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function __construct(int $seconds, int $nanoseconds)
    {
        $this->ensureNotNegative($seconds, 'seconds');
        $this->ensureNotNegative($nanoseconds, 'nanoseconds');
        $this->ensureNanoSecondsInRange($nanoseconds);

        $this->seconds     = $seconds;
        $this->nanoseconds = $nanoseconds;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Event/Value/Telemetry/HRTime.php [39:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function __construct(int $seconds, int $nanoseconds)
    {
        $this->ensureNotNegative($seconds, 'seconds');
        $this->ensureNotNegative($nanoseconds, 'nanoseconds');
        $this->ensureNanoSecondsInRange($nanoseconds);

        $this->seconds     = $seconds;
        $this->nanoseconds = $nanoseconds;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



