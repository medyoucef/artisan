vendor/phpunit/phpunit/src/Framework/Exception/ObjectEquals/ComparisonMethodDoesNotDeclareBoolReturnTypeException.php [21:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Comparison method %s::%s() does not declare bool return type.',
                $className,
                $methodName,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/Exception/ObjectEquals/ComparisonMethodDoesNotDeclareExactlyOneParameterException.php [21:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Comparison method %s::%s() does not declare exactly one parameter.',
                $className,
                $methodName,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/Exception/ObjectEquals/ComparisonMethodDoesNotDeclareParameterTypeException.php [21:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Parameter of comparison method %s::%s() does not have a declared type.',
                $className,
                $methodName,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/Exception/ObjectEquals/ComparisonMethodDoesNotExistException.php [21:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Comparison method %s::%s() does not exist.',
                $className,
                $methodName,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Exception/NeverReturningMethodException.php [24:33]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Method %s::%s() is declared to never return',
                $className,
                $methodName,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



