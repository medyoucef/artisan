vendor/larastan/larastan/src/Methods/Passable.php [57:72]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function searchOn(string $class): bool
    {
        if (! $this->reflectionProvider->hasClass($class)) {
            return false;
        }

        $classReflection = $this->reflectionProvider->getClass($class);

        $found = $classReflection->hasNativeMethod($this->methodName);

        if ($found) {
            $this->setMethodReflection($classReflection->getNativeMethod($this->methodName));
        }

        return $found;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Passable.php [57:72]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function searchOn(string $class): bool
    {
        if (! $this->reflectionProvider->hasClass($class)) {
            return false;
        }

        $classReflection = $this->reflectionProvider->getClass($class);

        $found = $classReflection->hasNativeMethod($this->methodName);

        if ($found) {
            $this->setMethodReflection($classReflection->getNativeMethod($this->methodName));
        }

        return $found;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



