vendor/phpunit/phpunit/src/Runner/Exception/DirectoryDoesNotExistException.php [22:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $directory)
    {
        parent::__construct(
            sprintf(
                'Directory "%s" does not exist and could not be created',
                $directory,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Util/Exception/InvalidDirectoryException.php [22:30]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $directory)
    {
        parent::__construct(
            sprintf(
                '"%s" is not a directory',
                $directory,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



