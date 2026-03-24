vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/MySqlGrammar.php [1252:1264]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function modifyNullable(Blueprint $blueprint, Fluent $column)
    {
        if (is_null($column->virtualAs) &&
            is_null($column->virtualAsJson) &&
            is_null($column->storedAs) &&
            is_null($column->storedAsJson)) {
            return $column->nullable ? ' null' : ' not null';
        }

        if ($column->nullable === false) {
            return ' not null';
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/SQLiteGrammar.php [1136:1148]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function modifyNullable(Blueprint $blueprint, Fluent $column)
    {
        if (is_null($column->virtualAs) &&
            is_null($column->virtualAsJson) &&
            is_null($column->storedAs) &&
            is_null($column->storedAsJson)) {
            return $column->nullable ? '' : ' not null';
        }

        if ($column->nullable === false) {
            return ' not null';
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



