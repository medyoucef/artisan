vendor/phpunit/phpunit/src/Framework/MockObject/Exception/MatchBuilderNotFoundException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $id)
    {
        parent::__construct(
            sprintf(
                'No builder found for match builder identification <%s>',
                $id,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Framework/MockObject/Exception/MatcherAlreadyRegisteredException.php [21:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $id)
    {
        parent::__construct(
            sprintf(
                'Matcher with id <%s> is already registered',
                $id,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



