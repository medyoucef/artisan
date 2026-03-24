vendor/larastan/larastan/src/Internal/ConsoleApplicationResolver.php [22:43]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function findCommands(ClassReflection $classReflection): array
    {
        $consoleApplication = $this->getApplication();

        $classType = new ObjectType($classReflection->getName());

        if (! (new ObjectType('Illuminate\Console\Command'))->isSuperTypeOf($classType)->yes()) {
            return [];
        }

        $commands = [];

        foreach ($consoleApplication->all() as $name => $command) {
            if (! $classType->isSuperTypeOf(new ObjectType($command::class))->yes()) {
                continue;
            }

            $commands[$name] = $command;
        }

        return $commands; // @phpstan-ignore-line
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConsoleApplicationResolver.php [22:43]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function findCommands(ClassReflection $classReflection): array
    {
        $consoleApplication = $this->getApplication();

        $classType = new ObjectType($classReflection->getName());

        if (! (new ObjectType('Illuminate\Console\Command'))->isSuperTypeOf($classType)->yes()) {
            return [];
        }

        $commands = [];

        foreach ($consoleApplication->all() as $name => $command) {
            if (! $classType->isSuperTypeOf(new ObjectType($command::class))->yes()) {
                continue;
            }

            $commands[$name] = $command;
        }

        return $commands; // @phpstan-ignore-line
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



