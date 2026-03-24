vendor/larastan/larastan/src/Collectors/UsedViewFacadeMakeCollector.php [25:60]:
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

        $class = $node->class;

        if (! $class instanceof Node\Name) {
            return null;
        }

        $class = $scope->resolveName($class);

        if (! (new ObjectType(View::class))->isSuperTypeOf(new ObjectType($class))->yes()) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedViewFacadeMakeCollector.php [25:60]:
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

        $class = $node->class;

        if (! $class instanceof Node\Name) {
            return null;
        }

        $class = $scope->resolveName($class);

        if (! (new ObjectType(View::class))->isSuperTypeOf(new ObjectType($class))->yes()) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



