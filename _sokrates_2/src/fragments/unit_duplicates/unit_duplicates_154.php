vendor/larastan/larastan/src/Methods/Extension.php [29:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() === Model::class) {
            return false;
        }

        if (array_key_exists($methodName . '-' . $classReflection->getName(), $this->methodReflections)) {
            return true;
        }

        $passable = $this->kernel->handle($classReflection, $methodName);

        $found = $passable->hasFound();

        if ($found) {
            $this->methodReflections[$methodName . '-' . $classReflection->getName()] = $passable->getMethodReflection();
        }

        return $found;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Extension.php [29:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() === Model::class) {
            return false;
        }

        if (array_key_exists($methodName . '-' . $classReflection->getName(), $this->methodReflections)) {
            return true;
        }

        $passable = $this->kernel->handle($classReflection, $methodName);

        $found = $passable->hasFound();

        if ($found) {
            $this->methodReflections[$methodName . '-' . $classReflection->getName()] = $passable->getMethodReflection();
        }

        return $found;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



