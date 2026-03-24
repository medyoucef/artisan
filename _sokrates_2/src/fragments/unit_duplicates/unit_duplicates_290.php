vendor/larastan/larastan/src/Properties/MigrationCache.php [123:133]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function generateFingerprint(array $migrationFiles, array $schemaFiles): string
    {
        $metadata = array_merge(
            array_map(static fn (SplFileInfo $file): string => sprintf('M:%s:%d', $file->getPathname(), $file->getMTime()), $migrationFiles),
            array_map(static fn (SplFileInfo $file): string => sprintf('S:%s:%d', $file->getPathname(), $file->getMTime()), $schemaFiles),
        );

        sort($metadata);

        return hash('xxh128', implode('|', $metadata));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/MigrationCache.php [123:133]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function generateFingerprint(array $migrationFiles, array $schemaFiles): string
    {
        $metadata = array_merge(
            array_map(static fn (SplFileInfo $file): string => sprintf('M:%s:%d', $file->getPathname(), $file->getMTime()), $migrationFiles),
            array_map(static fn (SplFileInfo $file): string => sprintf('S:%s:%d', $file->getPathname(), $file->getMTime()), $schemaFiles),
        );

        sort($metadata);

        return hash('xxh128', implode('|', $metadata));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



