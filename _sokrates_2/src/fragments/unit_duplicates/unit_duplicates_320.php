vendor/sebastian/cli-parser/src/exceptions/AmbiguousOptionException.php [17:25]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $option)
    {
        parent::__construct(
            sprintf(
                'Option "%s" is ambiguous',
                $option,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/sebastian/cli-parser/src/exceptions/OptionDoesNotAllowArgumentException.php [17:25]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $option)
    {
        parent::__construct(
            sprintf(
                'Option "%s" does not allow an argument',
                $option,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/sebastian/cli-parser/src/exceptions/RequiredOptionArgumentMissingException.php [17:25]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $option)
    {
        parent::__construct(
            sprintf(
                'Required argument for option "%s" is missing',
                $option,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/sebastian/cli-parser/src/exceptions/UnknownOptionException.php [17:25]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $option)
    {
        parent::__construct(
            sprintf(
                'Unknown option "%s"',
                $option,
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



