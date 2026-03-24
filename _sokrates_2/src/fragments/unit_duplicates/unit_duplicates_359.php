vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/MySqlGrammar.php [127:134]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function compileSchemaWhereClause($schema, $column)
    {
        return $column.(match (true) {
            ! empty($schema) && is_array($schema) => ' in ('.$this->quoteString($schema).')',
            ! empty($schema) => ' = '.$this->quoteString($schema),
            default => " not in ('information_schema', 'mysql', 'ndbinfo', 'performance_schema', 'sys')",
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/PostgresGrammar.php [141:148]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function compileSchemaWhereClause($schema, $column)
    {
        return $column.(match (true) {
            ! empty($schema) && is_array($schema) => ' in ('.$this->quoteString($schema).')',
            ! empty($schema) => ' = '.$this->quoteString($schema),
            default => " <> 'information_schema' and $column not like 'pg\_%'",
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



