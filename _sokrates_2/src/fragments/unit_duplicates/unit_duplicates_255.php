vendor/larastan/larastan/src/Properties/SchemaAggregator.php [397:410]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renameTable(string $oldTableName, string $newTableName): void
    {
        if (! isset($this->tables[$oldTableName])) {
            return;
        }

        $table = $this->tables[$oldTableName];

        unset($this->tables[$oldTableName]);

        $table->name = $newTableName;

        $this->tables[$newTableName] = $table;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [397:410]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renameTable(string $oldTableName, string $newTableName): void
    {
        if (! isset($this->tables[$oldTableName])) {
            return;
        }

        $table = $this->tables[$oldTableName];

        unset($this->tables[$oldTableName]);

        $table->name = $newTableName;

        $this->tables[$newTableName] = $table;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



