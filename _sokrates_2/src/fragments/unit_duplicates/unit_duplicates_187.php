vendor/larastan/larastan/src/ReturnTypes/Helpers/ValidatorExtension.php [27:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) === 0) {
            return new ObjectType(Factory::class);
        }

        return new IntersectionType([
            new ObjectType(Validator::class),
            new ObjectType(\Illuminate\Contracts\Validation\Validator::class),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/ValidatorExtension.php [27:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) === 0) {
            return new ObjectType(Factory::class);
        }

        return new IntersectionType([
            new ObjectType(Validator::class),
            new ObjectType(\Illuminate\Contracts\Validation\Validator::class),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



