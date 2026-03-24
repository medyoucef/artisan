vendor/larastan/larastan/src/Properties/MigrationHelper.php [69:96]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMigrationFiles(): array
    {
        /** @var SplFileInfo[] $migrationFiles */
        $migrationFiles = [];

        if (count($this->databaseMigrationPath) === 0) {
            $this->databaseMigrationPath = [database_path('migrations')];
        }

        foreach ($this->databaseMigrationPath as $additionalPathGlob) {
            foreach ((glob($additionalPathGlob) ?: []) as $additionalPath) {
                $absolutePath = $this->fileHelper->absolutizePath($additionalPath);

                if (! is_dir($absolutePath)) {
                    continue;
                }

                $migrationFiles += iterator_to_array(
                    new RegexIterator(
                        new RecursiveIteratorIterator(new RecursiveDirectoryIterator($absolutePath)),
                        '/\.php$/i',
                    ),
                );
            }
        }

        return $migrationFiles;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/MigrationHelper.php [69:96]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMigrationFiles(): array
    {
        /** @var SplFileInfo[] $migrationFiles */
        $migrationFiles = [];

        if (count($this->databaseMigrationPath) === 0) {
            $this->databaseMigrationPath = [database_path('migrations')];
        }

        foreach ($this->databaseMigrationPath as $additionalPathGlob) {
            foreach ((glob($additionalPathGlob) ?: []) as $additionalPath) {
                $absolutePath = $this->fileHelper->absolutizePath($additionalPath);

                if (! is_dir($absolutePath)) {
                    continue;
                }

                $migrationFiles += iterator_to_array(
                    new RegexIterator(
                        new RecursiveIteratorIterator(new RecursiveDirectoryIterator($absolutePath)),
                        '/\.php$/i',
                    ),
                );
            }
        }

        return $migrationFiles;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



