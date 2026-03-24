vendor/larastan/larastan/src/Internal/ConsoleApplicationHelper.php [95:116]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getOptionType(Scope $scope, InputOption $option): Type
    {
        if (! $option->acceptValue()) {
            if ($option->isNegatable()) {
                return new UnionType([new BooleanType(), new NullType()]);
            }

            return new BooleanType();
        }

        $optType = TypeCombinator::union(new StringType(), new NullType());

        if ($option->isValueRequired() && ($option->isArray() || $option->getDefault() !== null)) {
            $optType = TypeCombinator::removeNull($optType);
        }

        if ($option->isArray()) {
            $optType = new ArrayType(new IntegerType(), $optType);
        }

        return TypeCombinator::union($optType, $scope->getTypeFromValue($option->getDefault()));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConsoleApplicationHelper.php [95:116]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getOptionType(Scope $scope, InputOption $option): Type
    {
        if (! $option->acceptValue()) {
            if ($option->isNegatable()) {
                return new UnionType([new BooleanType(), new NullType()]);
            }

            return new BooleanType();
        }

        $optType = TypeCombinator::union(new StringType(), new NullType());

        if ($option->isValueRequired() && ($option->isArray() || $option->getDefault() !== null)) {
            $optType = TypeCombinator::removeNull($optType);
        }

        if ($option->isArray()) {
            $optType = new ArrayType(new IntegerType(), $optType);
        }

        return TypeCombinator::union($optType, $scope->getTypeFromValue($option->getDefault()));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



