vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveCoverageElementCacheDirectoryAttribute.php [22:33]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $node = $document->getElementsByTagName('coverage')->item(0);

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        if ($node->hasAttribute('cacheDirectory')) {
            $node->removeAttribute('cacheDirectory');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveCoverageElementProcessUncoveredFilesAttribute.php [22:33]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $node = $document->getElementsByTagName('coverage')->item(0);

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        if ($node->hasAttribute('processUncoveredFiles')) {
            $node->removeAttribute('processUncoveredFiles');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



