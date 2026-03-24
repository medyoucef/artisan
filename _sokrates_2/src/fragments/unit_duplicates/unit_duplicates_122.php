vendor/larastan/larastan/src/ReturnTypes/ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension.php [41:64]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type|null {
        $args = $methodCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);

        $configType = TypeCombinator::union(...$returnTypes);

        if ($returnTypes === [] || ! $configType->isArray()->yes()) {
            return new ErrorType();
        }

        return new GenericObjectType(Collection::class, [
            $configType->getIterableKeyType(),
            $configType->getIterableValueType(),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension.php [41:64]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type|null {
        $args = $methodCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);

        $configType = TypeCombinator::union(...$returnTypes);

        if ($returnTypes === [] || ! $configType->isArray()->yes()) {
            return new ErrorType();
        }

        return new GenericObjectType(Collection::class, [
            $configType->getIterableKeyType(),
            $configType->getIterableValueType(),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



