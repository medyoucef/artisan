vendor/larastan/larastan/src/ReturnTypes/DoubleUnderscoreHelperReturnTypeExtension.php [28:41]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->args) === 0) {
            return new NullType();
        }

        return new BenevolentUnionType([
            new ArrayType(new MixedType(), new MixedType()),
            new StringType(),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/DoubleUnderscoreHelperReturnTypeExtension.php [28:41]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->args) === 0) {
            return new NullType();
        }

        return new BenevolentUnionType([
            new ArrayType(new MixedType(), new MixedType()),
            new StringType(),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



