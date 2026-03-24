vendor/larastan/larastan/src/SQL/IamcalSqlParser.php [18:66]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function parseTables(string $sql): array
    {
        $parser                      = new VendorIamcalSqlParser();
        $parser->throw_on_bad_syntax = true; // @phpcs:ignore

        try {
            $tableDefinitions = $parser->parse($sql);
        } catch (SQLParserSyntaxException $exception) {
            throw SqlParserFailure::create('Failed to parse SQL schema with iamcal/sql-parser.', $exception);
        }

        $tables = [];
        foreach ($tableDefinitions as $definition) {
            $tableName = $definition['name'] ?? null;
            if (! is_string($tableName)) {
                continue;
            }

            $fields = $definition['fields'] ?? null;
            if (! is_array($fields)) {
                continue;
            }

            $columns = [];
            foreach ($fields as $field) {
                $fieldName = $field['name'] ?? null;
                if (! is_string($fieldName)) {
                    continue;
                }

                $fieldType = $field['type'] ?? null;
                if (! is_string($fieldType)) {
                    continue;
                }

                $columns[] = new ColumnDefinition(
                    $fieldName,
                    $fieldType,
                    $this->resolveTypeOptions($field),
                    $this->resolveNullable($field),
                    $field['values'] ?? [],
                );
            }

            $tables[] = new TableDefinition($tableName, $columns);
        }

        return $tables;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/IamcalSqlParser.php [18:66]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function parseTables(string $sql): array
    {
        $parser                      = new VendorIamcalSqlParser();
        $parser->throw_on_bad_syntax = true; // @phpcs:ignore

        try {
            $tableDefinitions = $parser->parse($sql);
        } catch (SQLParserSyntaxException $exception) {
            throw SqlParserFailure::create('Failed to parse SQL schema with iamcal/sql-parser.', $exception);
        }

        $tables = [];
        foreach ($tableDefinitions as $definition) {
            $tableName = $definition['name'] ?? null;
            if (! is_string($tableName)) {
                continue;
            }

            $fields = $definition['fields'] ?? null;
            if (! is_array($fields)) {
                continue;
            }

            $columns = [];
            foreach ($fields as $field) {
                $fieldName = $field['name'] ?? null;
                if (! is_string($fieldName)) {
                    continue;
                }

                $fieldType = $field['type'] ?? null;
                if (! is_string($fieldType)) {
                    continue;
                }

                $columns[] = new ColumnDefinition(
                    $fieldName,
                    $fieldType,
                    $this->resolveTypeOptions($field),
                    $this->resolveNullable($field),
                    $field['values'] ?? [],
                );
            }

            $tables[] = new TableDefinition($tableName, $columns);
        }

        return $tables;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



