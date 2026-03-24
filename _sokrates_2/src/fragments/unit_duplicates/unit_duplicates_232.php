vendor/larastan/larastan/src/ReturnTypes/RelationCollectionExtension.php [53:65]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $returnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if (! in_array(Collection::class, $returnType->getReferencedClasses(), true)) {
            return null;
        }

        return $this->collectionHelper->replaceCollectionsInType($returnType);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/RelationCollectionExtension.php [53:65]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $returnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if (! in_array(Collection::class, $returnType->getReferencedClasses(), true)) {
            return null;
        }

        return $this->collectionHelper->replaceCollectionsInType($returnType);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



