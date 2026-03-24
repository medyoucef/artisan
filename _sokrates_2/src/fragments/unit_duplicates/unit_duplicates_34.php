vendor/larastan/larastan/src/ReturnTypes/ConsoleCommand/OptionDynamicReturnTypeExtension.php [37:90]:
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

        if ($args === [] || $methodReflection->getName() === 'options') {
            return $this->consoleApplicationHelper->getOptions($classReflection, $scope);
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
                    $definition = $command->getDefinition();

                    if ($definition->hasShortcut($argName)) {
                        $argument = $definition->getOptionForShortcut($argName);
                    } else {
                        $argument = $definition->getOption($argName);
                    }

                    $argTypes[] = $this->consoleApplicationHelper->getOptionType($scope, $argument);
                } catch (InvalidArgumentException) {
                    // noop
                }

                $returnTypes[] = count($argTypes) > 0 ? TypeCombinator::union(...$argTypes) : $defaultReturnType;
            }
        }

        return count($returnTypes) > 0 ? TypeCombinator::union(...$returnTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ConsoleCommand/OptionDynamicReturnTypeExtension.php [37:90]:
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

        if ($args === [] || $methodReflection->getName() === 'options') {
            return $this->consoleApplicationHelper->getOptions($classReflection, $scope);
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
                    $definition = $command->getDefinition();

                    if ($definition->hasShortcut($argName)) {
                        $argument = $definition->getOptionForShortcut($argName);
                    } else {
                        $argument = $definition->getOption($argName);
                    }

                    $argTypes[] = $this->consoleApplicationHelper->getOptionType($scope, $argument);
                } catch (InvalidArgumentException) {
                    // noop
                }

                $returnTypes[] = count($argTypes) > 0 ? TypeCombinator::union(...$argTypes) : $defaultReturnType;
            }
        }

        return count($returnTypes) > 0 ? TypeCombinator::union(...$returnTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



