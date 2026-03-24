vendor/larastan/larastan/src/Internal/ConsoleApplicationHelper.php [54:71]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getArgumentType(Scope $scope, InputArgument $argument): Type
    {
        if ($argument->isArray()) {
            $argType = new ArrayType(new IntegerType(), new StringType());

            if (! $argument->isRequired() && $argument->getDefault() !== []) {
                $argType = TypeCombinator::union($argType, $scope->getTypeFromValue($argument->getDefault()));
            }
        } else {
            $argType = new StringType();

            if (! $argument->isRequired()) {
                $argType = TypeCombinator::union($argType, $scope->getTypeFromValue($argument->getDefault()));
            }
        }

        return $argType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConsoleApplicationHelper.php [54:71]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getArgumentType(Scope $scope, InputArgument $argument): Type
    {
        if ($argument->isArray()) {
            $argType = new ArrayType(new IntegerType(), new StringType());

            if (! $argument->isRequired() && $argument->getDefault() !== []) {
                $argType = TypeCombinator::union($argType, $scope->getTypeFromValue($argument->getDefault()));
            }
        } else {
            $argType = new StringType();

            if (! $argument->isRequired()) {
                $argType = TypeCombinator::union($argType, $scope->getTypeFromValue($argument->getDefault()));
            }
        }

        return $argType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



