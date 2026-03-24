vendor/larastan/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [265:285]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function callIsQuery(Node\Expr $call, Scope $scope): bool
    {
        if ($call instanceof MethodCall) {
            $calledOn = $scope->getType($call->var);

            return $this->isBuilder($calledOn);
        }

        if ($call instanceof Node\Expr\StaticCall) {
            $class = $call->class;
            if ($class instanceof Node\Name) {
                $modelClassName = $class->toCodeString();

                return (new ObjectType(Model::class))->isSuperTypeOf(new ObjectType($modelClassName))->yes()
                    && $call->name instanceof Identifier
                    && in_array($call->name->toLowerString(), ['get', 'all', 'pluck'], true);
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [265:285]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function callIsQuery(Node\Expr $call, Scope $scope): bool
    {
        if ($call instanceof MethodCall) {
            $calledOn = $scope->getType($call->var);

            return $this->isBuilder($calledOn);
        }

        if ($call instanceof Node\Expr\StaticCall) {
            $class = $call->class;
            if ($class instanceof Node\Name) {
                $modelClassName = $class->toCodeString();

                return (new ObjectType(Model::class))->isSuperTypeOf(new ObjectType($modelClassName))->yes()
                    && $call->name instanceof Identifier
                    && in_array($call->name->toLowerString(), ['get', 'all', 'pluck'], true);
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



