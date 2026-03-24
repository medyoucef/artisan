vendor/larastan/larastan/src/Properties/SchemaAggregator.php [46:59]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function addClassStatements(array $stmts): void
    {
        foreach ($stmts as $stmt) {
            if (
                ! ($stmt instanceof PhpParser\Node\Stmt\ClassMethod)
                || $stmt->name->name === 'down'
                || ! $stmt->stmts
            ) {
                continue;
            }

            $this->addUpMethodStatements($stmt->stmts);
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [46:59]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function addClassStatements(array $stmts): void
    {
        foreach ($stmts as $stmt) {
            if (
                ! ($stmt instanceof PhpParser\Node\Stmt\ClassMethod)
                || $stmt->name->name === 'down'
                || ! $stmt->stmts
            ) {
                continue;
            }

            $this->addUpMethodStatements($stmt->stmts);
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



