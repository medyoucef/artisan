vendor/larastan/larastan/src/Rules/ConsoleCommand/UndefinedArgumentOrOptionRule.php [33:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier || ! in_array($node->name->name, ['argument', 'option'], true)) {
            return [];
        }

        if (count($node->getArgs()) !== 1) {
            return [];
        }

        $classReflection = $scope->getClassReflection();

        if ($classReflection === null) {
            return [];
        }

        if (! (new ObjectType('Illuminate\Console\Command'))->isSuperTypeOf(new ObjectType($classReflection->getName()))->yes()) {
            return [];
        }

        if (! (new ObjectType('Illuminate\Console\Command'))->isSuperTypeOf($scope->getType($node->var))->yes()) {
            return [];
        }

        $methodName = $node->name->name;

        $argType = $scope->getType($node->getArgs()[0]->value);

        $argStrings = $argType->getConstantStrings();

        if (count($argStrings) !== 1) {
            return [];
        }

        $argName = $argStrings[0]->getValue();

        $errors = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $name => $command) {
            $command->mergeApplicationDefinition();

            if ($methodName === 'argument') {
                if (! $command->getDefinition()->hasArgument($argName)) {
                    $errors[] = RuleErrorBuilder::message(sprintf('Command "%s" does not have argument "%s".', $name, $argName))
                        ->line($node->getStartLine())
                        ->identifier('larastan.console.undefinedArgument')
                        ->build();
                }
            } elseif (! $command->getDefinition()->hasOption($argName) && ! $command->getDefinition()->hasShortcut($argName)) {
                $errors[] = RuleErrorBuilder::message(sprintf('Command "%s" does not have option "%s".', $name, $argName))
                    ->line($node->getStartLine())
                    ->identifier('larastan.console.undefinedOption')
                    ->build();
            }
        }

        return $errors;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/ConsoleCommand/UndefinedArgumentOrOptionRule.php [33:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier || ! in_array($node->name->name, ['argument', 'option'], true)) {
            return [];
        }

        if (count($node->getArgs()) !== 1) {
            return [];
        }

        $classReflection = $scope->getClassReflection();

        if ($classReflection === null) {
            return [];
        }

        if (! (new ObjectType('Illuminate\Console\Command'))->isSuperTypeOf(new ObjectType($classReflection->getName()))->yes()) {
            return [];
        }

        if (! (new ObjectType('Illuminate\Console\Command'))->isSuperTypeOf($scope->getType($node->var))->yes()) {
            return [];
        }

        $methodName = $node->name->name;

        $argType = $scope->getType($node->getArgs()[0]->value);

        $argStrings = $argType->getConstantStrings();

        if (count($argStrings) !== 1) {
            return [];
        }

        $argName = $argStrings[0]->getValue();

        $errors = [];

        foreach ($this->consoleApplicationResolver->findCommands($classReflection) as $name => $command) {
            $command->mergeApplicationDefinition();

            if ($methodName === 'argument') {
                if (! $command->getDefinition()->hasArgument($argName)) {
                    $errors[] = RuleErrorBuilder::message(sprintf('Command "%s" does not have argument "%s".', $name, $argName))
                        ->line($node->getStartLine())
                        ->identifier('larastan.console.undefinedArgument')
                        ->build();
                }
            } elseif (! $command->getDefinition()->hasOption($argName) && ! $command->getDefinition()->hasShortcut($argName)) {
                $errors[] = RuleErrorBuilder::message(sprintf('Command "%s" does not have option "%s".', $name, $argName))
                    ->line($node->getStartLine())
                    ->identifier('larastan.console.undefinedOption')
                    ->build();
            }
        }

        return $errors;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



