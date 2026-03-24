vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/MySqlGrammar.php [1188:1201]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function modifyStoredAs(Blueprint $blueprint, Fluent $column)
    {
        if (! is_null($storedAs = $column->storedAsJson)) {
            if ($this->isJsonSelector($storedAs)) {
                $storedAs = $this->wrapJsonSelector($storedAs);
            }

            return " as ({$storedAs}) stored";
        }

        if (! is_null($storedAs = $column->storedAs)) {
            return " as ({$this->getValue($storedAs)}) stored";
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/SQLiteGrammar.php [1114:1127]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function modifyStoredAs(Blueprint $blueprint, Fluent $column)
    {
        if (! is_null($storedAs = $column->storedAsJson)) {
            if ($this->isJsonSelector($storedAs)) {
                $storedAs = $this->wrapJsonSelector($storedAs);
            }

            return " as ({$storedAs}) stored";
        }

        if (! is_null($storedAs = $column->storedAs)) {
            return " as ({$this->getValue($column->storedAs)}) stored";
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



