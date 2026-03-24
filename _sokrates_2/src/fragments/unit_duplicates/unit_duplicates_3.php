vendor/larastan/larastan/src/Methods/ModelForwardsCallsExtension.php [72:201]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function findMethod(ClassReflection $classReflection, string $methodName): MethodReflection|null
    {
        if (! $classReflection->is(Model::class)) {
            return null;
        }

        $builderName = $this->builderHelper->determineBuilderName($classReflection->getName());

        if (in_array($methodName, ['increment', 'decrement'], true)) {
            $methodReflection = $classReflection->getNativeMethod($methodName);

            return new class ($classReflection, $methodName, $methodReflection) implements MethodReflection
            {
                private ClassReflection $classReflection;

                private string $methodName;

                private MethodReflection $methodReflection;

                public function __construct(ClassReflection $classReflection, string $methodName, MethodReflection $methodReflection)
                {
                    $this->classReflection  = $classReflection;
                    $this->methodName       = $methodName;
                    $this->methodReflection = $methodReflection;
                }

                public function getDeclaringClass(): ClassReflection
                {
                    return $this->classReflection;
                }

                public function isStatic(): bool
                {
                    return false;
                }

                public function isPrivate(): bool
                {
                    return false;
                }

                public function isPublic(): bool
                {
                    return true;
                }

                public function getDocComment(): string|null
                {
                    return null;
                }

                public function getName(): string
                {
                    return $this->methodName;
                }

                public function getPrototype(): ClassMemberReflection
                {
                    return $this;
                }

                /** @return ParametersAcceptor[] */
                public function getVariants(): array
                {
                    return $this->methodReflection->getVariants();
                }

                public function isDeprecated(): TrinaryLogic
                {
                    return TrinaryLogic::createNo();
                }

                public function getDeprecatedDescription(): string|null
                {
                    return null;
                }

                public function isFinal(): TrinaryLogic
                {
                    return TrinaryLogic::createNo();
                }

                public function isInternal(): TrinaryLogic
                {
                    return TrinaryLogic::createNo();
                }

                public function getThrowType(): Type|null
                {
                    return null;
                }

                public function hasSideEffects(): TrinaryLogic
                {
                    return TrinaryLogic::createYes();
                }
            };
        }

        $builderReflection          = $this->reflectionProvider->getClass($builderName)->withTypes([new ObjectType($classReflection->getName())]);
        $genericBuilderAndModelType = new GenericObjectType($builderName, [new ObjectType($classReflection->getName())]);

        if ($builderReflection->hasNativeMethod($methodName)) {
            $reflection = $builderReflection->getNativeMethod($methodName);

            $parametersAcceptor = $this->transformStaticParameters($reflection, $genericBuilderAndModelType);

            $returnType = TypeTraverser::map($parametersAcceptor->getReturnType(), static function (Type $type, callable $traverse) use ($genericBuilderAndModelType) {
                if ($type instanceof TypeWithClassName && $type->getClassName() === Builder::class) {
                    return $genericBuilderAndModelType;
                }

                return $traverse($type);
            });

            return new EloquentBuilderMethodReflection(
                $methodName,
                $builderReflection,
                $parametersAcceptor->getParameters(),
                $returnType,
                $parametersAcceptor->isVariadic(),
            );
        }

        if ($this->eloquentBuilderForwardsCallsExtension->hasMethod($builderReflection, $methodName)) {
            return $this->eloquentBuilderForwardsCallsExtension->getMethod($builderReflection, $methodName);
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/ModelForwardsCallsExtension.php [72:201]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function findMethod(ClassReflection $classReflection, string $methodName): MethodReflection|null
    {
        if (! $classReflection->is(Model::class)) {
            return null;
        }

        $builderName = $this->builderHelper->determineBuilderName($classReflection->getName());

        if (in_array($methodName, ['increment', 'decrement'], true)) {
            $methodReflection = $classReflection->getNativeMethod($methodName);

            return new class ($classReflection, $methodName, $methodReflection) implements MethodReflection
            {
                private ClassReflection $classReflection;

                private string $methodName;

                private MethodReflection $methodReflection;

                public function __construct(ClassReflection $classReflection, string $methodName, MethodReflection $methodReflection)
                {
                    $this->classReflection  = $classReflection;
                    $this->methodName       = $methodName;
                    $this->methodReflection = $methodReflection;
                }

                public function getDeclaringClass(): ClassReflection
                {
                    return $this->classReflection;
                }

                public function isStatic(): bool
                {
                    return false;
                }

                public function isPrivate(): bool
                {
                    return false;
                }

                public function isPublic(): bool
                {
                    return true;
                }

                public function getDocComment(): string|null
                {
                    return null;
                }

                public function getName(): string
                {
                    return $this->methodName;
                }

                public function getPrototype(): ClassMemberReflection
                {
                    return $this;
                }

                /** @return ParametersAcceptor[] */
                public function getVariants(): array
                {
                    return $this->methodReflection->getVariants();
                }

                public function isDeprecated(): TrinaryLogic
                {
                    return TrinaryLogic::createNo();
                }

                public function getDeprecatedDescription(): string|null
                {
                    return null;
                }

                public function isFinal(): TrinaryLogic
                {
                    return TrinaryLogic::createNo();
                }

                public function isInternal(): TrinaryLogic
                {
                    return TrinaryLogic::createNo();
                }

                public function getThrowType(): Type|null
                {
                    return null;
                }

                public function hasSideEffects(): TrinaryLogic
                {
                    return TrinaryLogic::createYes();
                }
            };
        }

        $builderReflection          = $this->reflectionProvider->getClass($builderName)->withTypes([new ObjectType($classReflection->getName())]);
        $genericBuilderAndModelType = new GenericObjectType($builderName, [new ObjectType($classReflection->getName())]);

        if ($builderReflection->hasNativeMethod($methodName)) {
            $reflection = $builderReflection->getNativeMethod($methodName);

            $parametersAcceptor = $this->transformStaticParameters($reflection, $genericBuilderAndModelType);

            $returnType = TypeTraverser::map($parametersAcceptor->getReturnType(), static function (Type $type, callable $traverse) use ($genericBuilderAndModelType) {
                if ($type instanceof TypeWithClassName && $type->getClassName() === Builder::class) {
                    return $genericBuilderAndModelType;
                }

                return $traverse($type);
            });

            return new EloquentBuilderMethodReflection(
                $methodName,
                $builderReflection,
                $parametersAcceptor->getParameters(),
                $returnType,
                $parametersAcceptor->isVariadic(),
            );
        }

        if ($this->eloquentBuilderForwardsCallsExtension->hasMethod($builderReflection, $methodName)) {
            return $this->eloquentBuilderForwardsCallsExtension->getMethod($builderReflection, $methodName);
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



