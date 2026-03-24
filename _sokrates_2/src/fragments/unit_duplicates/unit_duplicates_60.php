vendor/larastan/larastan/src/ReturnTypes/CollectionWhereNotNullDynamicReturnTypeExtension.php [36:71]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType = $scope->getType($methodCall->var);

        if ($calledOnType->getObjectClassNames() === []) {
            return null;
        }

        $keyType   = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TKey');
        $valueType = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TValue') ??
            $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TModel');

        if ($keyType === null || $valueType === null) {
            return null;
        }

        $nonFalseyTypes = TypeCombinator::removeNull($valueType);

        if (! $this->argumentIsString($methodCall, $scope)) {
            return new GenericObjectType($calledOnType->getObjectClassNames()[0], [$keyType, $nonFalseyTypes]);
        }

        $scalarTypes = new UnionType([
            new StringType(),
            new IntegerType(),
            new FloatType(),
            new BooleanType(),
        ]);

        $nonFalseyTypes = TypeCombinator::remove($nonFalseyTypes, $scalarTypes);

        return new GenericObjectType($calledOnType->getObjectClassNames()[0], [$keyType, $nonFalseyTypes]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/CollectionWhereNotNullDynamicReturnTypeExtension.php [36:71]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        $calledOnType = $scope->getType($methodCall->var);

        if ($calledOnType->getObjectClassNames() === []) {
            return null;
        }

        $keyType   = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TKey');
        $valueType = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TValue') ??
            $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TModel');

        if ($keyType === null || $valueType === null) {
            return null;
        }

        $nonFalseyTypes = TypeCombinator::removeNull($valueType);

        if (! $this->argumentIsString($methodCall, $scope)) {
            return new GenericObjectType($calledOnType->getObjectClassNames()[0], [$keyType, $nonFalseyTypes]);
        }

        $scalarTypes = new UnionType([
            new StringType(),
            new IntegerType(),
            new FloatType(),
            new BooleanType(),
        ]);

        $nonFalseyTypes = TypeCombinator::remove($nonFalseyTypes, $scalarTypes);

        return new GenericObjectType($calledOnType->getObjectClassNames()[0], [$keyType, $nonFalseyTypes]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



