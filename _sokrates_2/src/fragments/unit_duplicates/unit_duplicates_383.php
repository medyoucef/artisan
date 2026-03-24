vendor/phpunit/phpunit/src/Logging/TestDox/TestResult/TestResultCollector.php [368:376]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function updateTestStatus(TestStatus $status): void
    {
        if ($this->status !== null &&
            $this->status->isMoreImportantThan($status)) {
            return;
        }

        $this->status = $status;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/phpunit/phpunit/src/TextUI/Output/Default/ProgressPrinter/ProgressPrinter.php [336:344]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function updateTestStatus(TestStatus $status): void
    {
        if ($this->status !== null &&
            $this->status->isMoreImportantThan($status)) {
            return;
        }

        $this->status = $status;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



