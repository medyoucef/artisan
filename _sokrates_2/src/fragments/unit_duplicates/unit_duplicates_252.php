vendor/larastan/larastan/src/Methods/ViewWithMethodsClassReflectionExtension.php [17:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if (! in_array($classReflection->getName(), ['Illuminate\View\View', 'Illuminate\Contracts\View\View'], true)) {
            return false;
        }

        // @phpcs:ignore
        if (! str_starts_with($methodName, 'with')) {
            return false;
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/ViewWithMethodsClassReflectionExtension.php [17:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if (! in_array($classReflection->getName(), ['Illuminate\View\View', 'Illuminate\Contracts\View\View'], true)) {
            return false;
        }

        // @phpcs:ignore
        if (! str_starts_with($methodName, 'with')) {
            return false;
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



