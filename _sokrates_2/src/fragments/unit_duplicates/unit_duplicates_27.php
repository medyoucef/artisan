vendor/larastan/larastan/src/Properties/ModelCastHelper.php [247:300]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getModelCasts(ClassReflection $modelClassReflection): array
    {
        $className = $modelClassReflection->getName();

        if (array_key_exists($className, $this->modelCasts)) {
            return $this->modelCasts[$className];
        }

        try {
            /** @var Model $modelInstance */
            $modelInstance = $modelClassReflection->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            throw new ShouldNotHappenException();
        }

        if (
            $modelClassReflection->hasTraitUse(HasUniqueStringIds::class)
            || $modelClassReflection->hasTraitUse(HasUuids::class)
            || $modelClassReflection->hasTraitUse(HasUlids::class)
        ) {
            $modelInstance->usesUniqueIds = true;
        }

        $modelCasts = $modelInstance->getCasts();

        if ($this->parseModelCastsMethod) {
            $castsMethodReturnType = $this->parseCastsMethod($modelClassReflection);
        } else {
            $castsMethodReturnType = $modelClassReflection->getMethod(
                'casts',
                new OutOfClassScope(),
            )->getVariants()[0]->getReturnType();
        }

        if ($castsMethodReturnType->isConstantArray()->yes()) {
            $modelCasts = array_merge(
                $modelCasts,
                array_combine(
                    array_map(static fn ($key) => $key->getValue(), $castsMethodReturnType->getKeyTypes()), // @phpstan-ignore-line
                    array_map(static function (Type $value) {
                        if ($value->isConstantValue()->yes()) {
                            return str_replace('\\\\', '\\', (string) $value->getValue()); // @phpstan-ignore-line
                        }

                        return $value->describe(VerbosityLevel::value());
                    }, $castsMethodReturnType->getValueTypes()), // @phpstan-ignore-line
                ),
            );
        }

        $this->modelCasts[$className] = $modelCasts;

        return $modelCasts;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelCastHelper.php [247:300]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getModelCasts(ClassReflection $modelClassReflection): array
    {
        $className = $modelClassReflection->getName();

        if (array_key_exists($className, $this->modelCasts)) {
            return $this->modelCasts[$className];
        }

        try {
            /** @var Model $modelInstance */
            $modelInstance = $modelClassReflection->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            throw new ShouldNotHappenException();
        }

        if (
            $modelClassReflection->hasTraitUse(HasUniqueStringIds::class)
            || $modelClassReflection->hasTraitUse(HasUuids::class)
            || $modelClassReflection->hasTraitUse(HasUlids::class)
        ) {
            $modelInstance->usesUniqueIds = true;
        }

        $modelCasts = $modelInstance->getCasts();

        if ($this->parseModelCastsMethod) {
            $castsMethodReturnType = $this->parseCastsMethod($modelClassReflection);
        } else {
            $castsMethodReturnType = $modelClassReflection->getMethod(
                'casts',
                new OutOfClassScope(),
            )->getVariants()[0]->getReturnType();
        }

        if ($castsMethodReturnType->isConstantArray()->yes()) {
            $modelCasts = array_merge(
                $modelCasts,
                array_combine(
                    array_map(static fn ($key) => $key->getValue(), $castsMethodReturnType->getKeyTypes()), // @phpstan-ignore-line
                    array_map(static function (Type $value) {
                        if ($value->isConstantValue()->yes()) {
                            return str_replace('\\\\', '\\', (string) $value->getValue()); // @phpstan-ignore-line
                        }

                        return $value->describe(VerbosityLevel::value());
                    }, $castsMethodReturnType->getValueTypes()), // @phpstan-ignore-line
                ),
            );
        }

        $this->modelCasts[$className] = $modelCasts;

        return $modelCasts;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



