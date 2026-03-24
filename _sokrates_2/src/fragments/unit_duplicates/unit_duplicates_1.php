vendor/larastan/larastan/src/Properties/SchemaAggregator.php [490:700]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processStatementAlterMethod(
        string $method,
        PhpParser\Node\Expr\MethodCall|null $firstMethodCall,
        SchemaTable $table,
        string $columnName,
        bool $nullable,
        bool $unsigned,
        mixed $secondArg,
        PhpParser\Node\Expr|string $argName,
        string $tableName,
        array|null $secondArgArray,
        PhpParser\Node\Stmt\Expression $stmt,
    ): void {
        switch ($method) {
            case 'addcolumn':
                $this->processStatementAlterMethod(
                    strtolower($firstMethodCall->args[0]->value->value ?? ''),
                    null,
                    $table,
                    $firstMethodCall->args[1]->value->value ?? '',
                    $nullable,
                    $unsigned,
                    $secondArg,
                    $argName,
                    $tableName,
                    $secondArgArray,
                    $stmt,
                );

                return;

            case 'integer':
            case 'tinyinteger':
            case 'smallinteger':
            case 'mediuminteger':
            case 'biginteger':
                $columnType = $unsigned ? 'non-negative-int' : 'int';
                $table->setColumn(new SchemaColumn($columnName, $columnType, $nullable));

                return;

            case 'increments':
            case 'id':
            case 'unsignedbiginteger':
            case 'unsignedinteger':
            case 'unsignedmediuminteger':
            case 'unsignedsmallinteger':
            case 'unsignedtinyinteger':
            case 'integerincrements':
            case 'mediumincrements':
            case 'smallincrements':
            case 'tinyincrements':
            case 'bigincrements':
            case 'foreignid':
                $table->setColumn(new SchemaColumn($columnName, 'non-negative-int', $nullable));

                return;

            case 'char':
            case 'datetimetz':
            case 'date':
            case 'datetime':
            case 'foreignulid':
            case 'foreignuuid':
            case 'ipaddress':
            case 'json':
            case 'jsonb':
            case 'linestring':
            case 'longtext':
            case 'macaddress':
            case 'mediumtext':
            case 'multilinestring':
            case 'string':
            case 'text':
            case 'time':
            case 'timestamp':
            case 'ulid':
            case 'uuid':
            case 'binary':
                $table->setColumn(new SchemaColumn($columnName, 'string', $nullable));

                return;

            case 'boolean':
                $table->setColumn(new SchemaColumn($columnName, 'bool', $nullable));

                return;

            case 'geometry':
            case 'geometrycollection':
            case 'multipoint':
            case 'multipolygon':
            case 'multipolygonz':
            case 'point':
            case 'polygon':
            case 'computed':
                $table->setColumn(new SchemaColumn($columnName, 'mixed', $nullable));

                return;

            case 'double':
            case 'float':
            case 'unsigneddecimal':
            case 'decimal':
                $table->setColumn(new SchemaColumn($columnName, 'float', $nullable));

                return;

            case 'after':
                if (
                    $secondArg instanceof PhpParser\Node\Expr\Closure
                    && $secondArg->params[0]->var instanceof PhpParser\Node\Expr\Variable
                    && ! ($secondArg->params[0]->var->name instanceof PhpParser\Node\Expr)
                ) {
                    $argName = $secondArg->params[0]->var->name;
                    $this->processColumnUpdates($tableName, $argName, $secondArg->stmts);
                }

                return;

            case 'dropcolumn':
            case 'dropifexists':
            case 'dropsoftdeletes':
            case 'dropsoftdeletestz':
            case 'removecolumn':
            case 'drop':
                $table->dropColumn($columnName);

                return;

            case 'dropforeign':
            case 'dropindex':
            case 'dropprimary':
            case 'dropunique':
            case 'foreign':
            case 'index':
            case 'primary':
            case 'renameindex':
            case 'spatialIndex':
            case 'unique':
            case 'dropspatialindex':
                return;

            case 'dropmorphs':
                $table->dropColumn($columnName . '_type');
                $table->dropColumn($columnName . '_id');

                return;

            case 'enum':
                $table->setColumn(new SchemaColumn($columnName, 'enum', $nullable, $secondArgArray));

                return;

            case 'morphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', $nullable));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'int', $nullable));

                return;

            case 'nullablemorphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', true));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'int', true));

                return;

            case 'nullableuuidmorphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', true));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'string', true));

                return;

            case 'rename':
                /** @var PhpParser\Node\Expr\MethodCall $methodCall */
                $methodCall = $stmt->expr;
                $this->renameTableThroughMethodCall($table, $methodCall);

                return;

            case 'renamecolumn':
                if ($secondArg instanceof PhpParser\Node\Scalar\String_) {
                    $table->renameColumn($columnName, $secondArg->value);
                }

                return;

            case 'set':
                $table->setColumn(new SchemaColumn($columnName, 'set', $nullable, $secondArgArray));

                return;

            case 'softdeletestz':
            case 'timestamptz':
            case 'timetz':
            case 'year':
            case 'softdeletes':
                $table->setColumn(new SchemaColumn($columnName, 'string', true));

                return;

            case 'uuidmorphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', $nullable));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'string', $nullable));

                return;

            default:
                // We know a property exists with a name, we just don't know its type.
                $table->setColumn(new SchemaColumn($columnName, 'mixed', $nullable));
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [490:700]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function processStatementAlterMethod(
        string $method,
        PhpParser\Node\Expr\MethodCall|null $firstMethodCall,
        SchemaTable $table,
        string $columnName,
        bool $nullable,
        bool $unsigned,
        mixed $secondArg,
        PhpParser\Node\Expr|string $argName,
        string $tableName,
        array|null $secondArgArray,
        PhpParser\Node\Stmt\Expression $stmt,
    ): void {
        switch ($method) {
            case 'addcolumn':
                $this->processStatementAlterMethod(
                    strtolower($firstMethodCall->args[0]->value->value ?? ''),
                    null,
                    $table,
                    $firstMethodCall->args[1]->value->value ?? '',
                    $nullable,
                    $unsigned,
                    $secondArg,
                    $argName,
                    $tableName,
                    $secondArgArray,
                    $stmt,
                );

                return;

            case 'integer':
            case 'tinyinteger':
            case 'smallinteger':
            case 'mediuminteger':
            case 'biginteger':
                $columnType = $unsigned ? 'non-negative-int' : 'int';
                $table->setColumn(new SchemaColumn($columnName, $columnType, $nullable));

                return;

            case 'increments':
            case 'id':
            case 'unsignedbiginteger':
            case 'unsignedinteger':
            case 'unsignedmediuminteger':
            case 'unsignedsmallinteger':
            case 'unsignedtinyinteger':
            case 'integerincrements':
            case 'mediumincrements':
            case 'smallincrements':
            case 'tinyincrements':
            case 'bigincrements':
            case 'foreignid':
                $table->setColumn(new SchemaColumn($columnName, 'non-negative-int', $nullable));

                return;

            case 'char':
            case 'datetimetz':
            case 'date':
            case 'datetime':
            case 'foreignulid':
            case 'foreignuuid':
            case 'ipaddress':
            case 'json':
            case 'jsonb':
            case 'linestring':
            case 'longtext':
            case 'macaddress':
            case 'mediumtext':
            case 'multilinestring':
            case 'string':
            case 'text':
            case 'time':
            case 'timestamp':
            case 'ulid':
            case 'uuid':
            case 'binary':
                $table->setColumn(new SchemaColumn($columnName, 'string', $nullable));

                return;

            case 'boolean':
                $table->setColumn(new SchemaColumn($columnName, 'bool', $nullable));

                return;

            case 'geometry':
            case 'geometrycollection':
            case 'multipoint':
            case 'multipolygon':
            case 'multipolygonz':
            case 'point':
            case 'polygon':
            case 'computed':
                $table->setColumn(new SchemaColumn($columnName, 'mixed', $nullable));

                return;

            case 'double':
            case 'float':
            case 'unsigneddecimal':
            case 'decimal':
                $table->setColumn(new SchemaColumn($columnName, 'float', $nullable));

                return;

            case 'after':
                if (
                    $secondArg instanceof PhpParser\Node\Expr\Closure
                    && $secondArg->params[0]->var instanceof PhpParser\Node\Expr\Variable
                    && ! ($secondArg->params[0]->var->name instanceof PhpParser\Node\Expr)
                ) {
                    $argName = $secondArg->params[0]->var->name;
                    $this->processColumnUpdates($tableName, $argName, $secondArg->stmts);
                }

                return;

            case 'dropcolumn':
            case 'dropifexists':
            case 'dropsoftdeletes':
            case 'dropsoftdeletestz':
            case 'removecolumn':
            case 'drop':
                $table->dropColumn($columnName);

                return;

            case 'dropforeign':
            case 'dropindex':
            case 'dropprimary':
            case 'dropunique':
            case 'foreign':
            case 'index':
            case 'primary':
            case 'renameindex':
            case 'spatialIndex':
            case 'unique':
            case 'dropspatialindex':
                return;

            case 'dropmorphs':
                $table->dropColumn($columnName . '_type');
                $table->dropColumn($columnName . '_id');

                return;

            case 'enum':
                $table->setColumn(new SchemaColumn($columnName, 'enum', $nullable, $secondArgArray));

                return;

            case 'morphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', $nullable));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'int', $nullable));

                return;

            case 'nullablemorphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', true));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'int', true));

                return;

            case 'nullableuuidmorphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', true));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'string', true));

                return;

            case 'rename':
                /** @var PhpParser\Node\Expr\MethodCall $methodCall */
                $methodCall = $stmt->expr;
                $this->renameTableThroughMethodCall($table, $methodCall);

                return;

            case 'renamecolumn':
                if ($secondArg instanceof PhpParser\Node\Scalar\String_) {
                    $table->renameColumn($columnName, $secondArg->value);
                }

                return;

            case 'set':
                $table->setColumn(new SchemaColumn($columnName, 'set', $nullable, $secondArgArray));

                return;

            case 'softdeletestz':
            case 'timestamptz':
            case 'timetz':
            case 'year':
            case 'softdeletes':
                $table->setColumn(new SchemaColumn($columnName, 'string', true));

                return;

            case 'uuidmorphs':
                $table->setColumn(new SchemaColumn($columnName . '_type', 'string', $nullable));
                $table->setColumn(new SchemaColumn($columnName . '_id', 'string', $nullable));

                return;

            default:
                // We know a property exists with a name, we just don't know its type.
                $table->setColumn(new SchemaColumn($columnName, 'mixed', $nullable));
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



