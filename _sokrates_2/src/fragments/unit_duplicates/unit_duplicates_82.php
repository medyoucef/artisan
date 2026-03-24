vendor/larastan/larastan/src/ReturnTypes/RequestUserExtension.php [37:64]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        if ($methodReflection->getDeclaringClass()->getName() !== Request::class) {
            return null;
        }

        $config     = $this->getContainer()->get('config');
        $authModels = [];

        if ($config !== null) {
            $guard      = $this->getGuardFromMethodCall($scope, $methodCall);
            $authModels = $this->getAuthModels($config, $guard);
        }

        if (count($authModels) === 0) {
            return null;
        }

        return TypeCombinator::addNull(
            TypeCombinator::union(...array_map(
                static fn (string $authModel): Type => new ObjectType($authModel),
                $authModels,
            )),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/RequestUserExtension.php [37:64]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type|null {
        if ($methodReflection->getDeclaringClass()->getName() !== Request::class) {
            return null;
        }

        $config     = $this->getContainer()->get('config');
        $authModels = [];

        if ($config !== null) {
            $guard      = $this->getGuardFromMethodCall($scope, $methodCall);
            $authModels = $this->getAuthModels($config, $guard);
        }

        if (count($authModels) === 0) {
            return null;
        }

        return TypeCombinator::addNull(
            TypeCombinator::union(...array_map(
                static fn (string $authModel): Type => new ObjectType($authModel),
                $authModels,
            )),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



