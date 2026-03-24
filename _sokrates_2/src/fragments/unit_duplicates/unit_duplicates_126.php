vendor/larastan/larastan/src/Types/ViewStringType.php [29:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function accepts(Type $type, bool $strictTypes): AcceptsResult
    {
        if ($type instanceof CompoundType) {
            return $type->isAcceptedBy($this, $strictTypes);
        }

        $constantStrings = $type->getConstantStrings();

        if (count($constantStrings) === 1) {
            /** @var Factory $view */
            $view = view();

            return AcceptsResult::createFromBoolean($view->exists($constantStrings[0]->getValue()));
        }

        if ($type instanceof self) {
            return AcceptsResult::createYes();
        }

        if ($type->isString()->yes()) {
            return AcceptsResult::createMaybe();
        }

        return AcceptsResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ViewStringType.php [29:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function accepts(Type $type, bool $strictTypes): AcceptsResult
    {
        if ($type instanceof CompoundType) {
            return $type->isAcceptedBy($this, $strictTypes);
        }

        $constantStrings = $type->getConstantStrings();

        if (count($constantStrings) === 1) {
            /** @var Factory $view */
            $view = view();

            return AcceptsResult::createFromBoolean($view->exists($constantStrings[0]->getValue()));
        }

        if ($type instanceof self) {
            return AcceptsResult::createYes();
        }

        if ($type->isString()->yes()) {
            return AcceptsResult::createMaybe();
        }

        return AcceptsResult::createNo();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



