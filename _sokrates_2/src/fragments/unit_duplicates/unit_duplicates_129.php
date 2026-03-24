vendor/larastan/larastan/src/Collectors/UsedTranslationViewCollector.php [47:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processNodes(array $nodes): array
    {
        $nodes = array_filter($nodes, static function (Node $node): bool {
            return $node instanceof Node\Stmt\InlineHTML;
        });

        if (count($nodes) === 0) {
            return [];
        }

        $translations = [];

        foreach ($nodes as $node) {
            preg_match_all(self::TRANSLATION_REGEX, $node->value, $matches, PREG_SET_ORDER, 0);

            $translations = array_merge($translations, array_map(static function (array $match): array {
                return [$match[3], 0];
            }, $matches));
        }

        return $translations;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedTranslationViewCollector.php [47:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processNodes(array $nodes): array
    {
        $nodes = array_filter($nodes, static function (Node $node): bool {
            return $node instanceof Node\Stmt\InlineHTML;
        });

        if (count($nodes) === 0) {
            return [];
        }

        $translations = [];

        foreach ($nodes as $node) {
            preg_match_all(self::TRANSLATION_REGEX, $node->value, $matches, PREG_SET_ORDER, 0);

            $translations = array_merge($translations, array_map(static function (array $match): array {
                return [$match[3], 0];
            }, $matches));
        }

        return $translations;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



