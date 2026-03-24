vendor/larastan/larastan/src/Methods/Pipes/Contracts.php [39:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function concretes(ClassReflection $classReflection): array
    {
        if ($classReflection->isInterface() && Str::startsWith($classReflection->getName(), 'Illuminate\Contracts')) {
            $concrete = $this->resolve($classReflection->getName());

            if ($concrete !== null) {
                $class = $concrete::class;

                if ($class) {
                    return [$class];
                }
            }
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Pipes/Contracts.php [39:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function concretes(ClassReflection $classReflection): array
    {
        if ($classReflection->isInterface() && Str::startsWith($classReflection->getName(), 'Illuminate\Contracts')) {
            $concrete = $this->resolve($classReflection->getName());

            if ($concrete !== null) {
                $class = $concrete::class;

                if ($class) {
                    return [$class];
                }
            }
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



