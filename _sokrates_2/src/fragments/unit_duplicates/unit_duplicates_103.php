vendor/larastan/larastan/src/ReturnTypes/TestCaseExtension.php [37:64]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $defaultReturnType = new ObjectType('Mockery\\MockInterface');

        if (count($methodCall->args) === 0) {
            return new ErrorType();
        }

        $classType       = $scope->getType($methodCall->getArgs()[0]->value);
        $constantStrings = $classType->getConstantStrings();

        if ($constantStrings === []) {
            return $defaultReturnType;
        }

        $returnTypes = [];

        foreach ($constantStrings as $constantString) {
            $objectType = new ObjectType($constantString->getValue());

            $returnTypes[] = TypeCombinator::intersect($defaultReturnType, $objectType);
        }

        return TypeCombinator::union(...$returnTypes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/TestCaseExtension.php [37:64]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $defaultReturnType = new ObjectType('Mockery\\MockInterface');

        if (count($methodCall->args) === 0) {
            return new ErrorType();
        }

        $classType       = $scope->getType($methodCall->getArgs()[0]->value);
        $constantStrings = $classType->getConstantStrings();

        if ($constantStrings === []) {
            return $defaultReturnType;
        }

        $returnTypes = [];

        foreach ($constantStrings as $constantString) {
            $objectType = new ObjectType($constantString->getValue());

            $returnTypes[] = TypeCombinator::intersect($defaultReturnType, $objectType);
        }

        return TypeCombinator::union(...$returnTypes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



