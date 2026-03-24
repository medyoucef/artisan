vendor/larastan/larastan/src/Properties/SchemaAggregator.php [412:436]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getModelReferenceType(string $modelClass): string|null
    {
        $classReflection = $this->reflectionProvider->getClass($modelClass);
        try {
            /** @var Model $modelInstance */
            $modelInstance = $classReflection->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            return null;
        }

        $tableName = $modelInstance->getTable();

        if (! array_key_exists($tableName, $this->tables)) {
            return null;
        }

        $table  = $this->tables[$tableName];
        $column = $modelInstance->getKeyName();

        if (! array_key_exists($column, $table->columns)) {
            return null;
        }

        return $table->columns[$column]->readableType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaAggregator.php [412:436]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getModelReferenceType(string $modelClass): string|null
    {
        $classReflection = $this->reflectionProvider->getClass($modelClass);
        try {
            /** @var Model $modelInstance */
            $modelInstance = $classReflection->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            return null;
        }

        $tableName = $modelInstance->getTable();

        if (! array_key_exists($tableName, $this->tables)) {
            return null;
        }

        $table  = $this->tables[$tableName];
        $column = $modelInstance->getKeyName();

        if (! array_key_exists($column, $table->columns)) {
            return null;
        }

        return $table->columns[$column]->readableType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



