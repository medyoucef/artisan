vendor/larastan/larastan/src/Methods/ModelFactoryMethodsClassReflectionExtension.php [71:168]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMethod(
        ClassReflection $classReflection,
        string $methodName,
    ): MethodReflection {
        return new class ($classReflection, $methodName) implements MethodReflection
        {
            public function __construct(private ClassReflection $classReflection, private string $methodName)
            {
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
                $returnType     = new ObjectType($this->classReflection->getName());
                $stateParameter = $this->classReflection->getMethod('state', new OutOfClassScope())->getVariants()[0]->getParameters()[0];
                $countParameter = $this->classReflection->getMethod('count', new OutOfClassScope())->getVariants()[0]->getParameters()[0];

                $variants = [
                    new FunctionVariant(TemplateTypeMap::createEmpty(), null, [], false, $returnType),
                ];

                if (Str::startsWith($this->methodName, 'for')) {
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$stateParameter], false, $returnType);
                } else {
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$countParameter], false, $returnType);
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$stateParameter], false, $returnType);
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$countParameter, $stateParameter], false, $returnType);
                }

                return $variants;
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
                return TrinaryLogic::createMaybe();
            }
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/ModelFactoryMethodsClassReflectionExtension.php [71:168]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMethod(
        ClassReflection $classReflection,
        string $methodName,
    ): MethodReflection {
        return new class ($classReflection, $methodName) implements MethodReflection
        {
            public function __construct(private ClassReflection $classReflection, private string $methodName)
            {
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
                $returnType     = new ObjectType($this->classReflection->getName());
                $stateParameter = $this->classReflection->getMethod('state', new OutOfClassScope())->getVariants()[0]->getParameters()[0];
                $countParameter = $this->classReflection->getMethod('count', new OutOfClassScope())->getVariants()[0]->getParameters()[0];

                $variants = [
                    new FunctionVariant(TemplateTypeMap::createEmpty(), null, [], false, $returnType),
                ];

                if (Str::startsWith($this->methodName, 'for')) {
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$stateParameter], false, $returnType);
                } else {
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$countParameter], false, $returnType);
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$stateParameter], false, $returnType);
                    $variants[] = new FunctionVariant(TemplateTypeMap::createEmpty(), null, [$countParameter, $stateParameter], false, $returnType);
                }

                return $variants;
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
                return TrinaryLogic::createMaybe();
            }
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



