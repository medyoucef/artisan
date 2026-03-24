vendor/larastan/larastan/src/Methods/BuilderHelper.php [74:86]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private ReflectionProvider $reflectionProvider,
        private bool $checkProperties,
        private MacroMethodsClassReflectionExtension $macroMethodsClassReflectionExtension,
    ) {
        // @phpstan-ignore-next-line
        if (! defined('LARAVEL_VERSION') || version_compare(LARAVEL_VERSION, '12.15.0', '<')) {
            return;
        }

        // @phpstan-ignore-next-line
        $this->passthru[] = 'getCountForPagination';
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/BuilderHelper.php [74:86]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private ReflectionProvider $reflectionProvider,
        private bool $checkProperties,
        private MacroMethodsClassReflectionExtension $macroMethodsClassReflectionExtension,
    ) {
        // @phpstan-ignore-next-line
        if (! defined('LARAVEL_VERSION') || version_compare(LARAVEL_VERSION, '12.15.0', '<')) {
            return;
        }

        // @phpstan-ignore-next-line
        $this->passthru[] = 'getCountForPagination';
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



