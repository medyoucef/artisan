vendor/larastan/larastan/src/ReturnTypes/Helpers/ConfigFunctionDynamicFunctionReturnTypeExtension.php [32:46]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type|null {
        $args = $functionCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);

        return $returnTypes === [] ? null : TypeCombinator::union(...$returnTypes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/ConfigFunctionDynamicFunctionReturnTypeExtension.php [32:46]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type|null {
        $args = $functionCall->getArgs();

        if (count($args) === 0) {
            return null;
        }

        $returnTypes = $this->configHelper->getReturnTypes($args, $scope);

        return $returnTypes === [] ? null : TypeCombinator::union(...$returnTypes);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



