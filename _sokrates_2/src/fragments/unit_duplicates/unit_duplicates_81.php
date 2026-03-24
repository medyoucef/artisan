vendor/larastan/larastan/src/ReturnTypes/ModelFactoryDynamicStaticMethodReturnTypeExtension.php [112:139]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getFactoryFromNewFactoryMethod(
        ClassReflection $modelReflection,
        Scope $scope,
    ): ClassReflection|null {
        if (! $modelReflection->hasMethod('newFactory')) {
            return null;
        }

        $factoryReflections = $modelReflection->getMethod('newFactory', $scope)
            ->getVariants()[0]
            ->getReturnType()
            ->getObjectClassReflections();

        if (count($factoryReflections) !== 1) {
            return null;
        }

        foreach ($factoryReflections as $factoryReflection) {
            if (
                $factoryReflection->is(Factory::class)
                && ! $factoryReflection->isAbstract()
            ) {
                return $factoryReflection;
            }
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ModelFactoryDynamicStaticMethodReturnTypeExtension.php [112:139]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getFactoryFromNewFactoryMethod(
        ClassReflection $modelReflection,
        Scope $scope,
    ): ClassReflection|null {
        if (! $modelReflection->hasMethod('newFactory')) {
            return null;
        }

        $factoryReflections = $modelReflection->getMethod('newFactory', $scope)
            ->getVariants()[0]
            ->getReturnType()
            ->getObjectClassReflections();

        if (count($factoryReflections) !== 1) {
            return null;
        }

        foreach ($factoryReflections as $factoryReflection) {
            if (
                $factoryReflection->is(Factory::class)
                && ! $factoryReflection->isAbstract()
            ) {
                return $factoryReflection;
            }
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



