vendor/larastan/larastan/src/ReturnTypes/EloquentBuilderExtension.php [67:106]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $returnType      = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();
        $templateTypeMap = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap();

        $modelType = $templateTypeMap->getType('TModel');
        if ($modelType === null) {
            return null;
        }

        $classNames = $modelType->getObjectClassNames();

        if ($classNames !== [] && $modelType->isObject()->yes() && in_array(Collection::class, $returnType->getReferencedClasses(), true)) {
            $collectionClassName = $this->collectionHelper->determineCollectionClassName($classNames[0]);

            $collectionReflection = $this->reflectionProvider->getClass($collectionClassName);

            if (! $collectionReflection->isGeneric()) {
                // Not generic. So return the type as is
                return new ObjectType($collectionClassName);
            }

            $typeMap = $collectionReflection->getActiveTemplateTypeMap();

            // Specifies key and value
            if ($typeMap->count() === 2) {
                return new GenericObjectType($collectionClassName, [new IntegerType(), $modelType]);
            }

            // Specifies only value
            if (($typeMap->count() === 1) && $typeMap->hasType('TModel')) {
                return new GenericObjectType($collectionClassName, [$modelType]);
            }
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/EloquentBuilderExtension.php [67:106]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $returnType      = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();
        $templateTypeMap = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap();

        $modelType = $templateTypeMap->getType('TModel');
        if ($modelType === null) {
            return null;
        }

        $classNames = $modelType->getObjectClassNames();

        if ($classNames !== [] && $modelType->isObject()->yes() && in_array(Collection::class, $returnType->getReferencedClasses(), true)) {
            $collectionClassName = $this->collectionHelper->determineCollectionClassName($classNames[0]);

            $collectionReflection = $this->reflectionProvider->getClass($collectionClassName);

            if (! $collectionReflection->isGeneric()) {
                // Not generic. So return the type as is
                return new ObjectType($collectionClassName);
            }

            $typeMap = $collectionReflection->getActiveTemplateTypeMap();

            // Specifies key and value
            if ($typeMap->count() === 2) {
                return new GenericObjectType($collectionClassName, [new IntegerType(), $modelType]);
            }

            // Specifies only value
            if (($typeMap->count() === 1) && $typeMap->hasType('TModel')) {
                return new GenericObjectType($collectionClassName, [$modelType]);
            }
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



