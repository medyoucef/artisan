vendor/larastan/larastan/src/Properties/ModelRelationsExtension.php [36:67]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasProperty(ClassReflection $classReflection, string $propertyName): bool
    {
        if (! $classReflection->is(Model::class)) {
            return false;
        }

        if (ReflectionHelper::hasPropertyTag($classReflection, $propertyName)) {
            return false;
        }

        if (str_ends_with($propertyName, '_count')) {
            $propertyName = Str::before($propertyName, '_count');

            $methodNames = [Str::camel($propertyName), $propertyName];
        } else {
            $methodNames = [$propertyName];
        }

        foreach ($methodNames as $methodName) {
            if (! $classReflection->hasNativeMethod($methodName)) {
                continue;
            }

            $returnType = $classReflection->getNativeMethod($methodName)->getVariants()[0]->getReturnType();

            if ((new ObjectType(Relation::class))->isSuperTypeOf($returnType)->yes()) {
                return true;
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelRelationsExtension.php [36:67]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasProperty(ClassReflection $classReflection, string $propertyName): bool
    {
        if (! $classReflection->is(Model::class)) {
            return false;
        }

        if (ReflectionHelper::hasPropertyTag($classReflection, $propertyName)) {
            return false;
        }

        if (str_ends_with($propertyName, '_count')) {
            $propertyName = Str::before($propertyName, '_count');

            $methodNames = [Str::camel($propertyName), $propertyName];
        } else {
            $methodNames = [$propertyName];
        }

        foreach ($methodNames as $methodName) {
            if (! $classReflection->hasNativeMethod($methodName)) {
                continue;
            }

            $returnType = $classReflection->getNativeMethod($methodName)->getVariants()[0]->getReturnType();

            if ((new ObjectType(Relation::class))->isSuperTypeOf($returnType)->yes()) {
                return true;
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



