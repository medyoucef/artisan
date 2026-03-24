vendor/larastan/larastan/src/Properties/SchemaAggregator.php [176:347]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processColumnUpdates(string $tableName, string $argName, array $stmts): void
    {
        if (! isset($this->tables[$tableName])) {
            return;
        }

        $table = $this->tables[$tableName];

        foreach ($stmts as $stmt) {
            if (
                ! ($stmt instanceof PhpParser\Node\Stmt\Expression)
                || ! ($stmt->expr instanceof PhpParser\Node\Expr\MethodCall)
                || ! ($stmt->expr->name instanceof PhpParser\Node\Identifier)
            ) {
                continue;
            }

            $rootVar = $stmt->expr;

            $firstMethodCall = $rootVar;

            $nullable = false;
            $unsigned = false;

            while ($rootVar instanceof PhpParser\Node\Expr\MethodCall) {
                if ($rootVar->name instanceof PhpParser\Node\Identifier) {
                    if (
                        $rootVar->name->name === 'nullable'
                        && $this->getNullableArgumentValue($rootVar) === true
                    ) {
                        $nullable = true;
                    } elseif ($rootVar->name->name === 'unsigned') {
                        $unsigned = true;
                    }
                }

                $firstMethodCall = $rootVar;
                $rootVar         = $rootVar->var;
            }

            if (
                ! ($rootVar instanceof PhpParser\Node\Expr\Variable)
                || $rootVar->name !== $argName
                || ! ($firstMethodCall->name instanceof PhpParser\Node\Identifier)
            ) {
                continue;
            }

            $firstArg  = $firstMethodCall->getArgs()[0]->value ?? null;
            $secondArg = $firstMethodCall->getArgs()[1]->value ?? null;

            if ($firstMethodCall->name->name === 'foreignIdFor') {
                if (
                    $firstArg instanceof PhpParser\Node\Expr\ClassConstFetch
                    && $firstArg->class instanceof PhpParser\Node\Name
                ) {
                    $modelClass = $firstArg->class->toCodeString();
                } elseif ($firstArg instanceof PhpParser\Node\Scalar\String_) {
                    $modelClass = $firstArg->value;
                } else {
                    continue;
                }

                $columnName = Str::snake(class_basename($modelClass)) . '_id';
                if ($secondArg instanceof PhpParser\Node\Scalar\String_) {
                    $columnName = $secondArg->value;
                }

                $type = $this->getModelReferenceType($modelClass);
                if ($unsigned && ($type === null || $type === 'int')) {
                    $type = 'non-negative-int';
                }

                $table->setColumn(new SchemaColumn($columnName, $type ?? 'int', $nullable));

                continue;
            }

            if (! $firstArg instanceof PhpParser\Node\Scalar\String_) {
                if ($firstArg instanceof PhpParser\Node\Expr\Array_ && $firstMethodCall->name->name === 'dropColumn') {
                    foreach ($firstArg->items as $arrayItem) {
                        if (! $arrayItem->value instanceof PhpParser\Node\Scalar\String_) {
                            continue;
                        }

                        $table->dropColumn($arrayItem->value->value);
                    }
                }

                if (
                    $firstMethodCall->name->name === 'timestamps'
                    || $firstMethodCall->name->name === 'timestampsTz'
                    || $firstMethodCall->name->name === 'nullableTimestamps'
                    || $firstMethodCall->name->name === 'nullableTimestampsTz'
                    || $firstMethodCall->name->name === 'rememberToken'
                ) {
                    switch (strtolower($firstMethodCall->name->name)) {
                        case 'droptimestamps':
                        case 'droptimestampstz':
                            $table->dropColumn('created_at');
                            $table->dropColumn('updated_at');
                            break;

                        case 'remembertoken':
                            $table->setColumn(new SchemaColumn('remember_token', 'string', $nullable));
                            break;

                        case 'dropremembertoken':
                            $table->dropColumn('remember_token');
                            break;

                        case 'timestamps':
                        case 'timestampstz':
                        case 'nullabletimestamps':
                            $table->setColumn(new SchemaColumn('created_at', 'string', true));
                            $table->setColumn(new SchemaColumn('updated_at', 'string', true));
                            break;
                    }

                    continue;
                }

                $defaultsMap = [
                    'softDeletes' => 'deleted_at',
                    'softDeletesTz' => 'deleted_at',
                    'softDeletesDatetime' => 'deleted_at',
                    'dropSoftDeletes' => 'deleted_at',
                    'dropSoftDeletesTz' => 'deleted_at',
                    'uuid' => 'uuid',
                    'id' => 'id',
                    'ulid' => 'ulid',
                    'ipAddress' => 'ip_address',
                    'macAddress' => 'mac_address',
                ];
                if (! array_key_exists($firstMethodCall->name->name, $defaultsMap)) {
                    continue;
                }

                $columnName = $defaultsMap[$firstMethodCall->name->name];
            } else {
                $columnName = $firstArg->value;
            }

            $secondArgArray = null;

            if ($secondArg instanceof PhpParser\Node\Expr\Array_) {
                $secondArgArray = [];

                foreach ($secondArg->items as $arrayItem) {
                    if (! $arrayItem->value instanceof PhpParser\Node\Scalar\String_) {
                        continue;
                    }

                    $secondArgArray[] = $arrayItem->value->value;
                }
            }

            $this->processStatementAlterMethod(
                strtolower($firstMethodCall->name->name),
                $firstMethodCall,
                $table,
                $columnName,
                $nullable,
                $unsigned,
                $secondArg,
                $argName,
                $tableName,
                $secondArgArray,
                $stmt,
            );
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [176:347]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processColumnUpdates(string $tableName, string $argName, array $stmts): void
    {
        if (! isset($this->tables[$tableName])) {
            return;
        }

        $table = $this->tables[$tableName];

        foreach ($stmts as $stmt) {
            if (
                ! ($stmt instanceof PhpParser\Node\Stmt\Expression)
                || ! ($stmt->expr instanceof PhpParser\Node\Expr\MethodCall)
                || ! ($stmt->expr->name instanceof PhpParser\Node\Identifier)
            ) {
                continue;
            }

            $rootVar = $stmt->expr;

            $firstMethodCall = $rootVar;

            $nullable = false;
            $unsigned = false;

            while ($rootVar instanceof PhpParser\Node\Expr\MethodCall) {
                if ($rootVar->name instanceof PhpParser\Node\Identifier) {
                    if (
                        $rootVar->name->name === 'nullable'
                        && $this->getNullableArgumentValue($rootVar) === true
                    ) {
                        $nullable = true;
                    } elseif ($rootVar->name->name === 'unsigned') {
                        $unsigned = true;
                    }
                }

                $firstMethodCall = $rootVar;
                $rootVar         = $rootVar->var;
            }

            if (
                ! ($rootVar instanceof PhpParser\Node\Expr\Variable)
                || $rootVar->name !== $argName
                || ! ($firstMethodCall->name instanceof PhpParser\Node\Identifier)
            ) {
                continue;
            }

            $firstArg  = $firstMethodCall->getArgs()[0]->value ?? null;
            $secondArg = $firstMethodCall->getArgs()[1]->value ?? null;

            if ($firstMethodCall->name->name === 'foreignIdFor') {
                if (
                    $firstArg instanceof PhpParser\Node\Expr\ClassConstFetch
                    && $firstArg->class instanceof PhpParser\Node\Name
                ) {
                    $modelClass = $firstArg->class->toCodeString();
                } elseif ($firstArg instanceof PhpParser\Node\Scalar\String_) {
                    $modelClass = $firstArg->value;
                } else {
                    continue;
                }

                $columnName = Str::snake(class_basename($modelClass)) . '_id';
                if ($secondArg instanceof PhpParser\Node\Scalar\String_) {
                    $columnName = $secondArg->value;
                }

                $type = $this->getModelReferenceType($modelClass);
                if ($unsigned && ($type === null || $type === 'int')) {
                    $type = 'non-negative-int';
                }

                $table->setColumn(new SchemaColumn($columnName, $type ?? 'int', $nullable));

                continue;
            }

            if (! $firstArg instanceof PhpParser\Node\Scalar\String_) {
                if ($firstArg instanceof PhpParser\Node\Expr\Array_ && $firstMethodCall->name->name === 'dropColumn') {
                    foreach ($firstArg->items as $arrayItem) {
                        if (! $arrayItem->value instanceof PhpParser\Node\Scalar\String_) {
                            continue;
                        }

                        $table->dropColumn($arrayItem->value->value);
                    }
                }

                if (
                    $firstMethodCall->name->name === 'timestamps'
                    || $firstMethodCall->name->name === 'timestampsTz'
                    || $firstMethodCall->name->name === 'nullableTimestamps'
                    || $firstMethodCall->name->name === 'nullableTimestampsTz'
                    || $firstMethodCall->name->name === 'rememberToken'
                ) {
                    switch (strtolower($firstMethodCall->name->name)) {
                        case 'droptimestamps':
                        case 'droptimestampstz':
                            $table->dropColumn('created_at');
                            $table->dropColumn('updated_at');
                            break;

                        case 'remembertoken':
                            $table->setColumn(new SchemaColumn('remember_token', 'string', $nullable));
                            break;

                        case 'dropremembertoken':
                            $table->dropColumn('remember_token');
                            break;

                        case 'timestamps':
                        case 'timestampstz':
                        case 'nullabletimestamps':
                            $table->setColumn(new SchemaColumn('created_at', 'string', true));
                            $table->setColumn(new SchemaColumn('updated_at', 'string', true));
                            break;
                    }

                    continue;
                }

                $defaultsMap = [
                    'softDeletes' => 'deleted_at',
                    'softDeletesTz' => 'deleted_at',
                    'softDeletesDatetime' => 'deleted_at',
                    'dropSoftDeletes' => 'deleted_at',
                    'dropSoftDeletesTz' => 'deleted_at',
                    'uuid' => 'uuid',
                    'id' => 'id',
                    'ulid' => 'ulid',
                    'ipAddress' => 'ip_address',
                    'macAddress' => 'mac_address',
                ];
                if (! array_key_exists($firstMethodCall->name->name, $defaultsMap)) {
                    continue;
                }

                $columnName = $defaultsMap[$firstMethodCall->name->name];
            } else {
                $columnName = $firstArg->value;
            }

            $secondArgArray = null;

            if ($secondArg instanceof PhpParser\Node\Expr\Array_) {
                $secondArgArray = [];

                foreach ($secondArg->items as $arrayItem) {
                    if (! $arrayItem->value instanceof PhpParser\Node\Scalar\String_) {
                        continue;
                    }

                    $secondArgArray[] = $arrayItem->value->value;
                }
            }

            $this->processStatementAlterMethod(
                strtolower($firstMethodCall->name->name),
                $firstMethodCall,
                $table,
                $columnName,
                $nullable,
                $unsigned,
                $secondArg,
                $argName,
                $tableName,
                $secondArgArray,
                $stmt,
            );
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



