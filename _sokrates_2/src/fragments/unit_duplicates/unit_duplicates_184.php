vendor/larastan/larastan/src/Reflection/ReflectionHelper.php [18:33]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function hasPropertyTag(ClassReflection $classReflection, string $propertyName): bool
    {
        if (array_key_exists($propertyName, $classReflection->getPropertyTags())) {
            return true;
        }

        foreach ($classReflection->getAncestors() as $ancestor) {
            if (array_key_exists($propertyName, $ancestor->getPropertyTags())) {
                return true;
            }
        }

        /** @phpstan-ignore-next-line */
        return (new MixinPropertiesClassReflectionExtension([$classReflection->getName()]))
            ->hasProperty($classReflection, $propertyName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Reflection/ReflectionHelper.php [18:33]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function hasPropertyTag(ClassReflection $classReflection, string $propertyName): bool
    {
        if (array_key_exists($propertyName, $classReflection->getPropertyTags())) {
            return true;
        }

        foreach ($classReflection->getAncestors() as $ancestor) {
            if (array_key_exists($propertyName, $ancestor->getPropertyTags())) {
                return true;
            }
        }

        /** @phpstan-ignore-next-line */
        return (new MixinPropertiesClassReflectionExtension([$classReflection->getName()]))
            ->hasProperty($classReflection, $propertyName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



