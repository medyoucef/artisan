vendor/larastan/larastan/src/ReturnTypes/ModelFactoryDynamicStaticMethodReturnTypeExtension.php [50:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        $class = $methodCall->class;

        $calledOnType = $class instanceof Name
           ? new ObjectType($scope->resolveName($class))
           : $scope->getType($class);

        if (count($methodCall->getArgs()) === 0) {
            $isSingleModel = TrinaryLogic::createYes();
        } else {
            $argType = $scope->getType($methodCall->getArgs()[0]->value);

            $numericTypes = [
                new IntegerType(),
                new FloatType(),
                new IntersectionType([
                    new StringType(),
                    new AccessoryNumericStringType(),
                ]),
            ];

            $isSingleModel = (new UnionType($numericTypes))->isSuperTypeOf($argType)->negate()->result;
        }

        return TypeCombinator::union(...array_map(
            function (ClassReflection $classReflection) use ($scope, $isSingleModel) {
                $factoryReflection = $this->getFactoryReflection($classReflection, $scope);

                if ($factoryReflection === null) {
                    return new ErrorType();
                }

                return new ModelFactoryType($factoryReflection->getName(), null, $factoryReflection, $isSingleModel);
            },
            $calledOnType->getObjectClassReflections(),
        ));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ModelFactoryDynamicStaticMethodReturnTypeExtension.php [50:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope,
    ): Type {
        $class = $methodCall->class;

        $calledOnType = $class instanceof Name
           ? new ObjectType($scope->resolveName($class))
           : $scope->getType($class);

        if (count($methodCall->getArgs()) === 0) {
            $isSingleModel = TrinaryLogic::createYes();
        } else {
            $argType = $scope->getType($methodCall->getArgs()[0]->value);

            $numericTypes = [
                new IntegerType(),
                new FloatType(),
                new IntersectionType([
                    new StringType(),
                    new AccessoryNumericStringType(),
                ]),
            ];

            $isSingleModel = (new UnionType($numericTypes))->isSuperTypeOf($argType)->negate()->result;
        }

        return TypeCombinator::union(...array_map(
            function (ClassReflection $classReflection) use ($scope, $isSingleModel) {
                $factoryReflection = $this->getFactoryReflection($classReflection, $scope);

                if ($factoryReflection === null) {
                    return new ErrorType();
                }

                return new ModelFactoryType($factoryReflection->getName(), null, $factoryReflection, $isSingleModel);
            },
            $calledOnType->getObjectClassReflections(),
        ));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



