vendor/larastan/larastan/src/ReturnTypes/ConsoleCommand/ArgumentDynamicReturnTypeExtension.php [37:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $classReflection = $scope->getClassReflection();

        if ($classReflection === null) {
            return null;
        }

        $args = $methodCall->getArgs();

        $defaultReturnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if ($args === [] || $methodReflection->getName() === 'arguments') {
            return $this->consoleApplicationHelper->getArguments($classReflection, $scope);
        }

        $argStrings = $scope->getType($args[0]->value)->getConstantStrings();

        if (count($argStrings) === 0) {
            return null;
        }

        $returnTypes = [];

        foreach ($argStrings as $argString) {
            $argName = $argString->getValue();

            $argTypes = [];

            foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
                try {
                    $command->mergeApplicationDefinition();
                    $argument = $command->getDefinition()->getArgument($argName);

                    $argTypes[] = $this->consoleApplicationHelper->getArgumentType($scope, $argument);
                } catch (InvalidArgumentException) {
                    // noop
                }

                $returnTypes[] = count($argTypes) > 0 ? TypeCombinator::union(...$argTypes) : $defaultReturnType;
            }
        }

        return count($returnTypes) > 0 ? TypeCombinator::union(...$returnTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ConsoleCommand/ArgumentDynamicReturnTypeExtension.php [37:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $classReflection = $scope->getClassReflection();

        if ($classReflection === null) {
            return null;
        }

        $args = $methodCall->getArgs();

        $defaultReturnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if ($args === [] || $methodReflection->getName() === 'arguments') {
            return $this->consoleApplicationHelper->getArguments($classReflection, $scope);
        }

        $argStrings = $scope->getType($args[0]->value)->getConstantStrings();

        if (count($argStrings) === 0) {
            return null;
        }

        $returnTypes = [];

        foreach ($argStrings as $argString) {
            $argName = $argString->getValue();

            $argTypes = [];

            foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
                try {
                    $command->mergeApplicationDefinition();
                    $argument = $command->getDefinition()->getArgument($argName);

                    $argTypes[] = $this->consoleApplicationHelper->getArgumentType($scope, $argument);
                } catch (InvalidArgumentException) {
                    // noop
                }

                $returnTypes[] = count($argTypes) > 0 ? TypeCombinator::union(...$argTypes) : $defaultReturnType;
            }
        }

        return count($returnTypes) > 0 ? TypeCombinator::union(...$returnTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



