vendor/larastan/larastan/src/Support/CollectionHelper.php [102:123]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineCollectionClass(string $modelClassName): Type
    {
        $collectionClassName  = $this->determineCollectionClassName($modelClassName);
        $collectionReflection = $this->reflectionProvider->getClass($collectionClassName);

        if ($collectionReflection->isGeneric()) {
            $typeMap = $collectionReflection->getActiveTemplateTypeMap();

            // Specifies key and value
            if ($typeMap->count() === 2) {
                return new GenericObjectType($collectionClassName, [new IntegerType(), new ObjectType($modelClassName)]);
            }

            // Specifies only value
            if (($typeMap->count() === 1) && $typeMap->hasType('TModel')) {
                return new GenericObjectType($collectionClassName, [new ObjectType($modelClassName)]);
            }
        }

        // Not generic. So return the type as is
        return new ObjectType($collectionClassName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/CollectionHelper.php [102:123]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineCollectionClass(string $modelClassName): Type
    {
        $collectionClassName  = $this->determineCollectionClassName($modelClassName);
        $collectionReflection = $this->reflectionProvider->getClass($collectionClassName);

        if ($collectionReflection->isGeneric()) {
            $typeMap = $collectionReflection->getActiveTemplateTypeMap();

            // Specifies key and value
            if ($typeMap->count() === 2) {
                return new GenericObjectType($collectionClassName, [new IntegerType(), new ObjectType($modelClassName)]);
            }

            // Specifies only value
            if (($typeMap->count() === 1) && $typeMap->hasType('TModel')) {
                return new GenericObjectType($collectionClassName, [new ObjectType($modelClassName)]);
            }
        }

        // Not generic. So return the type as is
        return new ObjectType($collectionClassName);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



