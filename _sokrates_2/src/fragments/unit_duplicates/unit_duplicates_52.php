vendor/larastan/larastan/src/SQL/PhpMyAdminSqlParser.php [19:59]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function parseTables(string $sql): array
    {
        try {
            $parser = new Parser($sql, true);
        } catch (ParserException $exception) {
            throw SqlParserFailure::create('Failed to parse SQL schema with phpmyadmin/sql-parser.', $exception);
        }

        $tables = [];

        foreach ($parser->statements as $statement) {
            if (! $statement instanceof CreateStatement || $statement->name?->table === null) {
                continue;
            }

            $tableName = $statement->name->table;

            if (! is_array($statement->fields)) {
                continue;
            }

            $columns = [];

            foreach ($statement->fields as $field) {
                if ($field->name === null || $field->type === null) {
                    continue;
                }

                $columns[] = new ColumnDefinition(
                    $field->name,
                    $field->type->name,
                    $this->convertTypeOptions($field->type->options),
                    $this->isNullable($field),
                );
            }

            $tables[] = new TableDefinition($tableName, $columns);
        }

        return $tables;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/PhpMyAdminSqlParser.php [19:59]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function parseTables(string $sql): array
    {
        try {
            $parser = new Parser($sql, true);
        } catch (ParserException $exception) {
            throw SqlParserFailure::create('Failed to parse SQL schema with phpmyadmin/sql-parser.', $exception);
        }

        $tables = [];

        foreach ($parser->statements as $statement) {
            if (! $statement instanceof CreateStatement || $statement->name?->table === null) {
                continue;
            }

            $tableName = $statement->name->table;

            if (! is_array($statement->fields)) {
                continue;
            }

            $columns = [];

            foreach ($statement->fields as $field) {
                if ($field->name === null || $field->type === null) {
                    continue;
                }

                $columns[] = new ColumnDefinition(
                    $field->name,
                    $field->type->name,
                    $this->convertTypeOptions($field->type->options),
                    $this->isNullable($field),
                );
            }

            $tables[] = new TableDefinition($tableName, $columns);
        }

        return $tables;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



