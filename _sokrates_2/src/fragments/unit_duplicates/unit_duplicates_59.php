vendor/larastan/larastan/src/Methods/ModelFactoryMethodsClassReflectionExtension.php [33:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if (! $classReflection->is(Factory::class)) {
            return false;
        }

        $modelType = $classReflection->getActiveTemplateTypeMap()->getType('TModel');

        // Generic type is not specified
        if ($modelType === null) {
            if (! $classReflection->isGeneric() && $classReflection->getParentClass()?->isGeneric()) {
                $modelType = $classReflection->getParentClass()->getActiveTemplateTypeMap()->getType('TModel');
            }
        }

        if ($modelType === null) {
            return false;
        }

        if ($modelType->getObjectClassReflections() !== []) {
            $modelReflection = $modelType->getObjectClassReflections()[0];
        } else {
            $modelReflection = $this->reflectionProvider->getClass(Model::class);
        }

        if ($methodName === 'trashed' && array_key_exists(SoftDeletes::class, $modelReflection->getTraits(true))) {
            return true;
        }

        if (! Str::startsWith($methodName, ['for', 'has'])) {
            return false;
        }

        $relationship = Str::camel(Str::substr($methodName, 3));

        return $modelType->hasMethod($relationship)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/ModelFactoryMethodsClassReflectionExtension.php [33:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if (! $classReflection->is(Factory::class)) {
            return false;
        }

        $modelType = $classReflection->getActiveTemplateTypeMap()->getType('TModel');

        // Generic type is not specified
        if ($modelType === null) {
            if (! $classReflection->isGeneric() && $classReflection->getParentClass()?->isGeneric()) {
                $modelType = $classReflection->getParentClass()->getActiveTemplateTypeMap()->getType('TModel');
            }
        }

        if ($modelType === null) {
            return false;
        }

        if ($modelType->getObjectClassReflections() !== []) {
            $modelReflection = $modelType->getObjectClassReflections()[0];
        } else {
            $modelReflection = $this->reflectionProvider->getClass(Model::class);
        }

        if ($methodName === 'trashed' && array_key_exists(SoftDeletes::class, $modelReflection->getTraits(true))) {
            return true;
        }

        if (! Str::startsWith($methodName, ['for', 'has'])) {
            return false;
        }

        $relationship = Str::camel(Str::substr($methodName, 3));

        return $modelType->hasMethod($relationship)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



