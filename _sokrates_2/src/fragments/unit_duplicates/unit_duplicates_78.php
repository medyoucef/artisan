vendor/larastan/larastan/src/Methods/Pipes/Auths.php [33:63]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $classReflectionName = $passable->getClassReflection()
            ->getName();

        $found = false;

        $config = $this->resolve('config');

        if ($config !== null && in_array($classReflectionName, $this->classes, true)) {
            $authModels = $this->getAuthModels($config);

            foreach ($authModels as $authModel) {
                if ($passable->sendToPipeline($authModel)) {
                    $found = true;

                    break;
                }
            }
        } elseif ($classReflectionName === Factory::class || $classReflectionName === AuthManager::class) {
            $found = $passable->sendToPipeline(
                Guard::class,
            );
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Pipes/Auths.php [33:63]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $classReflectionName = $passable->getClassReflection()
            ->getName();

        $found = false;

        $config = $this->resolve('config');

        if ($config !== null && in_array($classReflectionName, $this->classes, true)) {
            $authModels = $this->getAuthModels($config);

            foreach ($authModels as $authModel) {
                if ($passable->sendToPipeline($authModel)) {
                    $found = true;

                    break;
                }
            }
        } elseif ($classReflectionName === Factory::class || $classReflectionName === AuthManager::class) {
            $found = $passable->sendToPipeline(
                Guard::class,
            );
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



