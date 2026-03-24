vendor/larastan/larastan/src/ReturnTypes/ModelDynamicStaticMethodReturnTypeExtension.php [63:135]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type|null {
        $method = $methodReflection->getDeclaringClass()
            ->getMethod($methodReflection->getName(), $scope);

        $returnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $method->getVariants())->getReturnType();

        if (count(array_intersect([EloquentBuilder::class, QueryBuilder::class, Collection::class], $returnType->getReferencedClasses())) === 0) {
            return null;
        }

        if (count(array_intersect([EloquentBuilder::class], $returnType->getReferencedClasses())) > 0) {
            if ($methodCall->class instanceof Name) {
                $type = $scope->resolveTypeByName($methodCall->class);

                return new GenericObjectType(
                    $this->builderHelper->determineBuilderName($scope->resolveName($methodCall->class)),
                    [$type instanceof ThisType ? $type->getStaticObjectType() : $type],
                );
            }

            $type = $scope->getType($methodCall->class);

            if ($type->isClassString()->yes()) {
                $type = $type->getClassStringObjectType();
            }

            $classNames = $type->getObjectClassNames();

            $types = [];

            foreach ($classNames as $className) {
                if (! $this->reflectionProvider->hasClass($className)) {
                    continue;
                }

                try {
                    $types[] = new GenericObjectType(
                        $this->builderHelper->determineBuilderName($className),
                        [new ObjectType($className)],
                    );
                } catch (MissingMethodFromReflectionException) {
                }
            }

            if ($types !== []) {
                return TypeCombinator::union(...$types);
            }
        }

        if (in_array(Collection::class, $returnType->getReferencedClasses(), true)) {
            if ($methodCall->class instanceof Name) {
                $modelNames = [$scope->resolveName($methodCall->class)];
            } else {
                $modelNames = $scope->getType($methodCall->class)->getObjectTypeOrClassStringObjectType()->getObjectClassNames();
            }

            $types = [];

            foreach ($modelNames as $modelName) {
                $types[] = $this->collectionHelper->determineCollectionClass($modelName);
            }

            if ($types !== []) {
                return TypeCombinator::union(...$types);
            }
        }

        return $returnType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ModelDynamicStaticMethodReturnTypeExtension.php [63:135]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type|null {
        $method = $methodReflection->getDeclaringClass()
            ->getMethod($methodReflection->getName(), $scope);

        $returnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $method->getVariants())->getReturnType();

        if (count(array_intersect([EloquentBuilder::class, QueryBuilder::class, Collection::class], $returnType->getReferencedClasses())) === 0) {
            return null;
        }

        if (count(array_intersect([EloquentBuilder::class], $returnType->getReferencedClasses())) > 0) {
            if ($methodCall->class instanceof Name) {
                $type = $scope->resolveTypeByName($methodCall->class);

                return new GenericObjectType(
                    $this->builderHelper->determineBuilderName($scope->resolveName($methodCall->class)),
                    [$type instanceof ThisType ? $type->getStaticObjectType() : $type],
                );
            }

            $type = $scope->getType($methodCall->class);

            if ($type->isClassString()->yes()) {
                $type = $type->getClassStringObjectType();
            }

            $classNames = $type->getObjectClassNames();

            $types = [];

            foreach ($classNames as $className) {
                if (! $this->reflectionProvider->hasClass($className)) {
                    continue;
                }

                try {
                    $types[] = new GenericObjectType(
                        $this->builderHelper->determineBuilderName($className),
                        [new ObjectType($className)],
                    );
                } catch (MissingMethodFromReflectionException) {
                }
            }

            if ($types !== []) {
                return TypeCombinator::union(...$types);
            }
        }

        if (in_array(Collection::class, $returnType->getReferencedClasses(), true)) {
            if ($methodCall->class instanceof Name) {
                $modelNames = [$scope->resolveName($methodCall->class)];
            } else {
                $modelNames = $scope->getType($methodCall->class)->getObjectTypeOrClassStringObjectType()->getObjectClassNames();
            }

            $types = [];

            foreach ($modelNames as $modelName) {
                $types[] = $this->collectionHelper->determineCollectionClass($modelName);
            }

            if ($types !== []) {
                return TypeCombinator::union(...$types);
            }
        }

        return $returnType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



