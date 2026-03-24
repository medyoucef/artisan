vendor/larastan/larastan/src/Properties/ModelPropertyHelper.php [163:192]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasAccessor(ClassReflection $classReflection, string $propertyName, bool $strictGenerics = true): bool
    {
        if (! $classReflection->is(Model::class)) {
            return false;
        }

        $camelCase = Str::camel($propertyName);

        if (! $classReflection->hasNativeMethod($camelCase)) {
            return $classReflection->hasNativeMethod('get' . Str::studly($propertyName) . 'Attribute');
        }

        $methodReflection = $classReflection->getNativeMethod($camelCase);

        if ($methodReflection->isPublic() || $methodReflection->isPrivate()) {
            return false;
        }

        $returnType = $methodReflection->getVariants()[0]->getReturnType();

        if (! $strictGenerics) {
            return (new ObjectType(Attribute::class))->isSuperTypeOf($returnType)->yes();
        }

        if ($returnType->getObjectClassReflections() === [] || ! $returnType->getObjectClassReflections()[0]->isGeneric()) {
            return false;
        }

        return (new GenericObjectType(Attribute::class, [new MixedType(), new MixedType()]))->isSuperTypeOf($returnType)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelPropertyHelper.php [163:192]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasAccessor(ClassReflection $classReflection, string $propertyName, bool $strictGenerics = true): bool
    {
        if (! $classReflection->is(Model::class)) {
            return false;
        }

        $camelCase = Str::camel($propertyName);

        if (! $classReflection->hasNativeMethod($camelCase)) {
            return $classReflection->hasNativeMethod('get' . Str::studly($propertyName) . 'Attribute');
        }

        $methodReflection = $classReflection->getNativeMethod($camelCase);

        if ($methodReflection->isPublic() || $methodReflection->isPrivate()) {
            return false;
        }

        $returnType = $methodReflection->getVariants()[0]->getReturnType();

        if (! $strictGenerics) {
            return (new ObjectType(Attribute::class))->isSuperTypeOf($returnType)->yes();
        }

        if ($returnType->getObjectClassReflections() === [] || ! $returnType->getObjectClassReflections()[0]->isGeneric()) {
            return false;
        }

        return (new GenericObjectType(Attribute::class, [new MixedType(), new MixedType()]))->isSuperTypeOf($returnType)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



