vendor/larastan/larastan/src/Methods/Pipes/Contracts.php [19:36]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $found = false;

        foreach ($this->concretes($passable->getClassReflection()) as $concrete) {
            if ($passable->sendToPipeline($concrete)) {
                $found = true;

                break;
            }
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Pipes/Contracts.php [19:36]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $found = false;

        foreach ($this->concretes($passable->getClassReflection()) as $concrete) {
            if ($passable->sendToPipeline($concrete)) {
                $found = true;

                break;
            }
        }

        if ($found) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



