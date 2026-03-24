vendor/keepsuit/laravel-opentelemetry/src/Instrumentation/QueryInstrumentation.php [68:81]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function recordOperationDurationMetric(QueryExecuted $event, array $attributes): void
    {
        $duration = (Clock::getDefault()->now() - $this->getEventStartTimestampNs($event->time)) / ClockInterface::NANOS_PER_SECOND;

        // @see https://opentelemetry.io/docs/specs/semconv/db/database-metrics/#metric-dbclientoperationduration
        Meter::histogram(
            name: DbMetrics::DB_CLIENT_OPERATION_DURATION,
            unit: 's',
            description: 'Duration of database client operations.',
            advisory: [
                'ExplicitBucketBoundaries' => [0.001, 0.005, 0.01, 0.05, 0.1, 0.5, 1.0, 5.0, 10.0],
            ])
            ->record($duration, $attributes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/keepsuit/laravel-opentelemetry/src/Instrumentation/RedisInstrumentation.php [61:73]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function recordOperationDurationMetric(CommandExecuted $event, array $attributes): void
    {
        $duration = (Clock::getDefault()->now() - $this->getEventStartTimestampNs($event->time)) / ClockInterface::NANOS_PER_SECOND;

        Meter::histogram(
            name: DbMetrics::DB_CLIENT_OPERATION_DURATION,
            unit: 's',
            description: 'Duration of database client operations.',
            advisory: [
                'ExplicitBucketBoundaries' => [0.001, 0.005, 0.01, 0.05, 0.1, 0.5, 1.0, 5.0, 10.0],
            ])
            ->record($duration, $attributes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



