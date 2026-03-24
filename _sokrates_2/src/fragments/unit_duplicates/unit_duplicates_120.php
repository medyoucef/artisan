vendor/larastan/larastan/src/Properties/SchemaAggregator.php [460:483]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getUpdateStatements(PhpParser\Node\Expr $updateClosure): array
    {
        if (! property_exists($updateClosure, 'stmts')) {
            return [];
        }

        $statements = [];
        $nodeFinder = new NodeFinder();

        foreach ($updateClosure->stmts as $updateStatement) {
            if ($updateStatement instanceof PhpParser\Node\Stmt\If_) {
                $statements = array_merge(
                    $statements,
                    $nodeFinder->findInstanceOf($updateStatement, PhpParser\Node\Stmt\Expression::class),
                );

                continue;
            }

            $statements[] = $updateStatement;
        }

        return $statements;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [460:483]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getUpdateStatements(PhpParser\Node\Expr $updateClosure): array
    {
        if (! property_exists($updateClosure, 'stmts')) {
            return [];
        }

        $statements = [];
        $nodeFinder = new NodeFinder();

        foreach ($updateClosure->stmts as $updateStatement) {
            if ($updateStatement instanceof PhpParser\Node\Stmt\If_) {
                $statements = array_merge(
                    $statements,
                    $nodeFinder->findInstanceOf($updateStatement, PhpParser\Node\Stmt\Expression::class),
                );

                continue;
            }

            $statements[] = $updateStatement;
        }

        return $statements;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



