vendor/larastan/larastan/src/Rules/NoMissingTranslationsRule.php [52:130]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        $paths = $this->translationDirectories ?: [lang_path()];

        /** @var array<string, array{0: string, 1: int}[]>[] $collectors */
        $collectors = [
            $node->get(UsedTranslationFunctionCollector::class),
            $node->get(UsedTranslationTranslatorCollector::class),
            $node->get(UsedTranslationFacadeCollector::class),
            $this->usedTranslationViewCollector->getUsedTranslations(),
        ];

        $availableTranslations = [];

        foreach ($paths as $path) {
            if (! is_dir($path)) {
                continue;
            }

            $files = $this->filesystem->allFiles($path);

            $translations = array_map(function (SplFileInfo $file): array {
                $translations = [];

                if ($file->getExtension() === 'php') {
                    $prefix = Str::of($file->getRelativePathname())
                        ->explode(DIRECTORY_SEPARATOR)
                        ->slice(1, -1) // Trim locale and filename
                        ->join('/');

                    $root = strlen($prefix) > 0
                        ? $prefix . '/' . $file->getFilenameWithoutExtension()
                        : $file->getFilenameWithoutExtension();

                    $array = $this->filesystem->getRequire($file->getPathname());

                    $translations = array_merge([$root], $this->keys($array, $root));
                } elseif ($file->getExtension() === 'json') {
                    $translations = array_keys(
                        json_decode($this->filesystem->get($file->getPathname()), true),
                    );
                }

                return $translations;
            }, $files);

            $availableTranslations = array_merge($availableTranslations, ...$translations);
        }

        $usedTranslations = [];

        foreach ($collectors as $collector) {
            foreach ($collector as $file => $translations) {
                if (! array_key_exists($file, $usedTranslations)) {
                    $usedTranslations[$file] = [];
                }

                $usedTranslations[$file] = array_merge($usedTranslations[$file], $translations);
            }
        }

        $errors = [];

        foreach ($usedTranslations as $file => $translations) {
            foreach ($translations as [$translation, $line]) {
                if (in_array($translation, $availableTranslations, true) || str_contains($translation, '::')) {
                    continue;
                }

                $errors[] = RuleErrorBuilder::message('Translation "' . $translation . '" has not been found.')
                    ->file($file)
                    ->line($line)
                    ->identifier('larastan.missingTranslations')
                    ->build();
            }
        }

        return $errors;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoMissingTranslationsRule.php [52:130]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        $paths = $this->translationDirectories ?: [lang_path()];

        /** @var array<string, array{0: string, 1: int}[]>[] $collectors */
        $collectors = [
            $node->get(UsedTranslationFunctionCollector::class),
            $node->get(UsedTranslationTranslatorCollector::class),
            $node->get(UsedTranslationFacadeCollector::class),
            $this->usedTranslationViewCollector->getUsedTranslations(),
        ];

        $availableTranslations = [];

        foreach ($paths as $path) {
            if (! is_dir($path)) {
                continue;
            }

            $files = $this->filesystem->allFiles($path);

            $translations = array_map(function (SplFileInfo $file): array {
                $translations = [];

                if ($file->getExtension() === 'php') {
                    $prefix = Str::of($file->getRelativePathname())
                        ->explode(DIRECTORY_SEPARATOR)
                        ->slice(1, -1) // Trim locale and filename
                        ->join('/');

                    $root = strlen($prefix) > 0
                        ? $prefix . '/' . $file->getFilenameWithoutExtension()
                        : $file->getFilenameWithoutExtension();

                    $array = $this->filesystem->getRequire($file->getPathname());

                    $translations = array_merge([$root], $this->keys($array, $root));
                } elseif ($file->getExtension() === 'json') {
                    $translations = array_keys(
                        json_decode($this->filesystem->get($file->getPathname()), true),
                    );
                }

                return $translations;
            }, $files);

            $availableTranslations = array_merge($availableTranslations, ...$translations);
        }

        $usedTranslations = [];

        foreach ($collectors as $collector) {
            foreach ($collector as $file => $translations) {
                if (! array_key_exists($file, $usedTranslations)) {
                    $usedTranslations[$file] = [];
                }

                $usedTranslations[$file] = array_merge($usedTranslations[$file], $translations);
            }
        }

        $errors = [];

        foreach ($usedTranslations as $file => $translations) {
            foreach ($translations as [$translation, $line]) {
                if (in_array($translation, $availableTranslations, true) || str_contains($translation, '::')) {
                    continue;
                }

                $errors[] = RuleErrorBuilder::message('Translation "' . $translation . '" has not been found.')
                    ->file($file)
                    ->line($line)
                    ->identifier('larastan.missingTranslations')
                    ->build();
            }
        }

        return $errors;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



