vendor/larastan/larastan/src/Support/HigherOrderCollectionProxyHelper.php [63:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineReturnType(string $name, Type\Type $valueType, Type\Type $methodOrPropertyReturnType, string $collectionType): Type\Type
    {
        $integerType = new Type\IntegerType();

        return match ($name) {
            'average', 'avg' => new Type\FloatType(),
            'contains', 'every', 'some' => new Type\BooleanType(),
            'each', 'filter', 'reject', 'skipUntil', 'skipWhile', 'sortBy', 'sortByDesc', 'takeUntil', 'takeWhile', 'unique' => $this->getCollectionType($collectionType, $integerType, $valueType),
            'keyBy' => $this->getCollectionType($collectionType, new Type\BenevolentUnionType([$integerType, new Type\StringType()]), $valueType),
            'first' => Type\TypeCombinator::addNull($valueType),
            'flatMap' => $this->getCollectionType(SupportCollection::class, $integerType, new Type\MixedType()),
            'groupBy', 'partition' => $this->getCollectionType($collectionType, $integerType, $this->getCollectionType($collectionType, $integerType, $valueType)),
            'map' => $this->getCollectionType(
                SupportCollection::class,
                new BenevolentUnionType([new IntegerType(), new StringType()]),
                $methodOrPropertyReturnType,
            ),
            'max', 'min' => $methodOrPropertyReturnType,
            'sum' => $methodOrPropertyReturnType->accepts(new Type\IntegerType(), true)->yes() ? new Type\IntegerType() : new Type\ErrorType(),
            default => new Type\ErrorType(),
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/HigherOrderCollectionProxyHelper.php [63:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineReturnType(string $name, Type\Type $valueType, Type\Type $methodOrPropertyReturnType, string $collectionType): Type\Type
    {
        $integerType = new Type\IntegerType();

        return match ($name) {
            'average', 'avg' => new Type\FloatType(),
            'contains', 'every', 'some' => new Type\BooleanType(),
            'each', 'filter', 'reject', 'skipUntil', 'skipWhile', 'sortBy', 'sortByDesc', 'takeUntil', 'takeWhile', 'unique' => $this->getCollectionType($collectionType, $integerType, $valueType),
            'keyBy' => $this->getCollectionType($collectionType, new Type\BenevolentUnionType([$integerType, new Type\StringType()]), $valueType),
            'first' => Type\TypeCombinator::addNull($valueType),
            'flatMap' => $this->getCollectionType(SupportCollection::class, $integerType, new Type\MixedType()),
            'groupBy', 'partition' => $this->getCollectionType($collectionType, $integerType, $this->getCollectionType($collectionType, $integerType, $valueType)),
            'map' => $this->getCollectionType(
                SupportCollection::class,
                new BenevolentUnionType([new IntegerType(), new StringType()]),
                $methodOrPropertyReturnType,
            ),
            'max', 'min' => $methodOrPropertyReturnType,
            'sum' => $methodOrPropertyReturnType->accepts(new Type\IntegerType(), true)->yes() ? new Type\IntegerType() : new Type\ErrorType(),
            default => new Type\ErrorType(),
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



