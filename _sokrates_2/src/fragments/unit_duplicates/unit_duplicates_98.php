vendor/larastan/larastan/src/ReturnTypes/RequestRouteExtension.php [36:60]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        if (count($methodCall->getArgs()) === 0) {
            return TypeCombinator::addNull(new ObjectType(Route::class));
        }

        if (count($methodCall->getArgs()) === 2) {
            $defaultType = $scope->getType($methodCall->getArgs()[1]->value);
        } else {
            $defaultType = new NullType();
        }

        if ($defaultType->isCallable()->yes()) {
            $defaultType = $defaultType->getCallableParametersAcceptors($scope)[0]->getReturnType();
        }

        return TypeUtils::toBenevolentUnion(TypeCombinator::union(
            new ObjectWithoutClassType(),
            new StringType(),
            $defaultType,
        ));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/RequestRouteExtension.php [36:60]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        if (count($methodCall->getArgs()) === 0) {
            return TypeCombinator::addNull(new ObjectType(Route::class));
        }

        if (count($methodCall->getArgs()) === 2) {
            $defaultType = $scope->getType($methodCall->getArgs()[1]->value);
        } else {
            $defaultType = new NullType();
        }

        if ($defaultType->isCallable()->yes()) {
            $defaultType = $defaultType->getCallableParametersAcceptors($scope)[0]->getReturnType();
        }

        return TypeUtils::toBenevolentUnion(TypeCombinator::union(
            new ObjectWithoutClassType(),
            new StringType(),
            $defaultType,
        ));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



