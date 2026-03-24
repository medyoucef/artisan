vendor/larastan/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [96:127]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        protected ReflectionProvider $reflectionProvider,
        protected ModelPropertyExtension $propertyExtension,
        array $onlyMethods,
        array $excludeMethods,
    ) {
        $allMethods = array_merge(
            self::RISKY_METHODS,
            self::RISKY_PARAM_METHODS,
            [
                'first',
                'contains',
                'containsstrict',
            ],
        );

        if (! empty($onlyMethods)) {
            $this->shouldHandle = array_map(static function (string $methodName): string {
                return Str::lower($methodName);
            }, $onlyMethods);
        } else {
            $this->shouldHandle = $allMethods;
        }

        if (empty($excludeMethods)) {
            return;
        }

        $this->shouldHandle = array_diff($this->shouldHandle, array_map(static function (string $methodName): string {
            return Str::lower($methodName);
        }, $excludeMethods));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [96:127]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        protected ReflectionProvider $reflectionProvider,
        protected ModelPropertyExtension $propertyExtension,
        array $onlyMethods,
        array $excludeMethods,
    ) {
        $allMethods = array_merge(
            self::RISKY_METHODS,
            self::RISKY_PARAM_METHODS,
            [
                'first',
                'contains',
                'containsstrict',
            ],
        );

        if (! empty($onlyMethods)) {
            $this->shouldHandle = array_map(static function (string $methodName): string {
                return Str::lower($methodName);
            }, $onlyMethods);
        } else {
            $this->shouldHandle = $allMethods;
        }

        if (empty($excludeMethods)) {
            return;
        }

        $this->shouldHandle = array_diff($this->shouldHandle, array_map(static function (string $methodName): string {
            return Str::lower($methodName);
        }, $excludeMethods));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



