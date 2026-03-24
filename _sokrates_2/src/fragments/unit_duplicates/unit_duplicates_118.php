vendor/larastan/larastan/src/Internal/ConfigHelper.php [33:57]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getReturnTypes(array $args, Scope $scope): array
    {
        $firstArgType = $scope->getType($args[0]->value);

        $defaultArgType = null;

        if (count($args) > 1) {
            $defaultArgType = $scope->getType($args[1]->value);
        }

        $constantStrings = $firstArgType->getConstantStrings();
        $returnTypes     = [];

        if ($defaultArgType !== null) {
            $returnTypes[] = TypeTraverser::map($defaultArgType, static function (Type $type, callable $traverse) use ($scope): Type {
                if ($type->isConstantScalarValue()->no() && $type->isCallable()->yes()) {
                    return $type->getCallableParametersAcceptors($scope)[0]->getReturnType();
                }

                return $traverse($type);
            })->generalize(GeneralizePrecision::lessSpecific());
        }

        return $returnTypes + $this->configParser->getTypes($constantStrings, $scope);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConfigHelper.php [33:57]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getReturnTypes(array $args, Scope $scope): array
    {
        $firstArgType = $scope->getType($args[0]->value);

        $defaultArgType = null;

        if (count($args) > 1) {
            $defaultArgType = $scope->getType($args[1]->value);
        }

        $constantStrings = $firstArgType->getConstantStrings();
        $returnTypes     = [];

        if ($defaultArgType !== null) {
            $returnTypes[] = TypeTraverser::map($defaultArgType, static function (Type $type, callable $traverse) use ($scope): Type {
                if ($type->isConstantScalarValue()->no() && $type->isCallable()->yes()) {
                    return $type->getCallableParametersAcceptors($scope)[0]->getReturnType();
                }

                return $traverse($type);
            })->generalize(GeneralizePrecision::lessSpecific());
        }

        return $returnTypes + $this->configParser->getTypes($constantStrings, $scope);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



