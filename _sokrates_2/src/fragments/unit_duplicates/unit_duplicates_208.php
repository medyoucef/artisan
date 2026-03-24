vendor/larastan/larastan/src/Properties/MigrationCache.php [91:107]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function readFromCache(string $path): array|null
    {
        $content = file_get_contents($path);

        if ($content === false) {
            return null;
        }

        /** @var array<string, SchemaTable>|false $data*/
        $data = @unserialize($content);

        if (! is_array($data)) {
            return null;
        }

        return $data;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/MigrationCache.php [91:107]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function readFromCache(string $path): array|null
    {
        $content = file_get_contents($path);

        if ($content === false) {
            return null;
        }

        /** @var array<string, SchemaTable>|false $data*/
        $data = @unserialize($content);

        if (! is_array($data)) {
            return null;
        }

        return $data;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



