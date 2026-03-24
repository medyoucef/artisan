vendor/larastan/larastan/src/Properties/ModelPropertyHelper.php [46:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasDatabaseProperty(ClassReflection|string $classReflectionOrTable, string $propertyName): bool
    {
        if (! $this->migrationsLoaded()) {
            $this->loadMigrations();
        }

        if (is_string($classReflectionOrTable)) {
            if (! array_key_exists($classReflectionOrTable, $this->tables)) {
                return false;
            }

            return array_key_exists($propertyName, $this->tables[$classReflectionOrTable]->columns);
        }

        if (! $classReflectionOrTable->is(Model::class)) {
            return false;
        }

        if ($classReflectionOrTable->isAbstract()) {
            return false;
        }

        if (ReflectionHelper::hasPropertyTag($classReflectionOrTable, $propertyName)) {
            return false;
        }

        try {
            /** @var Model $modelInstance */
            $modelInstance = $classReflectionOrTable->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            return false;
        }

        if ($propertyName === $modelInstance->getKeyName()) {
            return true;
        }

        $tableName = $modelInstance->getTable();

        if (! array_key_exists($tableName, $this->tables)) {
            return false;
        }

        return array_key_exists($propertyName, $this->tables[$tableName]->columns);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelPropertyHelper.php [46:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasDatabaseProperty(ClassReflection|string $classReflectionOrTable, string $propertyName): bool
    {
        if (! $this->migrationsLoaded()) {
            $this->loadMigrations();
        }

        if (is_string($classReflectionOrTable)) {
            if (! array_key_exists($classReflectionOrTable, $this->tables)) {
                return false;
            }

            return array_key_exists($propertyName, $this->tables[$classReflectionOrTable]->columns);
        }

        if (! $classReflectionOrTable->is(Model::class)) {
            return false;
        }

        if ($classReflectionOrTable->isAbstract()) {
            return false;
        }

        if (ReflectionHelper::hasPropertyTag($classReflectionOrTable, $propertyName)) {
            return false;
        }

        try {
            /** @var Model $modelInstance */
            $modelInstance = $classReflectionOrTable->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            return false;
        }

        if ($propertyName === $modelInstance->getKeyName()) {
            return true;
        }

        $tableName = $modelInstance->getTable();

        if (! array_key_exists($tableName, $this->tables)) {
            return false;
        }

        return array_key_exists($propertyName, $this->tables[$tableName]->columns);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



