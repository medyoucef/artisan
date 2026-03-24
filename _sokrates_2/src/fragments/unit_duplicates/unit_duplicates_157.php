vendor/larastan/larastan/src/ReturnTypes/RequestFileExtension.php [35:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $uploadedFileType      = new ObjectType(UploadedFile::class);
        $uploadedFileArrayType = new ArrayType(new IntegerType(), $uploadedFileType);

        if (count($methodCall->getArgs()) === 0) {
            return new ArrayType(new IntegerType(), $uploadedFileType);
        }

        if (count($methodCall->getArgs()) === 1) {
            return new BenevolentUnionType([$uploadedFileArrayType, $uploadedFileType, new NullType()]);
        }

        return new BenevolentUnionType([$uploadedFileArrayType, $uploadedFileType, $scope->getType($methodCall->getArgs()[1]->value)]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/RequestFileExtension.php [35:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope,
    ): Type {
        $uploadedFileType      = new ObjectType(UploadedFile::class);
        $uploadedFileArrayType = new ArrayType(new IntegerType(), $uploadedFileType);

        if (count($methodCall->getArgs()) === 0) {
            return new ArrayType(new IntegerType(), $uploadedFileType);
        }

        if (count($methodCall->getArgs()) === 1) {
            return new BenevolentUnionType([$uploadedFileArrayType, $uploadedFileType, new NullType()]);
        }

        return new BenevolentUnionType([$uploadedFileArrayType, $uploadedFileType, $scope->getType($methodCall->getArgs()[1]->value)]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



