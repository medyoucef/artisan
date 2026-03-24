vendor/larastan/larastan/src/Properties/SchemaAggregator.php [379:395]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renameTableThroughMethodCall(SchemaTable $oldTable, PhpParser\Node\Expr\MethodCall $call): void
    {
        if (
            ! isset($call->args[0])
            || ! $call->getArgs()[0]->value instanceof PhpParser\Node\Scalar\String_
        ) {
            return;
        }

        /** @var PhpParser\Node\Scalar\String_ $methodCallArgument */
        $methodCallArgument = $call->getArgs()[0]->value;

        $oldTableName = $oldTable->name;
        $newTableName = $methodCallArgument->value;

        $this->renameTable($oldTableName, $newTableName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [379:395]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renameTableThroughMethodCall(SchemaTable $oldTable, PhpParser\Node\Expr\MethodCall $call): void
    {
        if (
            ! isset($call->args[0])
            || ! $call->getArgs()[0]->value instanceof PhpParser\Node\Scalar\String_
        ) {
            return;
        }

        /** @var PhpParser\Node\Scalar\String_ $methodCallArgument */
        $methodCallArgument = $call->getArgs()[0]->value;

        $oldTableName = $oldTable->name;
        $newTableName = $methodCallArgument->value;

        $this->renameTable($oldTableName, $newTableName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



