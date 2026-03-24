vendor/larastan/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [113:134]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isSuperTypeOf(Type $type): IsSuperTypeOfResult
    {
        $constantStrings = $type->getConstantStrings();

        if (count($constantStrings) === 1) {
            if (! $this->getGenericType()->hasInstanceProperty($constantStrings[0]->getValue())->yes()) {
                return IsSuperTypeOfResult::createNo();
            }

            return IsSuperTypeOfResult::createYes();
        }

        if ($type instanceof self) {
            return $this->getGenericType()->isSuperTypeOf($type->getGenericType());
        }

        if ($type instanceof CompoundType) {
            return $type->isSubTypeOf($this);
        }

        return IsSuperTypeOfResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [113:134]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isSuperTypeOf(Type $type): IsSuperTypeOfResult
    {
        $constantStrings = $type->getConstantStrings();

        if (count($constantStrings) === 1) {
            if (! $this->getGenericType()->hasInstanceProperty($constantStrings[0]->getValue())->yes()) {
                return IsSuperTypeOfResult::createNo();
            }

            return IsSuperTypeOfResult::createYes();
        }

        if ($type instanceof self) {
            return $this->getGenericType()->isSuperTypeOf($type->getGenericType());
        }

        if ($type instanceof CompoundType) {
            return $type->isSubTypeOf($this);
        }

        return IsSuperTypeOfResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



