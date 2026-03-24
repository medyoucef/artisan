vendor/larastan/larastan/src/Collectors/UsedViewInAnotherViewCollector.php [47:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processNodes(array $nodes): array
    {
        $nodes = array_filter($nodes, static function (Node $node) {
            return $node instanceof Node\Stmt\InlineHTML;
        });

        if (count($nodes) === 0) {
            return [];
        }

        $usedViews = [];

        foreach ($nodes as $node) {
            preg_match_all(self::VIEW_NAME_REGEX, $node->value, $matches, PREG_SET_ORDER, 0);

            $usedViews = array_merge($usedViews, array_map(static function ($match) {
                return $match[5];
            }, $matches));
        }

        return $usedViews;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedViewInAnotherViewCollector.php [47:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processNodes(array $nodes): array
    {
        $nodes = array_filter($nodes, static function (Node $node) {
            return $node instanceof Node\Stmt\InlineHTML;
        });

        if (count($nodes) === 0) {
            return [];
        }

        $usedViews = [];

        foreach ($nodes as $node) {
            preg_match_all(self::VIEW_NAME_REGEX, $node->value, $matches, PREG_SET_ORDER, 0);

            $usedViews = array_merge($usedViews, array_map(static function ($match) {
                return $match[5];
            }, $matches));
        }

        return $usedViews;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



