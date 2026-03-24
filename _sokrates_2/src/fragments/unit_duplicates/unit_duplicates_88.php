vendor/larastan/larastan/src/ReturnTypes/NewModelQueryDynamicMethodReturnTypeExtension.php [43:73]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType = $scope->getType($methodCall->var);

        $classReflections = $calledOnType->getObjectClassReflections();

        if ($classReflections === []) {
            return null;
        }

        $types = [];

        foreach ($classReflections as $classReflection) {
            if (! $classReflection->is(Model::class)) {
                continue;
            }

            $builderName = $this->builderHelper->determineBuilderName($classReflection->getName());

            $types[] = new GenericObjectType($builderName, [new ObjectType($classReflection->getName())]);
        }

        if ($types === []) {
            return null;
        }

        return TypeCombinator::union(...$types);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/NewModelQueryDynamicMethodReturnTypeExtension.php [43:73]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType = $scope->getType($methodCall->var);

        $classReflections = $calledOnType->getObjectClassReflections();

        if ($classReflections === []) {
            return null;
        }

        $types = [];

        foreach ($classReflections as $classReflection) {
            if (! $classReflection->is(Model::class)) {
                continue;
            }

            $builderName = $this->builderHelper->determineBuilderName($classReflection->getName());

            $types[] = new GenericObjectType($builderName, [new ObjectType($classReflection->getName())]);
        }

        if ($types === []) {
            return null;
        }

        return TypeCombinator::union(...$types);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



