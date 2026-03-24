vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [214:222]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function formatStackTrace(Throwable $throwable): string
    {
        $projectRoot = getcwd();
        $trace       = $this->normalizePath($throwable->getTraceAsString());

        return $projectRoot !== false
            ? str_replace($this->normalizePath($projectRoot) . '/', '', $trace)
            : $trace;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [214:222]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function formatStackTrace(Throwable $throwable): string
    {
        $projectRoot = getcwd();
        $trace       = $this->normalizePath($throwable->getTraceAsString());

        return $projectRoot !== false
            ? str_replace($this->normalizePath($projectRoot) . '/', '', $trace)
            : $trace;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



