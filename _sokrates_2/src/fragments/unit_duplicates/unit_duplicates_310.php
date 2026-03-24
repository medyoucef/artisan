vendor/phpunit/phpunit/src/Event/Events/TestSuite/Finished.php [42:50]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function asString(): string
    {
        return sprintf(
            'Test Suite Finished (%s, %d test%s)',
            $this->testSuite->name(),
            $this->testSuite->count(),
            $this->testSuite->count() !== 1 ? 's' : '',
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/Event/Events/TestSuite/Started.php [42:50]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function asString(): string
    {
        return sprintf(
            'Test Suite Started (%s, %d test%s)',
            $this->testSuite->name(),
            $this->testSuite->count(),
            $this->testSuite->count() !== 1 ? 's' : '',
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



