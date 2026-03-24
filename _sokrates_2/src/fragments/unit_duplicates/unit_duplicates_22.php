vendor/larastan/larastan/src/Properties/SchemaAggregator.php [102:169]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function alterTable(PhpParser\Node\Expr\StaticCall|PhpParser\Node\Expr\MethodCall $call, bool $creating): void
    {
        if (! isset($call->args[0])) {
            return;
        }

        $value = $call->getArgs()[0]->value;

        $tableName = null;

        if ($value instanceof PhpParser\Node\Scalar\String_) {
            $tableName = $value->value;
        }

        if ($value instanceof PhpParser\Node\Expr\ClassConstFetch) {
            if (! $value->class instanceof PhpParser\Node\Name\FullyQualified) {
                return;
            }

            if (! $value->name instanceof PhpParser\Node\Identifier) {
                return;
            }

            if (! $this->reflectionProvider->hasClass($value->class->name)) {
                return;
            }

            $class = $this->reflectionProvider->getClass($value->class->name);

            $constantValueType = $class->getConstant($value->name->toString())->getValueType();

            if ($constantValueType->getConstantStrings() !== []) {
                $tableName = $constantValueType->getConstantStrings()[0]->getValue();
            }
        }

        if ($tableName === null) {
            return;
        }

        if ($creating) {
            $this->tables[$tableName] = new SchemaTable($tableName);
        }

        if (
            ! isset($call->args[1])
            || ! $call->getArgs()[1]->value instanceof PhpParser\Node\Expr\Closure
            || count($call->getArgs()[1]->value->params) < 1
            || ($call->getArgs()[1]->value->params[0]->type instanceof PhpParser\Node\Name
                && ! (new ObjectType('Illuminate\Database\Schema\Blueprint'))->isSuperTypeOf(new ObjectType($call->getArgs()[1]->value->params[0]->type->toCodeString()))->yes()
            )
        ) {
            return;
        }

        $updateClosure = $call->getArgs()[1]->value;

        if (
            ! ($call->getArgs()[1]->value->params[0]->var instanceof PhpParser\Node\Expr\Variable)
            || ! is_string($call->getArgs()[1]->value->params[0]->var->name)
        ) {
            return;
        }

        $argName = $call->getArgs()[1]->value->params[0]->var->name;

        $this->processColumnUpdates($tableName, $argName, $this->getUpdateStatements($updateClosure));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [102:169]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function alterTable(PhpParser\Node\Expr\StaticCall|PhpParser\Node\Expr\MethodCall $call, bool $creating): void
    {
        if (! isset($call->args[0])) {
            return;
        }

        $value = $call->getArgs()[0]->value;

        $tableName = null;

        if ($value instanceof PhpParser\Node\Scalar\String_) {
            $tableName = $value->value;
        }

        if ($value instanceof PhpParser\Node\Expr\ClassConstFetch) {
            if (! $value->class instanceof PhpParser\Node\Name\FullyQualified) {
                return;
            }

            if (! $value->name instanceof PhpParser\Node\Identifier) {
                return;
            }

            if (! $this->reflectionProvider->hasClass($value->class->name)) {
                return;
            }

            $class = $this->reflectionProvider->getClass($value->class->name);

            $constantValueType = $class->getConstant($value->name->toString())->getValueType();

            if ($constantValueType->getConstantStrings() !== []) {
                $tableName = $constantValueType->getConstantStrings()[0]->getValue();
            }
        }

        if ($tableName === null) {
            return;
        }

        if ($creating) {
            $this->tables[$tableName] = new SchemaTable($tableName);
        }

        if (
            ! isset($call->args[1])
            || ! $call->getArgs()[1]->value instanceof PhpParser\Node\Expr\Closure
            || count($call->getArgs()[1]->value->params) < 1
            || ($call->getArgs()[1]->value->params[0]->type instanceof PhpParser\Node\Name
                && ! (new ObjectType('Illuminate\Database\Schema\Blueprint'))->isSuperTypeOf(new ObjectType($call->getArgs()[1]->value->params[0]->type->toCodeString()))->yes()
            )
        ) {
            return;
        }

        $updateClosure = $call->getArgs()[1]->value;

        if (
            ! ($call->getArgs()[1]->value->params[0]->var instanceof PhpParser\Node\Expr\Variable)
            || ! is_string($call->getArgs()[1]->value->params[0]->var->name)
        ) {
            return;
        }

        $argName = $call->getArgs()[1]->value->params[0]->var->name;

        $this->processColumnUpdates($tableName, $argName, $this->getUpdateStatements($updateClosure));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



