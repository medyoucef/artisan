vendor/larastan/larastan/src/Properties/SchemaAggregator.php [349:361]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function dropTable(PhpParser\Node\Expr\StaticCall|PhpParser\Node\Expr\MethodCall $call): void
    {
        if (
            ! isset($call->args[0])
            || ! $call->getArgs()[0]->value instanceof PhpParser\Node\Scalar\String_
        ) {
            return;
        }

        $tableName = $call->getArgs()[0]->value->value;

        unset($this->tables[$tableName]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [349:361]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function dropTable(PhpParser\Node\Expr\StaticCall|PhpParser\Node\Expr\MethodCall $call): void
    {
        if (
            ! isset($call->args[0])
            || ! $call->getArgs()[0]->value instanceof PhpParser\Node\Scalar\String_
        ) {
            return;
        }

        $tableName = $call->getArgs()[0]->value->value;

        unset($this->tables[$tableName]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



