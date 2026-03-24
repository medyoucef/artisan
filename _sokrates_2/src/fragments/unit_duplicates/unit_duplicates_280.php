vendor/phpunit/phpunit/src/Runner/Exception/ClassCannotBeFoundException.php [22:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $file)
    {
        parent::__construct(
            sprintf(
                'Class %s cannot be found in %s',
                $className,
                $file,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Runner/Exception/ClassDoesNotExtendTestCaseException.php [22:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $file)
    {
        parent::__construct(
            sprintf(
                'Class %s declared in %s does not extend PHPUnit\Framework\TestCase',
                $className,
                $file,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Runner/Exception/ClassIsAbstractException.php [22:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $className, string $file)
    {
        parent::__construct(
            sprintf(
                'Class %s declared in %s is abstract',
                $className,
                $file,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



