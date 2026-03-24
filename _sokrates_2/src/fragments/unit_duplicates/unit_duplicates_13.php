vendor/larastan/larastan/src/Rules/OctaneCompatibilityRule.php [34:133]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier) {
            return [];
        }

        if (! in_array($node->name->name, ['singleton', 'bind'], true)) {
            return [];
        }

        $args = $node->getArgs();

        if (count($args) < 2) {
            return [];
        }

        $calledOnType = $scope->getType($node->var);

        $classNames = $calledOnType->getObjectClassNames();

        if (count($classNames) !== 1) {
            return [];
        }

        if (
            $classNames[0] !== Application::class &&
            ! (new ObjectType(Application::class))->isSuperTypeOf($calledOnType)->yes()
        ) {
            return [];
        }

        if (! $args[1]->value instanceof Node\Expr\Closure) {
            return [];
        }

        /** @var Node\Expr\Closure $closure */
        $closure = $args[1]->value;

        /** @var Node\Param[] $closureParams */
        $closureParams = $closure->getParams();

        // Closure should have at least one parameter. First param
        // is container, second is parameters. If no parameter
        // is given we will check for the usage of `$this->app`
        if (count($closureParams) < 1) {
            return $this->checkForThisAppUsage($scope, $closure);
        }

        // Using `$app` with `bind` is ok, so we return early
        if ($node->name->name === 'bind') {
            return [];
        }

        if (! $closureParams[0]->var instanceof Node\Expr\Variable) {
            return [];
        }

        $containerParameterName = $closureParams[0]->var->name;

        $nodes = (new NodeFinder())->find($closure->getStmts(), static function (Node $node) use ($containerParameterName): bool {
            if (! $node instanceof Node\Expr\New_) {
                return false;
            }

            if (count($node->getArgs()) < 1) {
                return false;
            }

            if (! $node->getArgs()[0]->value instanceof Node\Expr\Variable && ! $node->getArgs()[0]->value instanceof Node\Expr\ArrayDimFetch) {
                return false;
            }

            if ($node->getArgs()[0]->value instanceof Node\Expr\ArrayDimFetch) {
                /** @var Node\Expr\Variable $var */
                $var = $node->getArgs()[0]->value->var;

                if ($var->name !== $containerParameterName) {
                    return false;
                }

                if ($node->getArgs()[0]->value->dim === null) {
                    return false;
                }

                if (! $node->getArgs()[0]->value->dim instanceof Node\Scalar\String_) {
                    return false;
                }

                return in_array($node->getArgs()[0]->value->dim->value, ['request', 'config'], true);
            }

            return $node->getArgs()[0]->value->name === $containerParameterName;
        });

        if (count($nodes) > 0) {
            return array_map([$this, 'dependencyInjectionError'], $nodes);
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/OctaneCompatibilityRule.php [34:133]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier) {
            return [];
        }

        if (! in_array($node->name->name, ['singleton', 'bind'], true)) {
            return [];
        }

        $args = $node->getArgs();

        if (count($args) < 2) {
            return [];
        }

        $calledOnType = $scope->getType($node->var);

        $classNames = $calledOnType->getObjectClassNames();

        if (count($classNames) !== 1) {
            return [];
        }

        if (
            $classNames[0] !== Application::class &&
            ! (new ObjectType(Application::class))->isSuperTypeOf($calledOnType)->yes()
        ) {
            return [];
        }

        if (! $args[1]->value instanceof Node\Expr\Closure) {
            return [];
        }

        /** @var Node\Expr\Closure $closure */
        $closure = $args[1]->value;

        /** @var Node\Param[] $closureParams */
        $closureParams = $closure->getParams();

        // Closure should have at least one parameter. First param
        // is container, second is parameters. If no parameter
        // is given we will check for the usage of `$this->app`
        if (count($closureParams) < 1) {
            return $this->checkForThisAppUsage($scope, $closure);
        }

        // Using `$app` with `bind` is ok, so we return early
        if ($node->name->name === 'bind') {
            return [];
        }

        if (! $closureParams[0]->var instanceof Node\Expr\Variable) {
            return [];
        }

        $containerParameterName = $closureParams[0]->var->name;

        $nodes = (new NodeFinder())->find($closure->getStmts(), static function (Node $node) use ($containerParameterName): bool {
            if (! $node instanceof Node\Expr\New_) {
                return false;
            }

            if (count($node->getArgs()) < 1) {
                return false;
            }

            if (! $node->getArgs()[0]->value instanceof Node\Expr\Variable && ! $node->getArgs()[0]->value instanceof Node\Expr\ArrayDimFetch) {
                return false;
            }

            if ($node->getArgs()[0]->value instanceof Node\Expr\ArrayDimFetch) {
                /** @var Node\Expr\Variable $var */
                $var = $node->getArgs()[0]->value->var;

                if ($var->name !== $containerParameterName) {
                    return false;
                }

                if ($node->getArgs()[0]->value->dim === null) {
                    return false;
                }

                if (! $node->getArgs()[0]->value->dim instanceof Node\Scalar\String_) {
                    return false;
                }

                return in_array($node->getArgs()[0]->value->dim->value, ['request', 'config'], true);
            }

            return $node->getArgs()[0]->value->name === $containerParameterName;
        });

        if (count($nodes) > 0) {
            return array_map([$this, 'dependencyInjectionError'], $nodes);
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



