vendor/phpunit/phpunit/src/Event/Events/TestRunner/ExecutionStarted.php [43:50]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function asString(): string
    {
        return sprintf(
            'Test Runner Execution Started (%d test%s)',
            $this->testSuite->count(),
            $this->testSuite->count() !== 1 ? 's' : '',
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Event/Events/TestSuite/Filtered.php [42:49]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function asString(): string
    {
        return sprintf(
            'Test Suite Filtered (%d test%s)',
            $this->testSuite->count(),
            $this->testSuite->count() !== 1 ? 's' : '',
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Event/Events/TestSuite/Loaded.php [42:49]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function asString(): string
    {
        return sprintf(
            'Test Suite Loaded (%d test%s)',
            $this->testSuite->count(),
            $this->testSuite->count() !== 1 ? 's' : '',
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



