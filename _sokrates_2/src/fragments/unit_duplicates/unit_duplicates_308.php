vendor/open-telemetry/api/Globals.php [33:41]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private readonly TracerProviderInterface $tracerProvider,
        private readonly MeterProviderInterface $meterProvider,
        private readonly LoggerProviderInterface $loggerProvider,
        private readonly EventLoggerProviderInterface $eventLoggerProvider,
        private readonly TextMapPropagatorInterface $propagator,
        private readonly ResponsePropagatorInterface $responsePropagator,
    ) {
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/open-telemetry/sdk/Sdk.php [20:28]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private readonly TracerProviderInterface $tracerProvider,
        private readonly MeterProviderInterface $meterProvider,
        private readonly LoggerProviderInterface $loggerProvider,
        private readonly EventLoggerProviderInterface $eventLoggerProvider,
        private readonly TextMapPropagatorInterface $propagator,
        private readonly ResponsePropagatorInterface $responsePropagator,
    ) {
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



