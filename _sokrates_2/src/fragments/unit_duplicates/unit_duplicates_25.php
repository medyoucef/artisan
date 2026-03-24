vendor/larastan/larastan/src/ReturnTypes/Helpers/LiteralExtension.php [29:89]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        $args = $functionCall->getArgs();

        // Handle the case of a single argument, returning its type directly
        if (count($args) === 1) {
            $argType = $scope->getType($args[0]->value);

            $nameOfParam = $args[0]->getAttributes()['originalArg']->name->name ?? null;

            if ($nameOfParam === null) {
                if ($args[0]->unpack === true) {
                    if ($argType instanceof UnionType) {
                        $subTypes = [];
                        foreach ($argType->getTypes() as $innerType) {
                            $constantArrays = $innerType->getConstantArrays();
                            if ($constantArrays) {
                                $subTypes[] = $this->getTypeFromConstantArray($constantArrays[0]);
                            } else {
                                $subTypes[] = $innerType;
                            }
                        }

                        return TypeCombinator::union(...$subTypes);
                    }

                    if ($argType->getConstantArrays()) {
                        $constantArrays = $argType->getConstantArrays();

                        return $this->getTypeFromConstantArray($constantArrays[0]);
                    }
                }

                if ($argType->isObject()->yes() && in_array(stdClass::class, $argType->getReferencedClasses(), true)) {
                    return TypeCombinator::intersect(new ObjectShapeType([], []), $argType);
                }

                return $argType;
            }
        }

        $properties = [];
        foreach ($args as $index => $argExpression) {
            $nameOfParam = $argExpression->getAttributes()['originalArg']->name->name ?? null;

            if ($nameOfParam === null) {
                // Handle unnamed arguments
                $nameOfParam = $index;
            }

            $properties[(string) $nameOfParam] = $scope->getType($argExpression->value);
        }

        return TypeCombinator::intersect(
            new ObjectShapeType($properties, []),
            new ObjectType(stdClass::class),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/Helpers/LiteralExtension.php [29:89]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope,
    ): Type {
        $args = $functionCall->getArgs();

        // Handle the case of a single argument, returning its type directly
        if (count($args) === 1) {
            $argType = $scope->getType($args[0]->value);

            $nameOfParam = $args[0]->getAttributes()['originalArg']->name->name ?? null;

            if ($nameOfParam === null) {
                if ($args[0]->unpack === true) {
                    if ($argType instanceof UnionType) {
                        $subTypes = [];
                        foreach ($argType->getTypes() as $innerType) {
                            $constantArrays = $innerType->getConstantArrays();
                            if ($constantArrays) {
                                $subTypes[] = $this->getTypeFromConstantArray($constantArrays[0]);
                            } else {
                                $subTypes[] = $innerType;
                            }
                        }

                        return TypeCombinator::union(...$subTypes);
                    }

                    if ($argType->getConstantArrays()) {
                        $constantArrays = $argType->getConstantArrays();

                        return $this->getTypeFromConstantArray($constantArrays[0]);
                    }
                }

                if ($argType->isObject()->yes() && in_array(stdClass::class, $argType->getReferencedClasses(), true)) {
                    return TypeCombinator::intersect(new ObjectShapeType([], []), $argType);
                }

                return $argType;
            }
        }

        $properties = [];
        foreach ($args as $index => $argExpression) {
            $nameOfParam = $argExpression->getAttributes()['originalArg']->name->name ?? null;

            if ($nameOfParam === null) {
                // Handle unnamed arguments
                $nameOfParam = $index;
            }

            $properties[(string) $nameOfParam] = $scope->getType($argExpression->value);
        }

        return TypeCombinator::intersect(
            new ObjectShapeType($properties, []),
            new ObjectType(stdClass::class),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



