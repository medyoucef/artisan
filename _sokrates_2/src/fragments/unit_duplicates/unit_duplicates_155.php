vendor/larastan/larastan/src/Properties/SchemaAggregator.php [438:457]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getNullableArgumentValue(PhpParser\Node\Expr\MethodCall $rootVar): bool
    {
        if (! array_key_exists(0, $rootVar->args)) {
            return true;
        }

        $arg = $rootVar->args[0];

        if (! ($arg instanceof PhpParser\Node\Arg)) {
            return true;
        }

        $argExpression = $arg->value;

        if (! ($argExpression instanceof PhpParser\Node\Expr\ConstFetch)) {
            return true;
        }

        return $argExpression->name->getFirst() === 'true';
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [438:457]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getNullableArgumentValue(PhpParser\Node\Expr\MethodCall $rootVar): bool
    {
        if (! array_key_exists(0, $rootVar->args)) {
            return true;
        }

        $arg = $rootVar->args[0];

        if (! ($arg instanceof PhpParser\Node\Arg)) {
            return true;
        }

        $argExpression = $arg->value;

        if (! ($argExpression instanceof PhpParser\Node\Expr\ConstFetch)) {
            return true;
        }

        return $argExpression->name->getFirst() === 'true';
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



