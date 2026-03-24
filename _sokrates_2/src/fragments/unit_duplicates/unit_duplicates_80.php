vendor/larastan/larastan/src/ReturnTypes/EloquentBuilderExtension.php [35:65]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isMethodSupported(MethodReflection $methodReflection): bool
    {
        $builderReflection = $this->reflectionProvider->getClass(EloquentBuilder::class);

        // Don't handle dynamic wheres
        if (
            Str::startsWith($methodReflection->getName(), 'where') &&
            ! $builderReflection->hasNativeMethod($methodReflection->getName())
        ) {
            return false;
        }

        if (
            Str::startsWith($methodReflection->getName(), 'find') &&
            $builderReflection->hasNativeMethod($methodReflection->getName())
        ) {
            return false;
        }

        $templateTypeMap = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap();

        if (! $templateTypeMap->hasType('TModel')) {
            return false;
        }

        if ($templateTypeMap->getType('TModel')?->getObjectClassNames() === []) {
            return false;
        }

        return $builderReflection->hasNativeMethod($methodReflection->getName());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/EloquentBuilderExtension.php [35:65]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isMethodSupported(MethodReflection $methodReflection): bool
    {
        $builderReflection = $this->reflectionProvider->getClass(EloquentBuilder::class);

        // Don't handle dynamic wheres
        if (
            Str::startsWith($methodReflection->getName(), 'where') &&
            ! $builderReflection->hasNativeMethod($methodReflection->getName())
        ) {
            return false;
        }

        if (
            Str::startsWith($methodReflection->getName(), 'find') &&
            $builderReflection->hasNativeMethod($methodReflection->getName())
        ) {
            return false;
        }

        $templateTypeMap = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap();

        if (! $templateTypeMap->hasType('TModel')) {
            return false;
        }

        if ($templateTypeMap->getType('TModel')?->getObjectClassNames() === []) {
            return false;
        }

        return $builderReflection->hasNativeMethod($methodReflection->getName());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



