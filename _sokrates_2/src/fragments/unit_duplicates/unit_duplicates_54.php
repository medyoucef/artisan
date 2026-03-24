vendor/larastan/larastan/src/Properties/MigrationCache.php [51:88]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function remember(array $migrationFiles, array $schemaFiles, callable $callback): array
    {
        if (! $this->enabled) {
            return $callback();
        }

        $fingerprint = $this->generateFingerprint($migrationFiles, $schemaFiles);
        $cachePath   = $this->getCachePath($fingerprint);

        $cached = file_exists($cachePath) ? $this->readFromCache($cachePath) : null;
        if ($cached !== null) {
            return $cached;
        }

        $lockHandle = $this->acquireExclusiveLock();
        if ($lockHandle === false) {
            return $callback();
        }

        try {
            $cached = file_exists($cachePath) ? $this->readFromCache($cachePath) : null;
            if ($cached !== null) {
                return $cached;
            }

            $tables   = $callback();
            $tempPath = sprintf('%s.tmp.%d', $cachePath, getmypid());

            file_put_contents($tempPath, serialize($tables));
            rename($tempPath, $cachePath);

            $this->cleanupOldCacheFiles($fingerprint);

            return $tables;
        } finally {
            $this->releaseLock($lockHandle);
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/MigrationCache.php [51:88]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function remember(array $migrationFiles, array $schemaFiles, callable $callback): array
    {
        if (! $this->enabled) {
            return $callback();
        }

        $fingerprint = $this->generateFingerprint($migrationFiles, $schemaFiles);
        $cachePath   = $this->getCachePath($fingerprint);

        $cached = file_exists($cachePath) ? $this->readFromCache($cachePath) : null;
        if ($cached !== null) {
            return $cached;
        }

        $lockHandle = $this->acquireExclusiveLock();
        if ($lockHandle === false) {
            return $callback();
        }

        try {
            $cached = file_exists($cachePath) ? $this->readFromCache($cachePath) : null;
            if ($cached !== null) {
                return $cached;
            }

            $tables   = $callback();
            $tempPath = sprintf('%s.tmp.%d', $cachePath, getmypid());

            file_put_contents($tempPath, serialize($tables));
            rename($tempPath, $cachePath);

            $this->cleanupOldCacheFiles($fingerprint);

            return $tables;
        } finally {
            $this->releaseLock($lockHandle);
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



