vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RenameBackupStaticAttributesAttribute.php [23:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('backupStaticProperties')) {
            return;
        }

        if (!$root->hasAttribute('backupStaticAttributes')) {
            return;
        }

        $root->setAttribute('backupStaticProperties', $root->getAttribute('backupStaticAttributes'));
        $root->removeAttribute('backupStaticAttributes');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RenameBeStrictAboutCoversAnnotationAttribute.php [23:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('beStrictAboutCoverageMetadata')) {
            return;
        }

        if (!$root->hasAttribute('beStrictAboutCoversAnnotation')) {
            return;
        }

        $root->setAttribute('beStrictAboutCoverageMetadata', $root->getAttribute('beStrictAboutCoversAnnotation'));
        $root->removeAttribute('beStrictAboutCoversAnnotation');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Configuration/Xml/Migration/Migrations/RenameForceCoversAnnotationAttribute.php [23:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

        if ($root->hasAttribute('requireCoverageMetadata')) {
            return;
        }

        if (!$root->hasAttribute('forceCoversAnnotation')) {
            return;
        }

        $root->setAttribute('requireCoverageMetadata', $root->getAttribute('forceCoversAnnotation'));
        $root->removeAttribute('forceCoversAnnotation');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



