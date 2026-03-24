vendor/larastan/larastan/src/Methods/Pipes/Managers.php [19:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $classReflection = $passable->getClassReflection();

        $found = false;

        if ($classReflection->is(Manager::class) && ! $classReflection->isAbstract()) {
            $driver = null;

            $concrete = $this->resolve(
                $classReflection->getName(),
            );

            try {
                $driver = $concrete->driver();
            } catch (InvalidArgumentException) {
                // ..
            }

            if ($driver !== null) {
                $class = $driver::class;

                if ($class) {
                    $found = $passable->sendToPipeline($class);
                }
            }
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Pipes/Managers.php [19:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $classReflection = $passable->getClassReflection();

        $found = false;

        if ($classReflection->is(Manager::class) && ! $classReflection->isAbstract()) {
            $driver = null;

            $concrete = $this->resolve(
                $classReflection->getName(),
            );

            try {
                $driver = $concrete->driver();
            } catch (InvalidArgumentException) {
                // ..
            }

            if ($driver !== null) {
                $class = $driver::class;

                if ($class) {
                    $found = $passable->sendToPipeline($class);
                }
            }
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



