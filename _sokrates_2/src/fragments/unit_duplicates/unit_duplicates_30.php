vendor/larastan/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [53:111]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function accepts(Type $type, bool $strictTypes): AcceptsResult
    {
        if ($type instanceof CompoundType) {
            return $type->isAcceptedBy($this, $strictTypes);
        }

        if (count($type->getConstantStrings()) === 1) {
            $givenString = $type->getConstantStrings()[0]->getValue();
            $genericType = $this->getGenericType();

            if ($genericType instanceof MixedType) {
                return AcceptsResult::createYes();
            }

            if (count($genericType->getObjectClassNames()) < 1) {
                return AcceptsResult::createYes();
            }

            if (str_contains($givenString, ' as ')) {
                $givenString = explode(' as ', $givenString)[0];
            }

            if (str_contains($givenString, '.')) {
                $parts = explode('.', $givenString);

                if (count($parts) !== 2) {
                    return AcceptsResult::createYes();
                }

                [$tableName, $propertyName] = $parts;

                if (! $this->modelPropertyHelper->hasDatabaseProperty($tableName, $propertyName)) {
                    return AcceptsResult::createNo([sprintf('Database table "%s" does not have column "%s"', $tableName, $propertyName)]);
                }

                return AcceptsResult::createYes();
            }

            $reasons = [];

            if (! $genericType->hasInstanceProperty($givenString)->yes()) {
                $reasons[] = sprintf('The given string should be a property of %s, %s given.', $this->type->describe(VerbosityLevel::value()), $givenString);
            }

            return new AcceptsResult($genericType->hasInstanceProperty($givenString), $reasons);
        }

        if ($type instanceof self) {
            return new AcceptsResult($this->getGenericType()->accepts($type->getGenericType(), $strictTypes)->result, [sprintf('The given string should be a property of %s', $this->type->describe(VerbosityLevel::value()))]);
        }

        if ($type->isString()->yes()) {
            // It is an arbitrary string, so we cannot check if it is a property of the model.
            // We return yes to not cause issues on levels 7+
            return AcceptsResult::createYes();
        }

        return AcceptsResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [53:111]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function accepts(Type $type, bool $strictTypes): AcceptsResult
    {
        if ($type instanceof CompoundType) {
            return $type->isAcceptedBy($this, $strictTypes);
        }

        if (count($type->getConstantStrings()) === 1) {
            $givenString = $type->getConstantStrings()[0]->getValue();
            $genericType = $this->getGenericType();

            if ($genericType instanceof MixedType) {
                return AcceptsResult::createYes();
            }

            if (count($genericType->getObjectClassNames()) < 1) {
                return AcceptsResult::createYes();
            }

            if (str_contains($givenString, ' as ')) {
                $givenString = explode(' as ', $givenString)[0];
            }

            if (str_contains($givenString, '.')) {
                $parts = explode('.', $givenString);

                if (count($parts) !== 2) {
                    return AcceptsResult::createYes();
                }

                [$tableName, $propertyName] = $parts;

                if (! $this->modelPropertyHelper->hasDatabaseProperty($tableName, $propertyName)) {
                    return AcceptsResult::createNo([sprintf('Database table "%s" does not have column "%s"', $tableName, $propertyName)]);
                }

                return AcceptsResult::createYes();
            }

            $reasons = [];

            if (! $genericType->hasInstanceProperty($givenString)->yes()) {
                $reasons[] = sprintf('The given string should be a property of %s, %s given.', $this->type->describe(VerbosityLevel::value()), $givenString);
            }

            return new AcceptsResult($genericType->hasInstanceProperty($givenString), $reasons);
        }

        if ($type instanceof self) {
            return new AcceptsResult($this->getGenericType()->accepts($type->getGenericType(), $strictTypes)->result, [sprintf('The given string should be a property of %s', $this->type->describe(VerbosityLevel::value()))]);
        }

        if ($type->isString()->yes()) {
            // It is an arbitrary string, so we cannot check if it is a property of the model.
            // We return yes to not cause issues on levels 7+
            return AcceptsResult::createYes();
        }

        return AcceptsResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



