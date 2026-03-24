vendor/larastan/larastan/src/ReturnTypes/ConsoleCommand/HasArgumentDynamicReturnTypeExtension.php [34:69]:
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

        if ($methodCall->getArgs() === []) {
            return null;
        }

        $constantStrings = $scope->getType($methodCall->getArgs()[0]->value)->getConstantStrings();

        if (count($constantStrings) !== 1) {
            return null;
        }

        $returnTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            $command->mergeApplicationDefinition();
            $returnTypes[] = $command->getDefinition()->hasArgument($constantStrings[0]->getValue());
        }

        if (count($returnTypes) === 0) {
            return null;
        }

        $returnTypes = array_unique($returnTypes);

        return count($returnTypes) === 1 ? new ConstantBooleanType($returnTypes[0]) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ConsoleCommand/HasArgumentDynamicReturnTypeExtension.php [34:69]:
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

        if ($methodCall->getArgs() === []) {
            return null;
        }

        $constantStrings = $scope->getType($methodCall->getArgs()[0]->value)->getConstantStrings();

        if (count($constantStrings) !== 1) {
            return null;
        }

        $returnTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            $command->mergeApplicationDefinition();
            $returnTypes[] = $command->getDefinition()->hasArgument($constantStrings[0]->getValue());
        }

        if (count($returnTypes) === 0) {
            return null;
        }

        $returnTypes = array_unique($returnTypes);

        return count($returnTypes) === 1 ? new ConstantBooleanType($returnTypes[0]) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



