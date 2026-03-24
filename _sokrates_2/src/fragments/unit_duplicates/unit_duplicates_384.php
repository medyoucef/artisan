vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('beStrictAboutResourceUsageDuringSmallTests')) {
            $root->removeAttribute('beStrictAboutResourceUsageDuringSmallTests');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('beStrictAboutTodoAnnotatedTests')) {
            $root->removeAttribute('beStrictAboutTodoAnnotatedTests');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveCacheResultFileAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('cacheResultFile')) {
            $root->removeAttribute('cacheResultFile');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveCacheTokensAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('cacheTokens')) {
            $root->removeAttribute('cacheTokens');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveNoInteractionAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('noInteraction')) {
            $root->removeAttribute('noInteraction');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('registerMockObjectsFromTestArgumentsRecursively')) {
            $root->removeAttribute('registerMockObjectsFromTestArgumentsRecursively');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveVerboseAttribute.php [23:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('verbose')) {
            $root->removeAttribute('verbose');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



