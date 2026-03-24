vendor/larastan/larastan/src/Properties/SquashedMigrationHelper.php [94:117]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getSchemaFiles(): array
    {
        /** @var SplFileInfo[] $schemaFiles */
        $schemaFiles = [];

        foreach ($this->schemaPaths as $additionalPathGlob) {
            foreach ((glob($additionalPathGlob) ?: []) as $additionalPath) {
                $absolutePath = $this->fileHelper->absolutizePath($additionalPath);

                if (! is_dir($absolutePath)) {
                    continue;
                }

                $schemaFiles += iterator_to_array(
                    new RegexIterator(
                        new RecursiveIteratorIterator(new RecursiveDirectoryIterator($absolutePath)),
                        '/\.dump|\.sql/i',
                    ),
                );
            }
        }

        return $schemaFiles;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SquashedMigrationHelper.php [94:117]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getSchemaFiles(): array
    {
        /** @var SplFileInfo[] $schemaFiles */
        $schemaFiles = [];

        foreach ($this->schemaPaths as $additionalPathGlob) {
            foreach ((glob($additionalPathGlob) ?: []) as $additionalPath) {
                $absolutePath = $this->fileHelper->absolutizePath($additionalPath);

                if (! is_dir($absolutePath)) {
                    continue;
                }

                $schemaFiles += iterator_to_array(
                    new RegexIterator(
                        new RecursiveIteratorIterator(new RecursiveDirectoryIterator($absolutePath)),
                        '/\.dump|\.sql/i',
                    ),
                );
            }
        }

        return $schemaFiles;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



