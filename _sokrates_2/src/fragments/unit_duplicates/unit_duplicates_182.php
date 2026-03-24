vendor/larastan/larastan/src/Properties/SchemaAggregator.php [363:377]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renameTableThroughStaticCall(PhpParser\Node\Expr\StaticCall|PhpParser\Node\Expr\MethodCall $call): void
    {
        if (
            ! isset($call->args[0], $call->args[1])
            || ! $call->getArgs()[0]->value instanceof PhpParser\Node\Scalar\String_
            || ! $call->getArgs()[1]->value instanceof PhpParser\Node\Scalar\String_
        ) {
            return;
        }

        $oldTableName = $call->getArgs()[0]->value->value;
        $newTableName = $call->getArgs()[1]->value->value;

        $this->renameTable($oldTableName, $newTableName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [363:377]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renameTableThroughStaticCall(PhpParser\Node\Expr\StaticCall|PhpParser\Node\Expr\MethodCall $call): void
    {
        if (
            ! isset($call->args[0], $call->args[1])
            || ! $call->getArgs()[0]->value instanceof PhpParser\Node\Scalar\String_
            || ! $call->getArgs()[1]->value instanceof PhpParser\Node\Scalar\String_
        ) {
            return;
        }

        $oldTableName = $call->getArgs()[0]->value->value;
        $newTableName = $call->getArgs()[1]->value->value;

        $this->renameTable($oldTableName, $newTableName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



