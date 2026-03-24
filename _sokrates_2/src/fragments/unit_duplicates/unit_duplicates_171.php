vendor/larastan/larastan/src/Rules/OctaneCompatibilityRule.php [136:151]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function checkForThisAppUsage(Scope $scope, Node\Expr\Closure $closure): array
    {
        $nodes = (new NodeFinder())->find($closure->getStmts(), static function (Node $node): bool {
            return $node instanceof Node\Expr\PropertyFetch &&
                $node->var instanceof Node\Expr\Variable &&
                $node->var->name === 'this' &&
                $node->name instanceof Node\Identifier &&
                $node->name->name === 'app';
        });

        if (count($nodes) > 0) {
            return array_map([$this, 'dependencyInjectionError'], $nodes);
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/OctaneCompatibilityRule.php [136:151]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function checkForThisAppUsage(Scope $scope, Node\Expr\Closure $closure): array
    {
        $nodes = (new NodeFinder())->find($closure->getStmts(), static function (Node $node): bool {
            return $node instanceof Node\Expr\PropertyFetch &&
                $node->var instanceof Node\Expr\Variable &&
                $node->var->name === 'this' &&
                $node->name instanceof Node\Identifier &&
                $node->name->name === 'app';
        });

        if (count($nodes) > 0) {
            return array_map([$this, 'dependencyInjectionError'], $nodes);
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



