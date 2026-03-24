vendor/larastan/larastan/src/Collectors/UsedEmailViewCollector.php [28:61]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): string|null
    {
        $name = $node->name;

        if (! $name instanceof Identifier) {
            return null;
        }

        if (! in_array($name->name, ['markdown', 'view'], true)) {
            return null;
        }

        if (count($node->getArgs()) === 0) {
            return null;
        }

        $class = $node->var;

        $type = $scope->getType($class);
        if (
            ! (new ObjectType(Mailable::class))->isSuperTypeOf($type)->yes()
            && ! (new ObjectType(MailMessage::class))->isSuperTypeOf($type)->yes()
        ) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedEmailViewCollector.php [28:61]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): string|null
    {
        $name = $node->name;

        if (! $name instanceof Identifier) {
            return null;
        }

        if (! in_array($name->name, ['markdown', 'view'], true)) {
            return null;
        }

        if (count($node->getArgs()) === 0) {
            return null;
        }

        $class = $node->var;

        $type = $scope->getType($class);
        if (
            ! (new ObjectType(Mailable::class))->isSuperTypeOf($type)->yes()
            && ! (new ObjectType(MailMessage::class))->isSuperTypeOf($type)->yes()
        ) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



