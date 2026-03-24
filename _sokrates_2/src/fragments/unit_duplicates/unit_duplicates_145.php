vendor/larastan/larastan/src/Methods/ModelForwardsCallsExtension.php [203:219]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function transformStaticParameters(MethodReflection $method, GenericObjectType $builder): ParametersAcceptor
    {
        $acceptor = $method->getVariants()[0];

        return new FunctionVariant($acceptor->getTemplateTypeMap(), $acceptor->getResolvedTemplateTypeMap(), array_map(function (
            ParameterReflection $parameter,
        ) use ($builder): ParameterReflection {
            return new DummyParameter(
                $parameter->getName(),
                $this->transformStaticType($parameter->getType(), $builder),
                $parameter->isOptional(),
                $parameter->passedByReference(),
                $parameter->isVariadic(),
                $parameter->getDefaultValue(),
            );
        }, $acceptor->getParameters()), $acceptor->isVariadic(), $this->transformStaticType($acceptor->getReturnType(), $builder));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/ModelForwardsCallsExtension.php [203:219]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function transformStaticParameters(MethodReflection $method, GenericObjectType $builder): ParametersAcceptor
    {
        $acceptor = $method->getVariants()[0];

        return new FunctionVariant($acceptor->getTemplateTypeMap(), $acceptor->getResolvedTemplateTypeMap(), array_map(function (
            ParameterReflection $parameter,
        ) use ($builder): ParameterReflection {
            return new DummyParameter(
                $parameter->getName(),
                $this->transformStaticType($parameter->getType(), $builder),
                $parameter->isOptional(),
                $parameter->passedByReference(),
                $parameter->isVariadic(),
                $parameter->getDefaultValue(),
            );
        }, $acceptor->getParameters()), $acceptor->isVariadic(), $this->transformStaticType($acceptor->getReturnType(), $builder));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



