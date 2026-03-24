vendor/larastan/larastan/src/Types/AbortIfFunctionTypeSpecifyingExtension.php [38:51]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function specifyTypes(
        FunctionReflection $functionReflection,
        FuncCall $node,
        Scope $scope,
        TypeSpecifierContext $context,
    ): SpecifiedTypes {
        if (! str_starts_with($this->methodName, 'throw') && count($node->args) < 2) {
            return new SpecifiedTypes();
        }

        $context = $this->negate === false ? TypeSpecifierContext::createFalsey() : TypeSpecifierContext::createTruthy();

        return $this->typeSpecifier->specifyTypesInCondition($scope, $node->getArgs()[0]->value, $context);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/AbortIfFunctionTypeSpecifyingExtension.php [38:51]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function specifyTypes(
        FunctionReflection $functionReflection,
        FuncCall $node,
        Scope $scope,
        TypeSpecifierContext $context,
    ): SpecifiedTypes {
        if (! str_starts_with($this->methodName, 'throw') && count($node->args) < 2) {
            return new SpecifiedTypes();
        }

        $context = $this->negate === false ? TypeSpecifierContext::createFalsey() : TypeSpecifierContext::createTruthy();

        return $this->typeSpecifier->specifyTypesInCondition($scope, $node->getArgs()[0]->value, $context);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



