vendor/larastan/larastan/src/ReturnTypes/LangGetReturnTypeExtension.php [31:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        return new BenevolentUnionType([
            new ArrayType(new MixedType(), new MixedType()),
            new StringType(),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/LangGetReturnTypeExtension.php [31:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        return new BenevolentUnionType([
            new ArrayType(new MixedType(), new MixedType()),
            new StringType(),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



