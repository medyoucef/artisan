vendor/larastan/larastan/src/SQL/SqlParserFactory.php [18:27]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private readonly IamcalSqlParser $iamcalSqlParser,
        callable|null $phpMyAdminDetector = null,
    ) {
        if ($phpMyAdminDetector !== null) {
            $this->phpMyAdminDetector = Closure::fromCallable($phpMyAdminDetector);
        } else {
            $this->phpMyAdminDetector = static fn (): bool => class_exists('PhpMyAdmin\\SqlParser\\Parser');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/SqlParserFactory.php [18:27]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private readonly IamcalSqlParser $iamcalSqlParser,
        callable|null $phpMyAdminDetector = null,
    ) {
        if ($phpMyAdminDetector !== null) {
            $this->phpMyAdminDetector = Closure::fromCallable($phpMyAdminDetector);
        } else {
            $this->phpMyAdminDetector = static fn (): bool => class_exists('PhpMyAdmin\\SqlParser\\Parser');
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



