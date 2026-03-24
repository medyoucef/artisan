vendor/larastan/larastan/src/ReturnTypes/FactoryDynamicMethodReturnTypeExtension.php [38:83]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType       = $scope->getType($methodCall->var);
        $originalReturnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if (! $calledOnType instanceof ModelFactoryType) {
            return null;
        }

        if (in_array($methodReflection->getName(), ['count', 'times'], true)) {
            if ($methodCall->getArgs() === []) {
                return new ErrorType();
            }

            $argType = $scope->getType($methodCall->getArgs()[0]->value);

            if ((new IntegerType())->isSuperTypeOf($argType)->yes()) {
                return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createNo());
            }

            if ((new NullType())->isSuperTypeOf($argType)->yes()) {
                return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createYes());
            }

            return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createMaybe());
        }

        if (in_array($methodReflection->getName(), ['create', 'createQuietly', 'make'], true)) {
            if ($calledOnType->isSingleModel()->yes()) {
                return TypeCombinator::remove($originalReturnType, new ObjectType(Collection::class));
            }

            if ($calledOnType->isSingleModel()->no()) {
                return TypeCombinator::remove($originalReturnType, new ObjectType(Model::class));
            }
        }

        if (! $originalReturnType->isSuperTypeOf($calledOnType)->yes()) {
            return null;
        }

        return $calledOnType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/FactoryDynamicMethodReturnTypeExtension.php [38:83]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType       = $scope->getType($methodCall->var);
        $originalReturnType = ParametersAcceptorSelector::selectFromArgs($scope, $methodCall->getArgs(), $methodReflection->getVariants())->getReturnType();

        if (! $calledOnType instanceof ModelFactoryType) {
            return null;
        }

        if (in_array($methodReflection->getName(), ['count', 'times'], true)) {
            if ($methodCall->getArgs() === []) {
                return new ErrorType();
            }

            $argType = $scope->getType($methodCall->getArgs()[0]->value);

            if ((new IntegerType())->isSuperTypeOf($argType)->yes()) {
                return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createNo());
            }

            if ((new NullType())->isSuperTypeOf($argType)->yes()) {
                return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createYes());
            }

            return new ModelFactoryType($calledOnType->getClassName(), null, null, TrinaryLogic::createMaybe());
        }

        if (in_array($methodReflection->getName(), ['create', 'createQuietly', 'make'], true)) {
            if ($calledOnType->isSingleModel()->yes()) {
                return TypeCombinator::remove($originalReturnType, new ObjectType(Collection::class));
            }

            if ($calledOnType->isSingleModel()->no()) {
                return TypeCombinator::remove($originalReturnType, new ObjectType(Model::class));
            }
        }

        if (! $originalReturnType->isSuperTypeOf($calledOnType)->yes()) {
            return null;
        }

        return $calledOnType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



