vendor/larastan/larastan/src/Collectors/UsedViewFunctionCollector.php [23:50]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): string|null
    {
        $funcName = $node->name;

        if (! $funcName instanceof Node\Name) {
            return null;
        }

        $funcName = $scope->resolveName($funcName);

        if ($funcName !== 'view') {
            return null;
        }

        // TODO: maybe make sure this function is coming from Laravel

        if (count($node->getArgs()) < 1) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedViewFunctionCollector.php [23:50]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): string|null
    {
        $funcName = $node->name;

        if (! $funcName instanceof Node\Name) {
            return null;
        }

        $funcName = $scope->resolveName($funcName);

        if ($funcName !== 'view') {
            return null;
        }

        // TODO: maybe make sure this function is coming from Laravel

        if (count($node->getArgs()) < 1) {
            return null;
        }

        $template = $node->getArgs()[0]->value;

        if (! $template instanceof Node\Scalar\String_) {
            return null;
        }

        return ViewName::normalize($template->value);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



