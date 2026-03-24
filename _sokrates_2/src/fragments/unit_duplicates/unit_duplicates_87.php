vendor/larastan/larastan/src/Properties/ModelPropertyHelper.php [194:221]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getAccessor(ClassReflection $classReflection, string $propertyName): ModelProperty
    {
        $camelCase = Str::camel($propertyName);

        if ($classReflection->hasNativeMethod($camelCase)) {
            $methodReflection = $classReflection->getNativeMethod($camelCase);

            if (! $methodReflection->isPublic() && ! $methodReflection->isPrivate()) {
                $returnType = $methodReflection->getVariants()[0]->getReturnType();

                if ((new ObjectType(Attribute::class))->isSuperTypeOf($returnType)->yes()) {
                    return new ModelProperty(
                        $classReflection,
                        $returnType->getTemplateType(Attribute::class, 'TGet'),
                        $returnType->getTemplateType(Attribute::class, 'TSet'),
                    );
                }
            }
        }

        $method = $classReflection->getNativeMethod('get' . Str::studly($propertyName) . 'Attribute');

        return new ModelProperty(
            $classReflection,
            $method->getVariants()[0]->getReturnType(),
            $method->getVariants()[0]->getReturnType(),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelPropertyHelper.php [194:221]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getAccessor(ClassReflection $classReflection, string $propertyName): ModelProperty
    {
        $camelCase = Str::camel($propertyName);

        if ($classReflection->hasNativeMethod($camelCase)) {
            $methodReflection = $classReflection->getNativeMethod($camelCase);

            if (! $methodReflection->isPublic() && ! $methodReflection->isPrivate()) {
                $returnType = $methodReflection->getVariants()[0]->getReturnType();

                if ((new ObjectType(Attribute::class))->isSuperTypeOf($returnType)->yes()) {
                    return new ModelProperty(
                        $classReflection,
                        $returnType->getTemplateType(Attribute::class, 'TGet'),
                        $returnType->getTemplateType(Attribute::class, 'TSet'),
                    );
                }
            }
        }

        $method = $classReflection->getNativeMethod('get' . Str::studly($propertyName) . 'Attribute');

        return new ModelProperty(
            $classReflection,
            $method->getVariants()[0]->getReturnType(),
            $method->getVariants()[0]->getReturnType(),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



