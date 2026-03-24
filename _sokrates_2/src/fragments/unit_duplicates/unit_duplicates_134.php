vendor/larastan/larastan/src/ReturnTypes/Helpers/EnvFunctionDynamicFunctionReturnTypeExtension.php [24:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type|null {
        $argCount = count($functionCall->getArgs());

        if ($argCount < 2) {
            return null;
        }

        $defaultArgType = $scope->getType($functionCall->getArgs()[1]->value);

        return TypeTraverser::map($defaultArgType, static function (Type $type, callable $traverse) use ($scope): Type {
            if ($type->isConstantScalarValue()->no() && $type->isCallable()->yes()) {
                return $type->getCallableParametersAcceptors($scope)[0]->getReturnType();
            }

            return $traverse($type);
        })->generalize(GeneralizePrecision::lessSpecific());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/EnvFunctionDynamicFunctionReturnTypeExtension.php [24:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type|null {
        $argCount = count($functionCall->getArgs());

        if ($argCount < 2) {
            return null;
        }

        $defaultArgType = $scope->getType($functionCall->getArgs()[1]->value);

        return TypeTraverser::map($defaultArgType, static function (Type $type, callable $traverse) use ($scope): Type {
            if ($type->isConstantScalarValue()->no() && $type->isCallable()->yes()) {
                return $type->getCallableParametersAcceptors($scope)[0]->getReturnType();
            }

            return $traverse($type);
        })->generalize(GeneralizePrecision::lessSpecific());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



