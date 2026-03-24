vendor/larastan/larastan/src/Properties/ModelPropertyHelper.php [92:156]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getDatabaseProperty(ClassReflection $classReflection, string $propertyName): ModelProperty
    {
        try {
            /** @var Model $modelInstance */
            $modelInstance = $classReflection->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            throw new ShouldNotHappenException();
        }

        $tableName = $modelInstance->getTable();

        if (
            $propertyName === $modelInstance->getKeyName()
            && (! array_key_exists($tableName, $this->tables) || ! array_key_exists($propertyName, $this->tables[$tableName]->columns))
        ) {
            return new ModelProperty(
                $classReflection,
                $this->stringResolver->resolve($modelInstance->getKeyType()),
                $this->stringResolver->resolve($modelInstance->getKeyType()),
            );
        }

        $column = $this->tables[$tableName]->columns[$propertyName];

        if ($this->hasDate($modelInstance, $propertyName)) {
            $readableType = $this->modelCastHelper->getDateType();
            $writableType = TypeCombinator::union($this->modelCastHelper->getDateType(), new StringType());
        } else {
            $cast = $this->modelCastHelper->getCastForProperty($classReflection, $propertyName);

            if ($cast !== null) {
                $readableType = $this->modelCastHelper->getReadableType(
                    $cast,
                    $this->stringResolver->resolve($column->readableType),
                );
                $writableType = $this->modelCastHelper->getWriteableType(
                    $cast,
                    $this->stringResolver->resolve($column->writeableType),
                );
            } elseif (in_array($column->readableType, ['enum', 'set'], true)) {
                if ($column->options === null || count($column->options) < 1) {
                    $readableType = $writableType = new StringType();
                } else {
                    $readableType = $writableType = TypeCombinator::union(...array_map(
                        static fn ($option) => new ConstantStringType($option),
                        $column->options,
                    ));
                }
            } else {
                $readableType = $this->stringResolver->resolve($column->readableType);
                $writableType = $this->stringResolver->resolve($column->writeableType);
            }
        }

        if ($column->nullable) {
            $readableType = TypeCombinator::addNull($readableType);
            $writableType = TypeCombinator::addNull($writableType);
        }

        return new ModelProperty(
            $classReflection,
            $readableType,
            $writableType,
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelPropertyHelper.php [92:156]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getDatabaseProperty(ClassReflection $classReflection, string $propertyName): ModelProperty
    {
        try {
            /** @var Model $modelInstance */
            $modelInstance = $classReflection->getNativeReflection()->newInstanceWithoutConstructor();
        } catch (ReflectionException) {
            throw new ShouldNotHappenException();
        }

        $tableName = $modelInstance->getTable();

        if (
            $propertyName === $modelInstance->getKeyName()
            && (! array_key_exists($tableName, $this->tables) || ! array_key_exists($propertyName, $this->tables[$tableName]->columns))
        ) {
            return new ModelProperty(
                $classReflection,
                $this->stringResolver->resolve($modelInstance->getKeyType()),
                $this->stringResolver->resolve($modelInstance->getKeyType()),
            );
        }

        $column = $this->tables[$tableName]->columns[$propertyName];

        if ($this->hasDate($modelInstance, $propertyName)) {
            $readableType = $this->modelCastHelper->getDateType();
            $writableType = TypeCombinator::union($this->modelCastHelper->getDateType(), new StringType());
        } else {
            $cast = $this->modelCastHelper->getCastForProperty($classReflection, $propertyName);

            if ($cast !== null) {
                $readableType = $this->modelCastHelper->getReadableType(
                    $cast,
                    $this->stringResolver->resolve($column->readableType),
                );
                $writableType = $this->modelCastHelper->getWriteableType(
                    $cast,
                    $this->stringResolver->resolve($column->writeableType),
                );
            } elseif (in_array($column->readableType, ['enum', 'set'], true)) {
                if ($column->options === null || count($column->options) < 1) {
                    $readableType = $writableType = new StringType();
                } else {
                    $readableType = $writableType = TypeCombinator::union(...array_map(
                        static fn ($option) => new ConstantStringType($option),
                        $column->options,
                    ));
                }
            } else {
                $readableType = $this->stringResolver->resolve($column->readableType);
                $writableType = $this->stringResolver->resolve($column->writeableType);
            }
        }

        if ($column->nullable) {
            $readableType = TypeCombinator::addNull($readableType);
            $writableType = TypeCombinator::addNull($writableType);
        }

        return new ModelProperty(
            $classReflection,
            $readableType,
            $writableType,
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



