vendor/larastan/larastan/src/Methods/Passable.php [98:128]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function sendToPipeline(string $class, bool $staticAllowed = false): bool
    {
        if (! $this->reflectionProvider->hasClass($class)) {
            return false;
        }

        $classReflection = $this->reflectionProvider->getClass($class);

        $this->setStaticAllowed($this->staticAllowed ?: $staticAllowed);

        $originalClassReflection = $this->classReflection;
        $this->pipeline->send($this->setClassReflection($classReflection))
            ->then(
                function (PassableContract $passable) use ($originalClassReflection): void {
                    if ($passable->hasFound()) {
                        $this->setMethodReflection($passable->getMethodReflection());
                        $this->setStaticAllowed($passable->isStaticAllowed());
                    }

                    $this->setClassReflection($originalClassReflection);
                },
            );

        $result = $this->hasFound();

        if ($result) {
            $this->setMethodReflection(new StaticMethodReflection($this->getMethodReflection()));
        }

        return $result;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Passable.php [98:128]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function sendToPipeline(string $class, bool $staticAllowed = false): bool
    {
        if (! $this->reflectionProvider->hasClass($class)) {
            return false;
        }

        $classReflection = $this->reflectionProvider->getClass($class);

        $this->setStaticAllowed($this->staticAllowed ?: $staticAllowed);

        $originalClassReflection = $this->classReflection;
        $this->pipeline->send($this->setClassReflection($classReflection))
            ->then(
                function (PassableContract $passable) use ($originalClassReflection): void {
                    if ($passable->hasFound()) {
                        $this->setMethodReflection($passable->getMethodReflection());
                        $this->setStaticAllowed($passable->isStaticAllowed());
                    }

                    $this->setClassReflection($originalClassReflection);
                },
            );

        $result = $this->hasFound();

        if ($result) {
            $this->setMethodReflection(new StaticMethodReflection($this->getMethodReflection()));
        }

        return $result;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



