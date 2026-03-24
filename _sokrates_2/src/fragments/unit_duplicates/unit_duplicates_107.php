vendor/larastan/larastan/src/Methods/Kernel.php [25:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(ClassReflection $classReflection, string $methodName): PassableContract
    {
        $pipeline = new Pipeline($this->getContainer());

        $passable = new Passable($this->methodReflectionFactory, $this->reflectionProvider, $pipeline, $classReflection, $methodName);

        $pipeline->send($passable)
            ->through(
                [
                    Pipes\SelfClass::class,
                    Pipes\Contracts::class,
                    Pipes\Facades::class,
                    Pipes\Managers::class,
                    Pipes\Auths::class,
                ],
            )
            ->then(
                static function ($method): void {
                },
            );

        return $passable;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Kernel.php [25:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(ClassReflection $classReflection, string $methodName): PassableContract
    {
        $pipeline = new Pipeline($this->getContainer());

        $passable = new Passable($this->methodReflectionFactory, $this->reflectionProvider, $pipeline, $classReflection, $methodName);

        $pipeline->send($passable)
            ->through(
                [
                    Pipes\SelfClass::class,
                    Pipes\Contracts::class,
                    Pipes\Facades::class,
                    Pipes\Managers::class,
                    Pipes\Auths::class,
                ],
            )
            ->then(
                static function ($method): void {
                },
            );

        return $passable;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



