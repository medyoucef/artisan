vendor/larastan/larastan/src/ReturnTypes/FormRequestSafeDynamicMethodReturnTypeExtension.php [32:60]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $args = $methodCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $argType = $scope->getType($args[0]->value);

        if (! $argType->isConstantArray()->yes()) {
            return null;
        }

        assert($argType instanceof ConstantArrayType); // @phpstan-ignore-line

        $builder = ConstantArrayTypeBuilder::createEmpty();

        foreach ($argType->getValueTypes() as $keyType) {
            foreach ($keyType->getConstantStrings() as $constantString) {
                $builder->setOffsetValueType($constantString, new MixedType());
            }
        }

        return $builder->getArray();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/FormRequestSafeDynamicMethodReturnTypeExtension.php [32:60]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $args = $methodCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $argType = $scope->getType($args[0]->value);

        if (! $argType->isConstantArray()->yes()) {
            return null;
        }

        assert($argType instanceof ConstantArrayType); // @phpstan-ignore-line

        $builder = ConstantArrayTypeBuilder::createEmpty();

        foreach ($argType->getValueTypes() as $keyType) {
            foreach ($keyType->getConstantStrings() as $constantString) {
                $builder->setOffsetValueType($constantString, new MixedType());
            }
        }

        return $builder->getArray();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



