vendor/phpunit/phpunit/src/Framework/MockObject/Generator/Exception/ClassIsEnumerationException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className)
    {
        parent::__construct(
            sprintf(
                'Class "%s" is an enumeration and cannot be doubled',
                $className,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Generator/Exception/ClassIsFinalException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className)
    {
        parent::__construct(
            sprintf(
                'Class "%s" is declared "final" and cannot be doubled',
                $className,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Generator/Exception/UnknownClassException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className)
    {
        parent::__construct(
            sprintf(
                'Class "%s" does not exist',
                $className,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Metadata/Exception/AnnotationsAreNotSupportedForInternalClassesException.php [26:34]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className)
    {
        parent::__construct(
            sprintf(
                'Annotations can only be parsed for user-defined classes, trying to parse annotations for class "%s"',
                $className,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



