vendor/larastan/larastan/src/Properties/MigrationCache.php [109:117]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function cleanupOldCacheFiles(string $currentFingerprint): void
    {
        $currentCacheFile = sprintf('%s%s.cache', self::CACHE_PREFIX, $currentFingerprint);
        $files            = glob(sprintf('%s/%s*.cache', $this->cacheDirectory, self::CACHE_PREFIX)) ?: [];

        foreach (array_filter($files, static fn (string $file): bool => ! str_ends_with($file, $currentCacheFile)) as $file) {
            @unlink($file);
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/MigrationCache.php [109:117]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function cleanupOldCacheFiles(string $currentFingerprint): void
    {
        $currentCacheFile = sprintf('%s%s.cache', self::CACHE_PREFIX, $currentFingerprint);
        $files            = glob(sprintf('%s/%s*.cache', $this->cacheDirectory, self::CACHE_PREFIX)) ?: [];

        foreach (array_filter($files, static fn (string $file): bool => ! str_ends_with($file, $currentCacheFile)) as $file) {
            @unlink($file);
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



