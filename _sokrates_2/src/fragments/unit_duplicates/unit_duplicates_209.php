vendor/larastan/larastan/src/Properties/MigrationCache.php [146:161]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function acquireExclusiveLock(): mixed
    {
        $handle = @fopen($this->getLockPath(), 'c');

        if ($handle === false) {
            return false;
        }

        if (! flock($handle, LOCK_EX)) {
            fclose($handle);

            return false;
        }

        return $handle;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/MigrationCache.php [146:161]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function acquireExclusiveLock(): mixed
    {
        $handle = @fopen($this->getLockPath(), 'c');

        if ($handle === false) {
            return false;
        }

        if (! flock($handle, LOCK_EX)) {
            fclose($handle);

            return false;
        }

        return $handle;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



