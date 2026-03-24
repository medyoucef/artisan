vendor/larastan/larastan/src/ReturnTypes/Helpers/AuthExtension.php [31:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) < 1) {
            /** @var ?object $class */
            $class = $this->resolve(Factory::class);

            if ($class === null) {
                return new ObjectType(Factory::class);
            }

            return new ObjectType($class::class);
        }

        return TypeCombinator::intersect(new ObjectType(Guard::class), new ObjectType(StatefulGuard::class));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/AuthExtension.php [31:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        if (count($functionCall->getArgs()) < 1) {
            /** @var ?object $class */
            $class = $this->resolve(Factory::class);

            if ($class === null) {
                return new ObjectType(Factory::class);
            }

            return new ObjectType($class::class);
        }

        return TypeCombinator::intersect(new ObjectType(Guard::class), new ObjectType(StatefulGuard::class));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



