vendor/larastan/larastan/src/ReturnTypes/ConsoleCommand/HasOptionDynamicReturnTypeExtension.php [34:71]:
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

        $argName = $constantStrings[0]->getValue();

        $returnTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            $command->mergeApplicationDefinition();
            $returnTypes[] = $command->getDefinition()->hasOption($argName) || $command->getDefinition()->hasShortcut($argName);
        }

        if (count($returnTypes) === 0) {
            return null;
        }

        $returnTypes = array_unique($returnTypes);

        return count($returnTypes) === 1 ? new ConstantBooleanType($returnTypes[0]) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ConsoleCommand/HasOptionDynamicReturnTypeExtension.php [34:71]:
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

        $argName = $constantStrings[0]->getValue();

        $returnTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            $command->mergeApplicationDefinition();
            $returnTypes[] = $command->getDefinition()->hasOption($argName) || $command->getDefinition()->hasShortcut($argName);
        }

        if (count($returnTypes) === 0) {
            return null;
        }

        $returnTypes = array_unique($returnTypes);

        return count($returnTypes) === 1 ? new ConstantBooleanType($returnTypes[0]) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



