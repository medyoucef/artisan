vendor/larastan/larastan/src/Support/ConfigParser.php [178:197]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getConfigFiles(): array
    {
        /** @var array<string, SplFileInfo> $configFiles */
        $configFiles = [];

        foreach ($this->configPaths as $configPath) {
            if (! is_dir($configPath)) {
                continue;
            }

            $configFiles += iterator_to_array(
                new RegexIterator(
                    new RecursiveIteratorIterator(new RecursiveDirectoryIterator($configPath)),
                    '/\.php$/i',
                ),
            );
        }

        return $configFiles;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ConfigParser.php [178:197]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getConfigFiles(): array
    {
        /** @var array<string, SplFileInfo> $configFiles */
        $configFiles = [];

        foreach ($this->configPaths as $configPath) {
            if (! is_dir($configPath)) {
                continue;
            }

            $configFiles += iterator_to_array(
                new RegexIterator(
                    new RecursiveIteratorIterator(new RecursiveDirectoryIterator($configPath)),
                    '/\.php$/i',
                ),
            );
        }

        return $configFiles;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



