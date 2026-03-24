vendor/larastan/larastan/src/ReturnTypes/DateExtension.php [56:75]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        $dateType = new ObjectType(get_class(now()));

        if (in_array($methodReflection->getName(), ['getTestNow', 'make'], true)) {
            return TypeCombinator::addNull($dateType);
        }

        if (in_array($methodReflection->getName(), ['createFromFormat', 'createSafe'], true)) {
            /** @phpstan-ignore-next-line ternary.alwaysTrue */
            return version_compare(LARAVEL_VERSION, '12.0.0', '>=')
                ? TypeCombinator::addNull($dateType)
                : TypeCombinator::union($dateType, new ConstantBooleanType(false));
        }

        return $dateType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/DateExtension.php [56:75]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        $dateType = new ObjectType(get_class(now()));

        if (in_array($methodReflection->getName(), ['getTestNow', 'make'], true)) {
            return TypeCombinator::addNull($dateType);
        }

        if (in_array($methodReflection->getName(), ['createFromFormat', 'createSafe'], true)) {
            /** @phpstan-ignore-next-line ternary.alwaysTrue */
            return version_compare(LARAVEL_VERSION, '12.0.0', '>=')
                ? TypeCombinator::addNull($dateType)
                : TypeCombinator::union($dateType, new ConstantBooleanType(false));
        }

        return $dateType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



