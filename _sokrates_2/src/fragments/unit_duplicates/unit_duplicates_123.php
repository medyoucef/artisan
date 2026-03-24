vendor/larastan/larastan/src/ReturnTypes/GuardExtension.php [62:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getGuardFromMethodCall(Scope $scope, MethodCall $methodCall): string|null
    {
        if (
            ! ($methodCall->var instanceof StaticCall) &&
            ! ($methodCall->var instanceof MethodCall) &&
            ! ($methodCall->var instanceof FuncCall)
        ) {
            return null;
        }

        if (count($methodCall->var->args) !== 1) {
            return null;
        }

        $guardType       = $scope->getType($methodCall->var->getArgs()[0]->value);
        $constantStrings = $guardType->getConstantStrings();

        if (count($constantStrings) !== 1) {
            return null;
        }

        return $constantStrings[0]->getValue();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/GuardExtension.php [62:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getGuardFromMethodCall(Scope $scope, MethodCall $methodCall): string|null
    {
        if (
            ! ($methodCall->var instanceof StaticCall) &&
            ! ($methodCall->var instanceof MethodCall) &&
            ! ($methodCall->var instanceof FuncCall)
        ) {
            return null;
        }

        if (count($methodCall->var->args) !== 1) {
            return null;
        }

        $guardType       = $scope->getType($methodCall->var->getArgs()[0]->value);
        $constantStrings = $guardType->getConstantStrings();

        if (count($constantStrings) !== 1) {
            return null;
        }

        return $constantStrings[0]->getValue();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



