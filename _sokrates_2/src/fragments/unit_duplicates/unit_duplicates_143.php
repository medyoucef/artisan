vendor/larastan/larastan/src/Internal/ComposerHelper.php [23:42]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function getComposerConfig(string $root): array|null
    {
        $composerJsonPath = self::getComposerJsonPath($root);

        if (! is_file($composerJsonPath)) {
            return null;
        }

        try {
            $composerJsonContents = @file_get_contents($composerJsonPath);

            if ($composerJsonContents === false) {
                return null;
            }

            return json_decode($composerJsonContents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            return null;
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ComposerHelper.php [23:42]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function getComposerConfig(string $root): array|null
    {
        $composerJsonPath = self::getComposerJsonPath($root);

        if (! is_file($composerJsonPath)) {
            return null;
        }

        try {
            $composerJsonContents = @file_get_contents($composerJsonPath);

            if ($composerJsonContents === false) {
                return null;
            }

            return json_decode($composerJsonContents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            return null;
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



