vendor/phpunit/phpunit/src/TextUI/Exception/TestDirectoryNotFoundException.php [22:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $path)
    {
        parent::__construct(
            sprintf(
                'Test directory "%s" not found',
                $path,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Exception/TestFileNotFoundException.php [22:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $path)
    {
        parent::__construct(
            sprintf(
                'Test file "%s" not found',
                $path,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



