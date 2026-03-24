vendor/phpunit/phpunit/src/Framework/MockObject/Exception/CannotUseOnlyMethodsException.php [21:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $type, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Trying to configure method "%s" with onlyMethods(), but it does not exist in class "%s"',
                $methodName,
                $type,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Generator/Exception/CannotUseAddMethodsException.php [21:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $type, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Trying to configure method "%s" with addMethods(), but it exists in class "%s". Use onlyMethods() for methods that exist in the class',
                $methodName,
                $type,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



