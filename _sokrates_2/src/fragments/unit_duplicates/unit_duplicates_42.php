vendor/larastan/larastan/src/ReturnTypes/ModelOnlyDynamicMethodReturnTypeExtension.php [36:85]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $args = $methodCall->getArgs();

        if (count($args) < 1) {
            return new ErrorType();
        }

        $keys = [];

        foreach ($args as $arg) {
            $type = $scope->getType($arg->value);

            $stringsArray   = [];
            $stringsArray[] = $type->getConstantStrings();

            foreach ($type->getArrays() as $array) {
                $stringsArray[] = $array->getItemType()->getConstantStrings();
            }

            foreach ($stringsArray as $strings) {
                if (count($strings) > 0) {
                    array_push($keys, ...$strings);
                    continue 2;
                }
            }

            // encountered an argument that does not resolve to a constant string
            return new ArrayType(new StringType(), new MixedType());
        }

        $model = $scope->getType($methodCall->var);

        $array = array_reduce($keys, static function ($array, $key) use ($model, $scope) {
            $name = $key->getValue();

            $valueType = $model->hasInstanceProperty($name)->yes()
                ? $model->getInstanceProperty($name, $scope)->getReadableType()
                : new NullType();

            $array->setOffsetValueType($key, $valueType);

            return $array;
        }, ConstantArrayTypeBuilder::createEmpty());

        return $array->getArray();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/ModelOnlyDynamicMethodReturnTypeExtension.php [36:85]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $args = $methodCall->getArgs();

        if (count($args) < 1) {
            return new ErrorType();
        }

        $keys = [];

        foreach ($args as $arg) {
            $type = $scope->getType($arg->value);

            $stringsArray   = [];
            $stringsArray[] = $type->getConstantStrings();

            foreach ($type->getArrays() as $array) {
                $stringsArray[] = $array->getItemType()->getConstantStrings();
            }

            foreach ($stringsArray as $strings) {
                if (count($strings) > 0) {
                    array_push($keys, ...$strings);
                    continue 2;
                }
            }

            // encountered an argument that does not resolve to a constant string
            return new ArrayType(new StringType(), new MixedType());
        }

        $model = $scope->getType($methodCall->var);

        $array = array_reduce($keys, static function ($array, $key) use ($model, $scope) {
            $name = $key->getValue();

            $valueType = $model->hasInstanceProperty($name)->yes()
                ? $model->getInstanceProperty($name, $scope)->getReadableType()
                : new NullType();

            $array->setOffsetValueType($key, $valueType);

            return $array;
        }, ConstantArrayTypeBuilder::createEmpty());

        return $array->getArray();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



