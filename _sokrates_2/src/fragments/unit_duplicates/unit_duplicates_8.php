vendor/larastan/larastan/src/Methods/BuilderHelper.php [146:253]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function searchOnEloquentBuilder(ClassReflection $eloquentBuilder, string $methodName, Type $modelType): MethodReflection|null
    {
        // Check for macros first
        if ($this->macroMethodsClassReflectionExtension->hasMethod($eloquentBuilder, $methodName)) {
            return $this->macroMethodsClassReflectionExtension->getMethod($eloquentBuilder, $methodName);
        }

        $scopeName = 'scope' . ucfirst($methodName);

        foreach ($modelType->getObjectClassReflections() as $reflection) {
            // Check for Scope attribute
            if ($reflection->hasNativeMethod($methodName)) {
                $methodReflection  = $reflection->getNativeMethod($methodName);
                $hasScopeAttribute = false;
                foreach ($methodReflection->getAttributes() as $attribute) {
                    // using string instead of class constant to avoid failing on older Laravel versions
                    if ($attribute->getName() === 'Illuminate\Database\Eloquent\Attributes\Scope') {
                        $hasScopeAttribute = true;
                        break;
                    }
                }

                if (! $methodReflection->isPublic() && $hasScopeAttribute) {
                    $parametersAcceptor = $methodReflection->getVariants()[0];

                    $parameters = $parametersAcceptor->getParameters();
                    // We shift the parameters,
                    // because first parameter is the Builder
                    array_shift($parameters);

                    $returnType = $parametersAcceptor->getReturnType();

                    return new EloquentBuilderMethodReflection(
                        $methodName,
                        $methodReflection->getDeclaringClass(),
                        $parameters,
                        $returnType,
                        $parametersAcceptor->isVariadic(),
                    );
                }
            }

            // Check for @method phpdoc tags
            if (array_key_exists($scopeName, $reflection->getMethodTags())) {
                $methodTag = $reflection->getMethodTags()[$scopeName];

                $parameters = [];
                foreach ($methodTag->getParameters() as $parameterName => $parameterTag) {
                    $parameters[] = new AnnotationScopeMethodParameterReflection(
                        $parameterName,
                        $parameterTag->getType(),
                        $parameterTag->passedByReference(),
                        $parameterTag->isOptional(),
                        $parameterTag->isVariadic(),
                        $parameterTag->getDefaultValue(),
                    );
                }

                // We shift the parameters,
                // because first parameter is the Builder
                array_shift($parameters);

                return new EloquentBuilderMethodReflection(
                    $scopeName,
                    $reflection,
                    $parameters,
                    $methodTag->getReturnType(),
                );
            }

            if ($reflection->hasNativeMethod($scopeName)) {
                $methodReflection   = $reflection->getNativeMethod($scopeName);
                $parametersAcceptor = $methodReflection->getVariants()[0];

                $parameters = $parametersAcceptor->getParameters();
                // We shift the parameters,
                // because first parameter is the Builder
                array_shift($parameters);

                $returnType = $parametersAcceptor->getReturnType();

                return new EloquentBuilderMethodReflection(
                    $scopeName,
                    $methodReflection->getDeclaringClass(),
                    $parameters,
                    $returnType,
                    $parametersAcceptor->isVariadic(),
                );
            }
        }

        $queryBuilderReflection = $this->reflectionProvider->getClass(QueryBuilder::class);

        if (in_array($methodName, $this->passthru, true)) {
            return $queryBuilderReflection->getNativeMethod($methodName);
        }

        if ($queryBuilderReflection->hasNativeMethod($methodName)) {
            return $queryBuilderReflection->getNativeMethod($methodName);
        }

        // Check for query builder macros
        if ($this->macroMethodsClassReflectionExtension->hasMethod($queryBuilderReflection, $methodName)) {
            return $this->macroMethodsClassReflectionExtension->getMethod($queryBuilderReflection, $methodName);
        }

        return $this->dynamicWhere($methodName, new GenericObjectType($eloquentBuilder->getName(), [$modelType]));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/BuilderHelper.php [146:253]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function searchOnEloquentBuilder(ClassReflection $eloquentBuilder, string $methodName, Type $modelType): MethodReflection|null
    {
        // Check for macros first
        if ($this->macroMethodsClassReflectionExtension->hasMethod($eloquentBuilder, $methodName)) {
            return $this->macroMethodsClassReflectionExtension->getMethod($eloquentBuilder, $methodName);
        }

        $scopeName = 'scope' . ucfirst($methodName);

        foreach ($modelType->getObjectClassReflections() as $reflection) {
            // Check for Scope attribute
            if ($reflection->hasNativeMethod($methodName)) {
                $methodReflection  = $reflection->getNativeMethod($methodName);
                $hasScopeAttribute = false;
                foreach ($methodReflection->getAttributes() as $attribute) {
                    // using string instead of class constant to avoid failing on older Laravel versions
                    if ($attribute->getName() === 'Illuminate\Database\Eloquent\Attributes\Scope') {
                        $hasScopeAttribute = true;
                        break;
                    }
                }

                if (! $methodReflection->isPublic() && $hasScopeAttribute) {
                    $parametersAcceptor = $methodReflection->getVariants()[0];

                    $parameters = $parametersAcceptor->getParameters();
                    // We shift the parameters,
                    // because first parameter is the Builder
                    array_shift($parameters);

                    $returnType = $parametersAcceptor->getReturnType();

                    return new EloquentBuilderMethodReflection(
                        $methodName,
                        $methodReflection->getDeclaringClass(),
                        $parameters,
                        $returnType,
                        $parametersAcceptor->isVariadic(),
                    );
                }
            }

            // Check for @method phpdoc tags
            if (array_key_exists($scopeName, $reflection->getMethodTags())) {
                $methodTag = $reflection->getMethodTags()[$scopeName];

                $parameters = [];
                foreach ($methodTag->getParameters() as $parameterName => $parameterTag) {
                    $parameters[] = new AnnotationScopeMethodParameterReflection(
                        $parameterName,
                        $parameterTag->getType(),
                        $parameterTag->passedByReference(),
                        $parameterTag->isOptional(),
                        $parameterTag->isVariadic(),
                        $parameterTag->getDefaultValue(),
                    );
                }

                // We shift the parameters,
                // because first parameter is the Builder
                array_shift($parameters);

                return new EloquentBuilderMethodReflection(
                    $scopeName,
                    $reflection,
                    $parameters,
                    $methodTag->getReturnType(),
                );
            }

            if ($reflection->hasNativeMethod($scopeName)) {
                $methodReflection   = $reflection->getNativeMethod($scopeName);
                $parametersAcceptor = $methodReflection->getVariants()[0];

                $parameters = $parametersAcceptor->getParameters();
                // We shift the parameters,
                // because first parameter is the Builder
                array_shift($parameters);

                $returnType = $parametersAcceptor->getReturnType();

                return new EloquentBuilderMethodReflection(
                    $scopeName,
                    $methodReflection->getDeclaringClass(),
                    $parameters,
                    $returnType,
                    $parametersAcceptor->isVariadic(),
                );
            }
        }

        $queryBuilderReflection = $this->reflectionProvider->getClass(QueryBuilder::class);

        if (in_array($methodName, $this->passthru, true)) {
            return $queryBuilderReflection->getNativeMethod($methodName);
        }

        if ($queryBuilderReflection->hasNativeMethod($methodName)) {
            return $queryBuilderReflection->getNativeMethod($methodName);
        }

        // Check for query builder macros
        if ($this->macroMethodsClassReflectionExtension->hasMethod($queryBuilderReflection, $methodName)) {
            return $this->macroMethodsClassReflectionExtension->getMethod($queryBuilderReflection, $methodName);
        }

        return $this->dynamicWhere($methodName, new GenericObjectType($eloquentBuilder->getName(), [$modelType]));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



