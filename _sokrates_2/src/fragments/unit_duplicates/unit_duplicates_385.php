vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveListeners.php [22:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $node = $document->getElementsByTagName('listeners')->item(0);

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        $node->parentNode->removeChild($node);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveTestDoxGroupsElement.php [22:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $node = $document->getElementsByTagName('testdoxGroups')->item(0);

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        $node->parentNode->removeChild($node);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



