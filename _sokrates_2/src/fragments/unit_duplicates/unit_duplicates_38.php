vendor/larastan/larastan/src/Rules/UselessConstructs/NoUselessWithFunctionCallsRule.php [26:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Name) {
            return [];
        }

        if (strtolower($node->name->toString()) !== 'with') {
            return [];
        }

        $args = $node->getArgs();

        if (count($args) < 1) {
            return [];
        }

        if (count($args) === 1) {
            return [
                RuleErrorBuilder::message("Calling the helper function 'with()' with only one argument simply returns the value itself. If you want to chain methods on a construct, use '(new ClassName())->foo()' instead")
                    ->line($node->getStartLine())
                    ->identifier('larastan.uselessConstructs.with')
                    ->fixNode($node, static function () use ($args) {
                        return $args[0]->value;
                    })
                    ->build(),
            ];
        }

        $secondArgumentType = $scope->getType($args[1]->value);

        if ($secondArgumentType->isCallable()->no() === false) {
            return [];
        }

        return [
            RuleErrorBuilder::message("Calling the helper function 'with()' without a callable as the second argument simply returns the value without doing anything")
                ->line($node->getStartLine())
                ->identifier('larastan.uselessConstructs.with')
                ->fixNode($node, static function () use ($args) {
                    return $args[0]->value;
                })
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/UselessConstructs/NoUselessWithFunctionCallsRule.php [26:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Name) {
            return [];
        }

        if (strtolower($node->name->toString()) !== 'with') {
            return [];
        }

        $args = $node->getArgs();

        if (count($args) < 1) {
            return [];
        }

        if (count($args) === 1) {
            return [
                RuleErrorBuilder::message("Calling the helper function 'with()' with only one argument simply returns the value itself. If you want to chain methods on a construct, use '(new ClassName())->foo()' instead")
                    ->line($node->getStartLine())
                    ->identifier('larastan.uselessConstructs.with')
                    ->fixNode($node, static function () use ($args) {
                        return $args[0]->value;
                    })
                    ->build(),
            ];
        }

        $secondArgumentType = $scope->getType($args[1]->value);

        if ($secondArgumentType->isCallable()->no() === false) {
            return [];
        }

        return [
            RuleErrorBuilder::message("Calling the helper function 'with()' without a callable as the second argument simply returns the value without doing anything")
                ->line($node->getStartLine())
                ->identifier('larastan.uselessConstructs.with')
                ->fixNode($node, static function () use ($args) {
                    return $args[0]->value;
                })
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



