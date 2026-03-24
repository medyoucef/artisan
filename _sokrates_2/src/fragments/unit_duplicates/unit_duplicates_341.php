vendor/larastan/larastan/src/ReturnTypes/CollectionWhereNotNullDynamicReturnTypeExtension.php [73:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function argumentIsString(MethodCall $methodCall, Scope $scope): bool
    {
        if (count($methodCall->getArgs()) === 0) {
            return false;
        }

        $argType = $scope->getType($methodCall->getArgs()[0]->value);

        return (new NullType())->isSuperTypeOf($argType)->no();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/CollectionWhereNotNullDynamicReturnTypeExtension.php [73:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function argumentIsString(MethodCall $methodCall, Scope $scope): bool
    {
        if (count($methodCall->getArgs()) === 0) {
            return false;
        }

        $argType = $scope->getType($methodCall->getArgs()[0]->value);

        return (new NullType())->isSuperTypeOf($argType)->no();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



