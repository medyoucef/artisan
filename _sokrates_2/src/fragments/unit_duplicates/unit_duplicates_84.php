vendor/larastan/larastan/src/Rules/NoUnnecessaryEnumerableToArrayCallsRule.php [39:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        $name = $node->name;

        if (! $name instanceof Identifier || $name->toString() !== 'toArray') {
            return [];
        }

        $calledOnType = $scope->getType($node->var);

        if (! (new ObjectType(Enumerable::class))->isSuperTypeOf($calledOnType)->yes()) {
            return [];
        }

        $valueType = $calledOnType->getTemplateType(Enumerable::class, 'TValue');

        if (! (new ObjectType(Arrayable::class))->isSuperTypeOf($valueType)->no()) {
            return [];
        }

        return [
            RuleErrorBuilder::message(
                'Called [toArray()] on an Enumerable which does not contain any Arrayables.',
            )
                ->tip('Use [all()] to get the items as an array.')
                ->identifier('larastan.unnecessaryEnumerableToArrayCall')
                ->line($name->getStartLine())
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoUnnecessaryEnumerableToArrayCallsRule.php [39:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        $name = $node->name;

        if (! $name instanceof Identifier || $name->toString() !== 'toArray') {
            return [];
        }

        $calledOnType = $scope->getType($node->var);

        if (! (new ObjectType(Enumerable::class))->isSuperTypeOf($calledOnType)->yes()) {
            return [];
        }

        $valueType = $calledOnType->getTemplateType(Enumerable::class, 'TValue');

        if (! (new ObjectType(Arrayable::class))->isSuperTypeOf($valueType)->no()) {
            return [];
        }

        return [
            RuleErrorBuilder::message(
                'Called [toArray()] on an Enumerable which does not contain any Arrayables.',
            )
                ->tip('Use [all()] to get the items as an array.')
                ->identifier('larastan.unnecessaryEnumerableToArrayCall')
                ->line($name->getStartLine())
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



