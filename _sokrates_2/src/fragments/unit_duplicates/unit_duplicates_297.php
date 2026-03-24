vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/MySqlGrammar.php [78:86]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function compileTableExists($schema, $table)
    {
        return sprintf(
            'select exists (select 1 from information_schema.tables where '
            ."table_schema = %s and table_name = %s and table_type in ('BASE TABLE', 'SYSTEM VERSIONED')) as `exists`",
            $schema ? $this->quoteString($schema) : 'schema()',
            $this->quoteString($table)
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/PostgresGrammar.php [77:85]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function compileTableExists($schema, $table)
    {
        return sprintf(
            'select exists (select 1 from pg_class c, pg_namespace n where '
            ."n.nspname = %s and c.relname = %s and c.relkind in ('r', 'p') and n.oid = c.relnamespace)",
            $schema ? $this->quoteString($schema) : 'current_schema()',
            $this->quoteString($table)
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



