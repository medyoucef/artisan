vendor/larastan/larastan/src/Methods/BuilderHelper.php [88:134]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function dynamicWhere(
        string $methodName,
        Type $returnObject,
    ): EloquentBuilderMethodReflection|null {
        if (! Str::startsWith($methodName, 'where')) {
            return null;
        }

        if (count($returnObject->getObjectClassReflections()) > 0 && $this->checkProperties) {
            $returnClassReflection = $returnObject->getObjectClassReflections()[0];

            $modelType = $returnClassReflection->getActiveTemplateTypeMap()->getType('TModel')
                ?? $returnClassReflection->getActiveTemplateTypeMap()->getType('TRelatedModel');

            if ($modelType !== null) {
                $finder = substr($methodName, 5);

                $segments = preg_split('/(And|Or)(?=[A-Z])/', $finder, -1, PREG_SPLIT_DELIM_CAPTURE);

                if ($segments !== false) {
                    $trinaryLogic = TrinaryLogic::createYes();

                    foreach ($segments as $segment) {
                        if ($segment === 'And' || $segment === 'Or') {
                            continue;
                        }

                        $trinaryLogic = $trinaryLogic->and($modelType->hasInstanceProperty(Str::snake($segment)));
                    }

                    if (! $trinaryLogic->yes()) {
                        return null;
                    }
                }
            }
        }

        $classReflection = $this->reflectionProvider->getClass(QueryBuilder::class);

        return new EloquentBuilderMethodReflection(
            $methodName,
            $classReflection,
            [new DynamicWhereParameterReflection()],
            $returnObject,
            true,
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/BuilderHelper.php [88:134]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function dynamicWhere(
        string $methodName,
        Type $returnObject,
    ): EloquentBuilderMethodReflection|null {
        if (! Str::startsWith($methodName, 'where')) {
            return null;
        }

        if (count($returnObject->getObjectClassReflections()) > 0 && $this->checkProperties) {
            $returnClassReflection = $returnObject->getObjectClassReflections()[0];

            $modelType = $returnClassReflection->getActiveTemplateTypeMap()->getType('TModel')
                ?? $returnClassReflection->getActiveTemplateTypeMap()->getType('TRelatedModel');

            if ($modelType !== null) {
                $finder = substr($methodName, 5);

                $segments = preg_split('/(And|Or)(?=[A-Z])/', $finder, -1, PREG_SPLIT_DELIM_CAPTURE);

                if ($segments !== false) {
                    $trinaryLogic = TrinaryLogic::createYes();

                    foreach ($segments as $segment) {
                        if ($segment === 'And' || $segment === 'Or') {
                            continue;
                        }

                        $trinaryLogic = $trinaryLogic->and($modelType->hasInstanceProperty(Str::snake($segment)));
                    }

                    if (! $trinaryLogic->yes()) {
                        return null;
                    }
                }
            }
        }

        $classReflection = $this->reflectionProvider->getClass(QueryBuilder::class);

        return new EloquentBuilderMethodReflection(
            $methodName,
            $classReflection,
            [new DynamicWhereParameterReflection()],
            $returnObject,
            true,
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



