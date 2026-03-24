vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemovePrinterAttributes.php [23:36]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('printerClass')) {
            $root->removeAttribute('printerClass');
        }

        if ($root->hasAttribute('printerFile')) {
            $root->removeAttribute('printerFile');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RemoveTestSuiteLoaderAttributes.php [23:36]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('testSuiteLoaderClass')) {
            $root->removeAttribute('testSuiteLoaderClass');
        }

        if ($root->hasAttribute('testSuiteLoaderFile')) {
            $root->removeAttribute('testSuiteLoaderFile');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



