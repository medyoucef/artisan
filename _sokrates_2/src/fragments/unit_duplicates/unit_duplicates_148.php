vendor/larastan/larastan/src/ReturnTypes/Helpers/TapExtension.php [26:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) === 1) {
            $type = $scope->getType($functionCall->getArgs()[0]->value);

            return new GenericObjectType(HigherOrderTapProxy::class, [
                $type instanceof ThisType ? $type->getStaticObjectType() : $type,
            ]);
        }

        if (count($functionCall->getArgs()) === 2) {
            return $scope->getType($functionCall->getArgs()[0]->value);
        }

        return new NeverType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/TapExtension.php [26:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) === 1) {
            $type = $scope->getType($functionCall->getArgs()[0]->value);

            return new GenericObjectType(HigherOrderTapProxy::class, [
                $type instanceof ThisType ? $type->getStaticObjectType() : $type,
            ]);
        }

        if (count($functionCall->getArgs()) === 2) {
            return $scope->getType($functionCall->getArgs()[0]->value);
        }

        return new NeverType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



