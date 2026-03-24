vendor/larastan/larastan/src/Methods/StorageMethodsClassReflectionExtension.php [23:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== Storage::class) {
            return false;
        }

        if ($this->reflectionProvider->getClass(FilesystemManager::class)->hasMethod($methodName)) {
            return true;
        }

        // @phpcs:ignore
        if ($this->reflectionProvider->getClass(FilesystemAdapter::class)->hasMethod($methodName)) {
            return true;
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/StorageMethodsClassReflectionExtension.php [23:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== Storage::class) {
            return false;
        }

        if ($this->reflectionProvider->getClass(FilesystemManager::class)->hasMethod($methodName)) {
            return true;
        }

        // @phpcs:ignore
        if ($this->reflectionProvider->getClass(FilesystemAdapter::class)->hasMethod($methodName)) {
            return true;
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



