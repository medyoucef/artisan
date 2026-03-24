vendor/larastan/larastan/src/Reflection/ReflectionHelper.php [38:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function hasMethodTag(ClassReflection $classReflection, string $methodName): bool
    {
        if (array_key_exists($methodName, $classReflection->getMethodTags())) {
            return true;
        }

        foreach ($classReflection->getAncestors() as $ancestor) {
            if (array_key_exists($methodName, $ancestor->getMethodTags())) {
                return true;
            }
        }

        /** @phpstan-ignore-next-line */
        return (new MixinMethodsClassReflectionExtension([$classReflection->getName()]))
            ->hasMethod($classReflection, $methodName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Reflection/ReflectionHelper.php [38:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function hasMethodTag(ClassReflection $classReflection, string $methodName): bool
    {
        if (array_key_exists($methodName, $classReflection->getMethodTags())) {
            return true;
        }

        foreach ($classReflection->getAncestors() as $ancestor) {
            if (array_key_exists($methodName, $ancestor->getMethodTags())) {
                return true;
            }
        }

        /** @phpstan-ignore-next-line */
        return (new MixinMethodsClassReflectionExtension([$classReflection->getName()]))
            ->hasMethod($classReflection, $methodName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



