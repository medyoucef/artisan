vendor/larastan/larastan/src/Methods/Pipes/Facades.php [24:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $classReflection = $passable->getClassReflection();

        $found = false;

        if ($classReflection->is(Facade::class)) {
            $facadeClass = $classReflection->getName();

            if (ReflectionHelper::hasMethodTag($classReflection, $passable->getMethodName())) {
                $next($passable);

                return;
            }

            $concrete = null;

            try {
                $concrete = $facadeClass::getFacadeRoot();
            } catch (Throwable) {
            }

            if ($concrete) {
                $class = $concrete::class;

                if ($class) {
                    $found = $passable->sendToPipeline($class, true);
                }
            }

            if (! $found && Str::startsWith($passable->getMethodName(), 'assert')) {
                $fakeFacadeClass = $this->getFake($facadeClass);

                if ($passable->getReflectionProvider()->hasClass($fakeFacadeClass)) {
                    assert(class_exists($fakeFacadeClass));
                    $found = $passable->sendToPipeline($fakeFacadeClass, true);
                }
            }
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Pipes/Facades.php [24:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $classReflection = $passable->getClassReflection();

        $found = false;

        if ($classReflection->is(Facade::class)) {
            $facadeClass = $classReflection->getName();

            if (ReflectionHelper::hasMethodTag($classReflection, $passable->getMethodName())) {
                $next($passable);

                return;
            }

            $concrete = null;

            try {
                $concrete = $facadeClass::getFacadeRoot();
            } catch (Throwable) {
            }

            if ($concrete) {
                $class = $concrete::class;

                if ($class) {
                    $found = $passable->sendToPipeline($class, true);
                }
            }

            if (! $found && Str::startsWith($passable->getMethodName(), 'assert')) {
                $fakeFacadeClass = $this->getFake($facadeClass);

                if ($passable->getReflectionProvider()->hasClass($fakeFacadeClass)) {
                    assert(class_exists($fakeFacadeClass));
                    $found = $passable->sendToPipeline($fakeFacadeClass, true);
                }
            }
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



