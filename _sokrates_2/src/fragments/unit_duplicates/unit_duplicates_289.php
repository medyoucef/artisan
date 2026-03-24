vendor/larastan/larastan/src/Methods/Pipes/SelfClass.php [14:24]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $className = $passable->getClassReflection()
            ->getName();

        if ($passable->searchOn($className)) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/Pipes/SelfClass.php [14:24]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(PassableContract $passable, Closure $next): void
    {
        $className = $passable->getClassReflection()
            ->getName();

        if ($passable->searchOn($className)) {
            return;
        }

        $next($passable);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



