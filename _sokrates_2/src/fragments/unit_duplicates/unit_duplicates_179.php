vendor/larastan/larastan/src/Methods/StorageMethodsClassReflectionExtension.php [41:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMethod(
        ClassReflection $classReflection,
        string $methodName,
    ): MethodReflection {
        if ($this->reflectionProvider->getClass(FilesystemManager::class)->hasMethod($methodName)) {
            return new StaticMethodReflection(
                $this->reflectionProvider->getClass(FilesystemManager::class)->getMethod($methodName, new OutOfClassScope()),
            );
        }

        return new StaticMethodReflection(
            $this->reflectionProvider->getClass(FilesystemAdapter::class)->getMethod($methodName, new OutOfClassScope()),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/StorageMethodsClassReflectionExtension.php [41:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMethod(
        ClassReflection $classReflection,
        string $methodName,
    ): MethodReflection {
        if ($this->reflectionProvider->getClass(FilesystemManager::class)->hasMethod($methodName)) {
            return new StaticMethodReflection(
                $this->reflectionProvider->getClass(FilesystemManager::class)->getMethod($methodName, new OutOfClassScope()),
            );
        }

        return new StaticMethodReflection(
            $this->reflectionProvider->getClass(FilesystemAdapter::class)->getMethod($methodName, new OutOfClassScope()),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



