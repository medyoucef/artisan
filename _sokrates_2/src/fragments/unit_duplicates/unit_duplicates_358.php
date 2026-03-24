vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/Grammar.php [174:181]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function compileRenameColumn(Blueprint $blueprint, Fluent $command)
    {
        return sprintf('alter table %s rename column %s to %s',
            $this->wrapTable($blueprint),
            $this->wrap($command->from),
            $this->wrap($command->to)
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Database/Schema/Grammars/MySqlGrammar.php [629:636]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function compileRenameIndex(Blueprint $blueprint, Fluent $command)
    {
        return sprintf('alter table %s rename index %s to %s',
            $this->wrapTable($blueprint),
            $this->wrap($command->from),
            $this->wrap($command->to)
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



