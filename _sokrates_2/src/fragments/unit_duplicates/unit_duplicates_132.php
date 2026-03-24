vendor/larastan/larastan/src/Internal/ConsoleApplicationHelper.php [73:93]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getOptions(ClassReflection $classReflection, Scope $scope): Type|null
    {
        $optTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            try {
                $options = $command->getDefinition()->getOptions();
                $builder = ConstantArrayTypeBuilder::createEmpty();
                foreach ($options as $name => $option) {
                    $argumentType = $this->getOptionType($scope, $option);
                    $builder->setOffsetValueType(new ConstantStringType($name), $argumentType);
                }

                $optTypes[] = $builder->getArray();
            } catch (InvalidArgumentException) {
                // noop
            }
        }

        return count($optTypes) > 0 ? TypeCombinator::union(...$optTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConsoleApplicationHelper.php [73:93]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getOptions(ClassReflection $classReflection, Scope $scope): Type|null
    {
        $optTypes = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $command) {
            try {
                $options = $command->getDefinition()->getOptions();
                $builder = ConstantArrayTypeBuilder::createEmpty();
                foreach ($options as $name => $option) {
                    $argumentType = $this->getOptionType($scope, $option);
                    $builder->setOffsetValueType(new ConstantStringType($name), $argumentType);
                }

                $optTypes[] = $builder->getArray();
            } catch (InvalidArgumentException) {
                // noop
            }
        }

        return count($optTypes) > 0 ? TypeCombinator::union(...$optTypes) : null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



