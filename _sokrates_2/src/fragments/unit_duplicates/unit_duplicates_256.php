vendor/larastan/larastan/src/Properties/SchemaTable.php [22:35]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function renameColumn(string $oldName, string $newName): void
    {
        if (! isset($this->columns[$oldName])) {
            return;
        }

        $oldColumn = $this->columns[$oldName];

        unset($this->columns[$oldName]);

        $oldColumn->name = $newName;

        $this->columns[$newName] = $oldColumn;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaTable.php [22:35]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function renameColumn(string $oldName, string $newName): void
    {
        if (! isset($this->columns[$oldName])) {
            return;
        }

        $oldColumn = $this->columns[$oldName];

        unset($this->columns[$oldName]);

        $oldColumn->name = $newName;

        $this->columns[$newName] = $oldColumn;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



