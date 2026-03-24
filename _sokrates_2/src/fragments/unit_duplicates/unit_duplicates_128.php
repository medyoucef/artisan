vendor/larastan/larastan/src/Collectors/UsedTranslationFunctionCollector.php [27:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array|null
    {
        if (! $node->name instanceof Node\Name) {
            return null;
        }

        if (! in_array($scope->resolveName($node->name), ['__', 'trans', 'trans_choice'], true)) {
            return null;
        }

        if (count($node->getArgs()) === 0) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return [$template->value, $node->getStartLine()];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedTranslationFunctionCollector.php [27:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array|null
    {
        if (! $node->name instanceof Node\Name) {
            return null;
        }

        if (! in_array($scope->resolveName($node->name), ['__', 'trans', 'trans_choice'], true)) {
            return null;
        }

        if (count($node->getArgs()) === 0) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return [$template->value, $node->getStartLine()];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



