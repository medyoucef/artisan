vendor/larastan/larastan/src/Methods/RelationForwardsCallsExtension.php [61:106]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function findMethod(ClassReflection $classReflection, string $methodName): MethodReflection|null
    {
        if (! $classReflection->is(Relation::class)) {
            return null;
        }

        $relatedModel = $classReflection->getActiveTemplateTypeMap()->getType('TRelatedModel');

        if ($relatedModel === null) {
            return null;
        }

        if ($relatedModel->getObjectClassReflections() !== []) {
            $modelReflection = $relatedModel->getObjectClassReflections()[0];
        } else {
            $modelReflection = $this->reflectionProvider->getClass(Model::class);
        }

        if (! $modelReflection->is(Model::class)) {
            return null;
        }

        $builderName = $this->builderHelper->determineBuilderName($modelReflection->getName());
        $builderType = new GenericObjectType($builderName, [new ObjectType($modelReflection->getName())]);

        if (! $builderType->hasMethod($methodName)->yes()) {
            return null;
        }

        $reflection = $builderType->getMethod($methodName, new OutOfClassScope());

        $parametersAcceptor = $reflection->getVariants()[0];
        $returnType         = $parametersAcceptor->getReturnType();

        if ((new ObjectType(Builder::class))->isSuperTypeOf($returnType)->yes()) {
            $returnType = new ThisType($classReflection);
        }

        return new EloquentBuilderMethodReflection(
            $methodName,
            $reflection->getDeclaringClass(),
            $parametersAcceptor->getParameters(),
            $returnType,
            $parametersAcceptor->isVariadic(),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/RelationForwardsCallsExtension.php [61:106]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function findMethod(ClassReflection $classReflection, string $methodName): MethodReflection|null
    {
        if (! $classReflection->is(Relation::class)) {
            return null;
        }

        $relatedModel = $classReflection->getActiveTemplateTypeMap()->getType('TRelatedModel');

        if ($relatedModel === null) {
            return null;
        }

        if ($relatedModel->getObjectClassReflections() !== []) {
            $modelReflection = $relatedModel->getObjectClassReflections()[0];
        } else {
            $modelReflection = $this->reflectionProvider->getClass(Model::class);
        }

        if (! $modelReflection->is(Model::class)) {
            return null;
        }

        $builderName = $this->builderHelper->determineBuilderName($modelReflection->getName());
        $builderType = new GenericObjectType($builderName, [new ObjectType($modelReflection->getName())]);

        if (! $builderType->hasMethod($methodName)->yes()) {
            return null;
        }

        $reflection = $builderType->getMethod($methodName, new OutOfClassScope());

        $parametersAcceptor = $reflection->getVariants()[0];
        $returnType         = $parametersAcceptor->getReturnType();

        if ((new ObjectType(Builder::class))->isSuperTypeOf($returnType)->yes()) {
            $returnType = new ThisType($classReflection);
        }

        return new EloquentBuilderMethodReflection(
            $methodName,
            $reflection->getDeclaringClass(),
            $parametersAcceptor->getParameters(),
            $returnType,
            $parametersAcceptor->isVariadic(),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



