vendor/larastan/larastan/src/Support/ConfigParser.php [226:235]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getConfigPaths(): array
    {
        // Fallback to default config path if no config paths are set
        if ($this->configFiles === []) {
            $this->configPaths = [config_path()];
            $this->configFiles = $this->getConfigFiles();
        }

        return $this->configPaths;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ConfigParser.php [226:235]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getConfigPaths(): array
    {
        // Fallback to default config path if no config paths are set
        if ($this->configFiles === []) {
            $this->configPaths = [config_path()];
            $this->configFiles = $this->getConfigFiles();
        }

        return $this->configPaths;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



