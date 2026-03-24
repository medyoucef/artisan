vendor/larastan/larastan/src/Collectors/UsedViewMakeCollector.php [25:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): string|null
    {
        $name = $node->name;

        if (! $name instanceof Node\Identifier) {
            return null;
        }

        if ($name->name !== 'make') {
            return null;
        }

        if (count($node->getArgs()) < 1) {
            return null;
        }

        $class = $node->var;

        if (! (new ObjectType(Factory::class))->isSuperTypeOf($scope->getType($class))->yes()) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedViewMakeCollector.php [25:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): string|null
    {
        $name = $node->name;

        if (! $name instanceof Node\Identifier) {
            return null;
        }

        if ($name->name !== 'make') {
            return null;
        }

        if (count($node->getArgs()) < 1) {
            return null;
        }

        $class = $node->var;

        if (! (new ObjectType(Factory::class))->isSuperTypeOf($scope->getType($class))->yes()) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



