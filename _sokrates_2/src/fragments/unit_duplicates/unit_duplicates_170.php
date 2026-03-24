vendor/larastan/larastan/src/ReturnTypes/ModelFactoryDynamicStaticMethodReturnTypeExtension.php [92:110]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getFactoryReflection(
        ClassReflection $modelReflection,
        Scope $scope,
    ): ClassReflection|null {
        $factoryReflection = $this->getFactoryFromNewFactoryMethod($modelReflection, $scope);

        if ($factoryReflection !== null) {
            return $factoryReflection;
        }

        /** @phpstan-ignore argument.type (guaranteed to be model class-string) */
        $factoryClass = Factory::resolveFactoryName($modelReflection->getName());

        if (class_exists($factoryClass)) {
            return $this->reflectionProvider->getClass($factoryClass);
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ModelFactoryDynamicStaticMethodReturnTypeExtension.php [92:110]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getFactoryReflection(
        ClassReflection $modelReflection,
        Scope $scope,
    ): ClassReflection|null {
        $factoryReflection = $this->getFactoryFromNewFactoryMethod($modelReflection, $scope);

        if ($factoryReflection !== null) {
            return $factoryReflection;
        }

        /** @phpstan-ignore argument.type (guaranteed to be model class-string) */
        $factoryClass = Factory::resolveFactoryName($modelReflection->getName());

        if (class_exists($factoryClass)) {
            return $this->reflectionProvider->getClass($factoryClass);
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



