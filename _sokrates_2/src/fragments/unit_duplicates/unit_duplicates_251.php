vendor/larastan/larastan/src/Methods/RedirectResponseMethodsClassReflectionExtension.php [14:26]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(Reflection\ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== 'Illuminate\Http\RedirectResponse') {
            return false;
        }

        // @phpcs:ignore
        if (! str_starts_with($methodName, 'with')) {
            return false;
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/RedirectResponseMethodsClassReflectionExtension.php [14:26]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(Reflection\ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== 'Illuminate\Http\RedirectResponse') {
            return false;
        }

        // @phpcs:ignore
        if (! str_starts_with($methodName, 'with')) {
            return false;
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



