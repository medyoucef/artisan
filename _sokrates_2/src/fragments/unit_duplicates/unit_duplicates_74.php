vendor/larastan/larastan/src/Rules/UselessConstructs/NoUselessValueFunctionCallsRule.php [28:57]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Name) {
            return [];
        }

        if (strtolower($node->name->toString()) !== 'value') {
            return [];
        }

        $args = $node->getArgs();

        if (count($args) < 1) {
            return [];
        }

        if ($scope->getType($args[0]->value)->isSuperTypeOf(new ClosureType([], new MixedType(), true))->no() === false) {
            return [];
        }

        return [
            RuleErrorBuilder::message("Calling the helper function 'value()' without a closure as the first argument simply returns the first argument without doing anything")
                ->line($node->getStartLine())
                ->identifier('larastan.uselessConstructs.value')
                ->fixNode($node, static function () use ($args) {
                    return $args[0]->value;
                })
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/UselessConstructs/NoUselessValueFunctionCallsRule.php [28:57]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Name) {
            return [];
        }

        if (strtolower($node->name->toString()) !== 'value') {
            return [];
        }

        $args = $node->getArgs();

        if (count($args) < 1) {
            return [];
        }

        if ($scope->getType($args[0]->value)->isSuperTypeOf(new ClosureType([], new MixedType(), true))->no() === false) {
            return [];
        }

        return [
            RuleErrorBuilder::message("Calling the helper function 'value()' without a closure as the first argument simply returns the first argument without doing anything")
                ->line($node->getStartLine())
                ->identifier('larastan.uselessConstructs.value')
                ->fixNode($node, static function () use ($args) {
                    return $args[0]->value;
                })
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



