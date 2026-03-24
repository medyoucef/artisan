vendor/larastan/larastan/src/ReturnTypes/RequestUserExtension.php [66:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getGuardFromMethodCall(Scope $scope, MethodCall $methodCall): string|null
    {
        $args = $methodCall->getArgs();

        if (count($args) !== 1) {
            return null;
        }

        $guardType       = $scope->getType($args[0]->value);
        $constantStrings = $guardType->getConstantStrings();

        if (count($constantStrings) !== 1) {
            return null;
        }

        return $constantStrings[0]->getValue();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/RequestUserExtension.php [66:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getGuardFromMethodCall(Scope $scope, MethodCall $methodCall): string|null
    {
        $args = $methodCall->getArgs();

        if (count($args) !== 1) {
            return null;
        }

        $guardType       = $scope->getType($args[0]->value);
        $constantStrings = $guardType->getConstantStrings();

        if (count($constantStrings) !== 1) {
            return null;
        }

        return $constantStrings[0]->getValue();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



