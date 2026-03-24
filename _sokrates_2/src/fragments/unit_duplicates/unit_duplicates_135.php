vendor/larastan/larastan/src/ReturnTypes/Helpers/ValueExtension.php [25:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) === 0) {
            return new NeverType();
        }

        $arg     = $functionCall->getArgs()[0]->value;
        $argType = $scope->getType($arg);

        return TypeTraverser::map($argType, static function (Type $type, callable $traverse) use ($scope): Type {
            if ($type->isCallable()->yes()) {
                return $type->getCallableParametersAcceptors($scope)[0]->getReturnType();
            }

            return $traverse($type);
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/ValueExtension.php [25:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) === 0) {
            return new NeverType();
        }

        $arg     = $functionCall->getArgs()[0]->value;
        $argType = $scope->getType($arg);

        return TypeTraverser::map($argType, static function (Type $type, callable $traverse) use ($scope): Type {
            if ($type->isCallable()->yes()) {
                return $type->getCallableParametersAcceptors($scope)[0]->getReturnType();
            }

            return $traverse($type);
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



