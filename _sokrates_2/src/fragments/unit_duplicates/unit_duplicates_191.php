vendor/larastan/larastan/src/Rules/NoMissingTranslationsRule.php [137:154]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function keys(array $array, string $prefix): array
    {
        $results = [];

        foreach ($array as $key => $value) {
            $newKey = $prefix . '.' . $key;

            $results[] = $newKey;

            if (! is_array($value)) {
                continue;
            }

            $results = array_merge($results, $this->keys($value, $newKey));
        }

        return $results;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoMissingTranslationsRule.php [137:154]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function keys(array $array, string $prefix): array
    {
        $results = [];

        foreach ($array as $key => $value) {
            $newKey = $prefix . '.' . $key;

            $results[] = $newKey;

            if (! is_array($value)) {
                continue;
            }

            $results = array_merge($results, $this->keys($value, $newKey));
        }

        return $results;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



