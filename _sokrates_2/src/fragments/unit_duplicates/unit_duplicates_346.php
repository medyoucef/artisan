vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [150:159]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function isUserCodeError(Throwable $throwable): bool
    {
        $file = $throwable->getFile();

        if ($file === '') {
            return false;
        }

        return ! str_contains($this->normalizePath($file), '/vendor/');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [150:159]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function isUserCodeError(Throwable $throwable): bool
    {
        $file = $throwable->getFile();

        if ($file === '') {
            return false;
        }

        return ! str_contains($this->normalizePath($file), '/vendor/');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



