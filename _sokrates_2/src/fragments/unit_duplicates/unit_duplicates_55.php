vendor/larastan/larastan/src/ReturnTypes/ContainerArrayAccessDynamicMethodReturnTypeExtension.php [39:79]:
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

        $argType = $scope->getType($args[0]->value);

        $argStrings = $argType->getConstantStrings();

        if ($argStrings === []) {
            return null;
        }

        $argTypes = [];

        foreach ($argStrings as $argString) {
            $resolvedValue = $this->resolve($argString->getValue());

            if ($resolvedValue === null) {
                $argTypes[] = new ErrorType();
                continue;
            }

            if (is_object($resolvedValue)) {
                $class = $resolvedValue::class;

                $argTypes[] = new ObjectType($class);
                continue;
            }

            $argTypes[] = $scope->getTypeFromValue($resolvedValue);
        }

        return TypeCombinator::union(...$argTypes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ContainerArrayAccessDynamicMethodReturnTypeExtension.php [39:79]:
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

        $argType = $scope->getType($args[0]->value);

        $argStrings = $argType->getConstantStrings();

        if ($argStrings === []) {
            return null;
        }

        $argTypes = [];

        foreach ($argStrings as $argString) {
            $resolvedValue = $this->resolve($argString->getValue());

            if ($resolvedValue === null) {
                $argTypes[] = new ErrorType();
                continue;
            }

            if (is_object($resolvedValue)) {
                $class = $resolvedValue::class;

                $argTypes[] = new ObjectType($class);
                continue;
            }

            $argTypes[] = $scope->getTypeFromValue($resolvedValue);
        }

        return TypeCombinator::union(...$argTypes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



