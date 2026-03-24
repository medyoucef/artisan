vendor/larastan/larastan/src/Rules/ConfigCollectionRule.php [38:78]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Identifier || $node->name->name !== 'collection') {
            return [];
        }

        if (! $node->class instanceof Name || $node->class->toString() !== Config::class) {
            return [];
        }

        if (! $this->configHelper->hasConfigPaths()) {
            return [];
        }

        $args = $node->getArgs();

        if ($args === []) {
            return [];
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);
        $returnType  = TypeCombinator::union(...$returnTypes);

        if (! $returnType->isArray()->no()) {
            return [];
        }

        $constantStrings = $scope->getType($args[0]->value)->getConstantStrings();

        if ($constantStrings === []) {
            return [];
        }

        $key = $constantStrings[0]->getValue();

        return [
            RuleErrorBuilder::message(sprintf('Config key \'%s\' is not an array.', $key))
                ->identifier('larastan.configCollection')
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/ConfigCollectionRule.php [38:78]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Identifier || $node->name->name !== 'collection') {
            return [];
        }

        if (! $node->class instanceof Name || $node->class->toString() !== Config::class) {
            return [];
        }

        if (! $this->configHelper->hasConfigPaths()) {
            return [];
        }

        $args = $node->getArgs();

        if ($args === []) {
            return [];
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);
        $returnType  = TypeCombinator::union(...$returnTypes);

        if (! $returnType->isArray()->no()) {
            return [];
        }

        $constantStrings = $scope->getType($args[0]->value)->getConstantStrings();

        if ($constantStrings === []) {
            return [];
        }

        $key = $constantStrings[0]->getValue();

        return [
            RuleErrorBuilder::message(sprintf('Config key \'%s\' is not an array.', $key))
                ->identifier('larastan.configCollection')
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



