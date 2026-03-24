vendor/larastan/larastan/src/SQL/SqlParserFactory.php [29:42]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function create(): SqlParser
    {
        if ($this->cachedParser !== null) {
            return $this->cachedParser;
        }

        if ($this->isPhpMyAdminParserAvailable()) {
            $this->cachedParser = new PhpMyAdminSqlParser();
        } else {
            $this->cachedParser = $this->iamcalSqlParser;
        }

        return $this->cachedParser;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/SqlParserFactory.php [29:42]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function create(): SqlParser
    {
        if ($this->cachedParser !== null) {
            return $this->cachedParser;
        }

        if ($this->isPhpMyAdminParserAvailable()) {
            $this->cachedParser = new PhpMyAdminSqlParser();
        } else {
            $this->cachedParser = $this->iamcalSqlParser;
        }

        return $this->cachedParser;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



