vendor/larastan/larastan/src/Reflection/DynamicWhereMethodReflection.php [59:103]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getVariants(): array
    {
        return [
            new FunctionVariant(
                TemplateTypeMap::createEmpty(),
                TemplateTypeMap::createEmpty(),
                [
                    new class implements ParameterReflection
                    {
                        public function getName(): string
                        {
                            return 'dynamic-with';
                        }

                        public function isOptional(): bool
                        {
                            return false;
                        }

                        public function getType(): Type
                        {
                            return new MixedType();
                        }

                        public function passedByReference(): PassedByReference
                        {
                            return Reflection\PassedByReference::createNo();
                        }

                        public function isVariadic(): bool
                        {
                            return false;
                        }

                        public function getDefaultValue(): Type|null
                        {
                            return null;
                        }
                    },
                ],
                false,
                new ObjectType($this->classReflection->getName()),
            ),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Reflection/DynamicWhereMethodReflection.php [59:103]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getVariants(): array
    {
        return [
            new FunctionVariant(
                TemplateTypeMap::createEmpty(),
                TemplateTypeMap::createEmpty(),
                [
                    new class implements ParameterReflection
                    {
                        public function getName(): string
                        {
                            return 'dynamic-with';
                        }

                        public function isOptional(): bool
                        {
                            return false;
                        }

                        public function getType(): Type
                        {
                            return new MixedType();
                        }

                        public function passedByReference(): PassedByReference
                        {
                            return Reflection\PassedByReference::createNo();
                        }

                        public function isVariadic(): bool
                        {
                            return false;
                        }

                        public function getDefaultValue(): Type|null
                        {
                            return null;
                        }
                    },
                ],
                false,
                new ObjectType($this->classReflection->getName()),
            ),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



