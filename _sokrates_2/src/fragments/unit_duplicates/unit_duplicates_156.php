vendor/larastan/larastan/src/ReturnTypes/Helpers/LiteralExtension.php [91:109]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getTypeFromConstantArray(ConstantArrayType $argType): Type
    {
        $properties = [];

        $keyTypes   = $argType->getKeyTypes();
        $valueTypes = $argType->getValueTypes();

        for ($i = 0, $count = count($keyTypes); $i < $count; $i++) {
            $keyType   = $keyTypes[$i];
            $valueType = $valueTypes[$i];

            $properties[(string) $keyType->getValue()] = $valueType;
        }

        return TypeCombinator::intersect(
            new ObjectShapeType($properties, []),
            new ObjectType(stdClass::class),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/LiteralExtension.php [91:109]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getTypeFromConstantArray(ConstantArrayType $argType): Type
    {
        $properties = [];

        $keyTypes   = $argType->getKeyTypes();
        $valueTypes = $argType->getValueTypes();

        for ($i = 0, $count = count($keyTypes); $i < $count; $i++) {
            $keyType   = $keyTypes[$i];
            $valueType = $valueTypes[$i];

            $properties[(string) $keyType->getValue()] = $valueType;
        }

        return TypeCombinator::intersect(
            new ObjectShapeType($properties, []),
            new ObjectType(stdClass::class),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



