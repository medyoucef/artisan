vendor/larastan/larastan/src/Properties/SchemaAggregator.php [62:100]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function addUpMethodStatements(array $stmts): void
    {
        $nodeFinder = new NodeFinder();
        $methods    = $nodeFinder->findInstanceOf($stmts, PhpParser\Node\Stmt\Expression::class);

        foreach ($methods as $stmt) {
            if (
                $stmt->expr instanceof PhpParser\Node\Expr\MethodCall
                && $stmt->expr->var instanceof PhpParser\Node\Expr\StaticCall
                && $stmt->expr->var->class instanceof PhpParser\Node\Name
                && $stmt->expr->var->name instanceof PhpParser\Node\Identifier
                && ($stmt->expr->var->name->toString() === 'connection' || $stmt->expr->var->name->toString() === 'setConnection')
                && ($stmt->expr->var->class->toCodeString() === '\Schema' || (new ObjectType('Illuminate\Support\Facades\Schema'))->isSuperTypeOf(new ObjectType($stmt->expr->var->class->toCodeString()))->yes())
            ) {
                $statement = $stmt->expr;
            } elseif (
                $stmt->expr instanceof PhpParser\Node\Expr\StaticCall
                && $stmt->expr->class instanceof PhpParser\Node\Name
                && $stmt->expr->name instanceof PhpParser\Node\Identifier
                && ($stmt->expr->class->toCodeString() === '\Schema' || (new ObjectType('Illuminate\Support\Facades\Schema'))->isSuperTypeOf(new ObjectType($stmt->expr->class->toCodeString()))->yes())
            ) {
                $statement = $stmt->expr;
            } else {
                continue;
            }

            if (! $statement->name instanceof PhpParser\Node\Identifier) {
                continue;
            }

            match ($statement->name->name) {
                'create' => $this->alterTable($statement, true),
                'table' => $this->alterTable($statement, false),
                'drop', 'dropIfExists' => $this->dropTable($statement),
                'rename' => $this->renameTableThroughStaticCall($statement),
                default => null,
            };
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [62:100]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function addUpMethodStatements(array $stmts): void
    {
        $nodeFinder = new NodeFinder();
        $methods    = $nodeFinder->findInstanceOf($stmts, PhpParser\Node\Stmt\Expression::class);

        foreach ($methods as $stmt) {
            if (
                $stmt->expr instanceof PhpParser\Node\Expr\MethodCall
                && $stmt->expr->var instanceof PhpParser\Node\Expr\StaticCall
                && $stmt->expr->var->class instanceof PhpParser\Node\Name
                && $stmt->expr->var->name instanceof PhpParser\Node\Identifier
                && ($stmt->expr->var->name->toString() === 'connection' || $stmt->expr->var->name->toString() === 'setConnection')
                && ($stmt->expr->var->class->toCodeString() === '\Schema' || (new ObjectType('Illuminate\Support\Facades\Schema'))->isSuperTypeOf(new ObjectType($stmt->expr->var->class->toCodeString()))->yes())
            ) {
                $statement = $stmt->expr;
            } elseif (
                $stmt->expr instanceof PhpParser\Node\Expr\StaticCall
                && $stmt->expr->class instanceof PhpParser\Node\Name
                && $stmt->expr->name instanceof PhpParser\Node\Identifier
                && ($stmt->expr->class->toCodeString() === '\Schema' || (new ObjectType('Illuminate\Support\Facades\Schema'))->isSuperTypeOf(new ObjectType($stmt->expr->class->toCodeString()))->yes())
            ) {
                $statement = $stmt->expr;
            } else {
                continue;
            }

            if (! $statement->name instanceof PhpParser\Node\Identifier) {
                continue;
            }

            match ($statement->name->name) {
                'create' => $this->alterTable($statement, true),
                'table' => $this->alterTable($statement, false),
                'drop', 'dropIfExists' => $this->dropTable($statement),
                'rename' => $this->renameTableThroughStaticCall($statement),
                default => null,
            };
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



