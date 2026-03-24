vendor/phpunit/phpunit/src/Framework/MockObject/Exception/MethodCannotBeConfiguredException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $method)
    {
        parent::__construct(
            sprintf(
                'Trying to configure method "%s" which cannot be configured because it does not exist, has not been specified, is final, or is static',
                $method,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Generator/Exception/InvalidMethodNameException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $method)
    {
        parent::__construct(
            sprintf(
                'Cannot double method with invalid name "%s"',
                $method,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



