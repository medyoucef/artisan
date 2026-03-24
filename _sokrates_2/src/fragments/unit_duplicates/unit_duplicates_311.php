vendor/phpunit/phpunit/src/Framework/Exception/UnknownClassOrInterfaceException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $name)
    {
        parent::__construct(
            sprintf(
                'Class or interface "%s" does not exist',
                $name,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/Exception/UnknownTypeException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $name)
    {
        parent::__construct(
            sprintf(
                'Type "%s" is not known',
                $name,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Generator/Exception/NameAlreadyInUseException.php [24:32]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $name)
    {
        parent::__construct(
            sprintf(
                'The name "%s" is already in use',
                $name,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Runner/Exception/ParameterDoesNotExistException.php [22:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $name)
    {
        parent::__construct(
            sprintf(
                'Parameter "%s" does not exist',
                $name,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



