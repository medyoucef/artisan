vendor/larastan/larastan/src/ReturnTypes/HigherOrderTapProxyExtension.php [31:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $type = $scope->getType($methodCall->var);

        if ($type instanceof GenericObjectType) { // @phpstan-ignore-line
            $types = $type->getTypes();

            if (count($types) === 1 && $types[0]->getObjectClassNames() !== []) {
                return $types[0];
            }
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/HigherOrderTapProxyExtension.php [31:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $type = $scope->getType($methodCall->var);

        if ($type instanceof GenericObjectType) { // @phpstan-ignore-line
            $types = $type->getTypes();

            if (count($types) === 1 && $types[0]->getObjectClassNames() !== []) {
                return $types[0];
            }
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



