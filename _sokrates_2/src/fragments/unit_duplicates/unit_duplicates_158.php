vendor/larastan/larastan/src/Rules/NoEnvCallsOutsideOfConfigRule.php [80:97]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isCalledOutsideOfConfig(FuncCall $call, Scope $scope): bool
    {
        foreach ($this->configDirectories as $configDirectoryGlob) {
            foreach ((glob($configDirectoryGlob) ?: []) as $configDirectory) {
                $absolutePath = $this->fileHelper->absolutizePath($configDirectory);

                if (! is_dir($absolutePath)) {
                    continue;
                }

                if (str_starts_with($scope->getFile(), $absolutePath)) {
                    return false;
                }
            }
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoEnvCallsOutsideOfConfigRule.php [80:97]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isCalledOutsideOfConfig(FuncCall $call, Scope $scope): bool
    {
        foreach ($this->configDirectories as $configDirectoryGlob) {
            foreach ((glob($configDirectoryGlob) ?: []) as $configDirectory) {
                $absolutePath = $this->fileHelper->absolutizePath($configDirectory);

                if (! is_dir($absolutePath)) {
                    continue;
                }

                if (str_starts_with($scope->getFile(), $absolutePath)) {
                    return false;
                }
            }
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



