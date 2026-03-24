vendor/larastan/larastan/src/ReturnTypes/ConfigRepositoryDynamicMethodReturnTypeExtension.php [42:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $args = $methodCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);

        if ($methodReflection->getName() === 'get') {
            return $returnTypes === [] ? null : TypeCombinator::union(...$returnTypes);
        }

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



vendor/nunomaduro/larastan/src/ReturnTypes/ConfigRepositoryDynamicMethodReturnTypeExtension.php [42:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $args = $methodCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);

        if ($methodReflection->getName() === 'get') {
            return $returnTypes === [] ? null : TypeCombinator::union(...$returnTypes);
        }

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



