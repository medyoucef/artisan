vendor/larastan/larastan/src/Rules/NoEnvCallsOutsideOfConfigRule.php [36:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(array $configDirectories, private FileHelper $fileHelper)
    {
        if (count($configDirectories) !== 0) {
            foreach ($configDirectories as $directory) {
                $this->configDirectories[] = $this->fileHelper->normalizePath($directory);
            }

            return;
        }

        $this->configDirectories = [config_path()]; // @phpstan-ignore-line
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoEnvCallsOutsideOfConfigRule.php [36:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(array $configDirectories, private FileHelper $fileHelper)
    {
        if (count($configDirectories) !== 0) {
            foreach ($configDirectories as $directory) {
                $this->configDirectories[] = $this->fileHelper->normalizePath($directory);
            }

            return;
        }

        $this->configDirectories = [config_path()]; // @phpstan-ignore-line
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



