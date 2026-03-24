vendor/larastan/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [147:176]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function inferTemplateTypes(Type $receivedType): TemplateTypeMap
    {
        if ($receivedType instanceof UnionType || $receivedType instanceof IntersectionType) { // @phpstan-ignore-line
            return $receivedType->inferTemplateTypesOn($this);
        }

        $constantStrings = $receivedType->getConstantStrings();

        if (count($constantStrings) === 1) {
            $typeToInfer = new ObjectType($constantStrings[0]->getValue());
        } elseif ($receivedType instanceof self) {
            $typeToInfer = $receivedType->type;
        } elseif ($receivedType->isClassString()->yes()) {
            $typeToInfer = $this->getGenericType();

            if ($typeToInfer instanceof TemplateType) {
                $typeToInfer = $typeToInfer->getBound();
            }

            $typeToInfer = TypeCombinator::intersect($typeToInfer, new ObjectWithoutClassType());
        } else {
            return TemplateTypeMap::createEmpty();
        }

        if (! $this->getGenericType()->isSuperTypeOf($typeToInfer)->no()) {
            return $this->getGenericType()->inferTemplateTypes($typeToInfer);
        }

        return TemplateTypeMap::createEmpty();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [147:176]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function inferTemplateTypes(Type $receivedType): TemplateTypeMap
    {
        if ($receivedType instanceof UnionType || $receivedType instanceof IntersectionType) { // @phpstan-ignore-line
            return $receivedType->inferTemplateTypesOn($this);
        }

        $constantStrings = $receivedType->getConstantStrings();

        if (count($constantStrings) === 1) {
            $typeToInfer = new ObjectType($constantStrings[0]->getValue());
        } elseif ($receivedType instanceof self) {
            $typeToInfer = $receivedType->type;
        } elseif ($receivedType->isClassString()->yes()) {
            $typeToInfer = $this->getGenericType();

            if ($typeToInfer instanceof TemplateType) {
                $typeToInfer = $typeToInfer->getBound();
            }

            $typeToInfer = TypeCombinator::intersect($typeToInfer, new ObjectWithoutClassType());
        } else {
            return TemplateTypeMap::createEmpty();
        }

        if (! $this->getGenericType()->isSuperTypeOf($typeToInfer)->no()) {
            return $this->getGenericType()->inferTemplateTypes($typeToInfer);
        }

        return TemplateTypeMap::createEmpty();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



