vendor/larastan/larastan/src/Concerns/HasContainer.php [32:41]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(string $abstract): mixed
    {
        try {
            $concrete = $this->getContainer()->make($abstract);
        } catch (Throwable) {
            return null;
        }

        return $concrete;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Concerns/HasContainer.php [32:41]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(string $abstract): mixed
    {
        try {
            $concrete = $this->getContainer()->make($abstract);
        } catch (Throwable) {
            return null;
        }

        return $concrete;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



