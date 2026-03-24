vendor/larastan/larastan/src/ReturnTypes/AppMakeHelper.php [25:62]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolveTypeFromCall(FuncCall|MethodCall|StaticCall $call, Scope $scope): Type
    {
        $args = $call->getArgs();
        if (count($args) === 0) {
            return new ErrorType();
        }

        $argType = $scope->getType($args[0]->value);

        $constantStrings = $argType->getConstantStrings();

        if (count($constantStrings) > 0) {
            $types = [];
            foreach ($constantStrings as $constantString) {
                try {
                    /** @var object|null $resolved */
                    $resolved = $this->resolve($constantString->getValue());

                    if ($resolved === null) {
                        if ($constantString->isClassString()->yes()) {
                            $types[] = $constantString->getClassStringObjectType();
                            continue;
                        }

                        return new ErrorType();
                    }

                    $types[] = new ObjectType($resolved::class);
                } catch (Throwable) {
                    return new ErrorType();
                }
            }

            return TypeCombinator::union(...$types);
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/AppMakeHelper.php [25:62]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolveTypeFromCall(FuncCall|MethodCall|StaticCall $call, Scope $scope): Type
    {
        $args = $call->getArgs();
        if (count($args) === 0) {
            return new ErrorType();
        }

        $argType = $scope->getType($args[0]->value);

        $constantStrings = $argType->getConstantStrings();

        if (count($constantStrings) > 0) {
            $types = [];
            foreach ($constantStrings as $constantString) {
                try {
                    /** @var object|null $resolved */
                    $resolved = $this->resolve($constantString->getValue());

                    if ($resolved === null) {
                        if ($constantString->isClassString()->yes()) {
                            $types[] = $constantString->getClassStringObjectType();
                            continue;
                        }

                        return new ErrorType();
                    }

                    $types[] = new ObjectType($resolved::class);
                } catch (Throwable) {
                    return new ErrorType();
                }
            }

            return TypeCombinator::union(...$types);
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



