vendor/larastan/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [206:258]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function firstArgIsDatabaseColumn(Node\Expr\StaticCall|MethodCall $node, Scope $scope): bool
    {
        /** @var Arg[] $args */
        $args = $node->args;
        if (count($args) === 0 || ! ($args[0]->value instanceof Node\Scalar\String_)) {
            return false;
        }

        if ($node instanceof Node\Expr\StaticCall) {
            /** @var Node\Name $class */
            $class = $node->class;

            $modelReflection = $this->reflectionProvider->getClass($class->toCodeString());

            /** @var String_ $firstArg */
            $firstArg = $args[0]->value;

            return $this->propertyExtension->hasProperty($modelReflection, $firstArg->value);
        }

        $iterableType = $scope->getType($node->var)->getIterableValueType();

        if ((new ObjectType(stdClass::class))->isSuperTypeOf($iterableType)->yes()) {
            $previousCall = $node->var;
            if ($previousCall instanceof MethodCall) {
                $queryBuilderType = $scope->getType($previousCall->var);
                if ((new ObjectType(QueryBuilder::class))->isSuperTypeOf($queryBuilderType)->yes()) {
                    // We encountered a DB query such as DB::table(..)->get()->max('id')
                    // We assume max('id') could have been retrieved without calling get().
                    return true;
                }
            }

            return false;
        }

        if ((new ObjectType(Model::class))->isSuperTypeOf($iterableType)->yes()) {
            $iterableClassNames = $iterableType->getObjectClassNames();

            if (count($iterableClassNames) === 0) {
                return false;
            }

            $modelReflection = $this->reflectionProvider->getClass($iterableClassNames[0]);

            /** @var String_ $firstArg */
            $firstArg = $args[0]->value;

            return $this->propertyExtension->hasProperty($modelReflection, $firstArg->value);
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [206:258]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function firstArgIsDatabaseColumn(Node\Expr\StaticCall|MethodCall $node, Scope $scope): bool
    {
        /** @var Arg[] $args */
        $args = $node->args;
        if (count($args) === 0 || ! ($args[0]->value instanceof Node\Scalar\String_)) {
            return false;
        }

        if ($node instanceof Node\Expr\StaticCall) {
            /** @var Node\Name $class */
            $class = $node->class;

            $modelReflection = $this->reflectionProvider->getClass($class->toCodeString());

            /** @var String_ $firstArg */
            $firstArg = $args[0]->value;

            return $this->propertyExtension->hasProperty($modelReflection, $firstArg->value);
        }

        $iterableType = $scope->getType($node->var)->getIterableValueType();

        if ((new ObjectType(stdClass::class))->isSuperTypeOf($iterableType)->yes()) {
            $previousCall = $node->var;
            if ($previousCall instanceof MethodCall) {
                $queryBuilderType = $scope->getType($previousCall->var);
                if ((new ObjectType(QueryBuilder::class))->isSuperTypeOf($queryBuilderType)->yes()) {
                    // We encountered a DB query such as DB::table(..)->get()->max('id')
                    // We assume max('id') could have been retrieved without calling get().
                    return true;
                }
            }

            return false;
        }

        if ((new ObjectType(Model::class))->isSuperTypeOf($iterableType)->yes()) {
            $iterableClassNames = $iterableType->getObjectClassNames();

            if (count($iterableClassNames) === 0) {
                return false;
            }

            $modelReflection = $this->reflectionProvider->getClass($iterableClassNames[0]);

            /** @var String_ $firstArg */
            $firstArg = $args[0]->value;

            return $this->propertyExtension->hasProperty($modelReflection, $firstArg->value);
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



