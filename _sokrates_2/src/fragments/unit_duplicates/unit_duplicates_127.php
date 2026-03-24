vendor/larastan/larastan/src/Types/ViewStringType.php [55:79]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isSuperTypeOf(Type $type): IsSuperTypeOfResult
    {
        $constantStrings = $type->getConstantStrings();

        if (count($constantStrings) === 1) {
            /** @var Factory $view */
            $view = view();

            return IsSuperTypeOfResult::createFromBoolean($view->exists($constantStrings[0]->getValue()));
        }

        if ($type instanceof self) {
            return IsSuperTypeOfResult::createYes();
        }

        if ($type->isString()->yes()) {
            return IsSuperTypeOfResult::createMaybe();
        }

        if ($type instanceof CompoundType) {
            return $type->isSubTypeOf($this);
        }

        return IsSuperTypeOfResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ViewStringType.php [55:79]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isSuperTypeOf(Type $type): IsSuperTypeOfResult
    {
        $constantStrings = $type->getConstantStrings();

        if (count($constantStrings) === 1) {
            /** @var Factory $view */
            $view = view();

            return IsSuperTypeOfResult::createFromBoolean($view->exists($constantStrings[0]->getValue()));
        }

        if ($type instanceof self) {
            return IsSuperTypeOfResult::createYes();
        }

        if ($type->isString()->yes()) {
            return IsSuperTypeOfResult::createMaybe();
        }

        if ($type instanceof CompoundType) {
            return $type->isSubTypeOf($this);
        }

        return IsSuperTypeOfResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



