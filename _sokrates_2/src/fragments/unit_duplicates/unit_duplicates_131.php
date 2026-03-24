vendor/larastan/larastan/src/Internal/ConsoleApplicationHelper.php [31:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getArguments(ClassReflection $classReflection, Scope $scope): Type|null
    {
        $argTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            try {
                $arguments = $command->getDefinition()->getArguments();
                $builder   = ConstantArrayTypeBuilder::createEmpty();

                foreach ($arguments as $name => $argument) {
                    $argumentType = $this->getArgumentType($scope, $argument);
                    $builder->setOffsetValueType(new ConstantStringType($name), $argumentType);
                }

                $argTypes[] = $builder->getArray();
            } catch (InvalidArgumentException) {
                // noop
            }
        }

        return count($argTypes) > 0 ? TypeCombinator::union(...$argTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConsoleApplicationHelper.php [31:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getArguments(ClassReflection $classReflection, Scope $scope): Type|null
    {
        $argTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            try {
                $arguments = $command->getDefinition()->getArguments();
                $builder   = ConstantArrayTypeBuilder::createEmpty();

                foreach ($arguments as $name => $argument) {
                    $argumentType = $this->getArgumentType($scope, $argument);
                    $builder->setOffsetValueType(new ConstantStringType($name), $argumentType);
                }

                $argTypes[] = $builder->getArray();
            } catch (InvalidArgumentException) {
                // noop
            }
        }

        return count($argTypes) > 0 ? TypeCombinator::union(...$argTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



