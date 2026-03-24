vendor/larastan/larastan/src/Properties/ModelPropertyHelper.php [228:244]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function loadMigrations(): void
    {
        $migrationFiles = $this->migrationHelper->getMigrationFiles();
        $schemaFiles    = $this->squashedMigrationHelper->getSchemaFiles();

        $this->tables = $this->migrationCache->remember(
            $migrationFiles,
            $schemaFiles,
            function () {
                // First try to create tables from squashed migrations, if there are any
                // Then scan the normal migration files for further changes to tables.
                $tables = $this->squashedMigrationHelper->initializeTables();

                return $this->migrationHelper->initializeTables($tables);
            },
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelPropertyHelper.php [228:244]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function loadMigrations(): void
    {
        $migrationFiles = $this->migrationHelper->getMigrationFiles();
        $schemaFiles    = $this->squashedMigrationHelper->getSchemaFiles();

        $this->tables = $this->migrationCache->remember(
            $migrationFiles,
            $schemaFiles,
            function () {
                // First try to create tables from squashed migrations, if there are any
                // Then scan the normal migration files for further changes to tables.
                $tables = $this->squashedMigrationHelper->initializeTables();

                return $this->migrationHelper->initializeTables($tables);
            },
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



