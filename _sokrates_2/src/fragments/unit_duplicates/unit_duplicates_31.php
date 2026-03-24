vendor/larastan/larastan/src/Properties/SquashedMigrationHelper.php [37:91]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function initializeTables(): array
    {
        if ($this->disableSchemaScan) {
            return [];
        }

        if (empty($this->schemaPaths)) {
            $this->schemaPaths = [database_path('schema')];
        }

        $filesArray = $this->getSchemaFiles();

        if (empty($filesArray)) {
            return [];
        }

        ksort($filesArray);

        /** @var array<string, SchemaTable> $tables */
        $tables = [];

        foreach ($filesArray as $file) {
            $fileContents = file_get_contents($file->getPathname());

            if ($fileContents === false) {
                continue;
            }

            try {
                $tableDefinitions = $this->sqlParser->parseTables($fileContents);
            } catch (SqlParserFailure) {
                // TODO: re-throw the exception with a clear message?
                continue;
            }

            foreach ($tableDefinitions as $definition) {
                if (array_key_exists($definition->name, $tables)) {
                    continue;
                }

                $table = new SchemaTable($definition->name);
                foreach ($definition->columns as $column) {
                    $table->setColumn(new SchemaColumn(
                        $column->name,
                        $this->converter->convert($column->type, $column->typeOptions, $column->values),
                        $column->nullable,
                    ));
                }

                $tables[$definition->name] = $table;
            }
        }

        return $tables;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SquashedMigrationHelper.php [37:91]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function initializeTables(): array
    {
        if ($this->disableSchemaScan) {
            return [];
        }

        if (empty($this->schemaPaths)) {
            $this->schemaPaths = [database_path('schema')];
        }

        $filesArray = $this->getSchemaFiles();

        if (empty($filesArray)) {
            return [];
        }

        ksort($filesArray);

        /** @var array<string, SchemaTable> $tables */
        $tables = [];

        foreach ($filesArray as $file) {
            $fileContents = file_get_contents($file->getPathname());

            if ($fileContents === false) {
                continue;
            }

            try {
                $tableDefinitions = $this->sqlParser->parseTables($fileContents);
            } catch (SqlParserFailure) {
                // TODO: re-throw the exception with a clear message?
                continue;
            }

            foreach ($tableDefinitions as $definition) {
                if (array_key_exists($definition->name, $tables)) {
                    continue;
                }

                $table = new SchemaTable($definition->name);
                foreach ($definition->columns as $column) {
                    $table->setColumn(new SchemaColumn(
                        $column->name,
                        $this->converter->convert($column->type, $column->typeOptions, $column->values),
                        $column->nullable,
                    ));
                }

                $tables[$definition->name] = $table;
            }
        }

        return $tables;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



