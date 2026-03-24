vendor/larastan/larastan/src/Properties/ModelRelationsExtension.php [69:94]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getProperty(ClassReflection $classReflection, string $propertyName): PropertyReflection
    {
        if (str_ends_with($propertyName, '_count')) {
            return new ModelProperty($classReflection, IntegerRangeType::createAllGreaterThanOrEqualTo(0), new NeverType(), false);
        }

        $returnType = $classReflection->getMethod($propertyName, new OutOfClassScope())
            ->getVariants()[0]
            ->getReturnType();

        $relationType = TypeTraverser::map($returnType, static function (Type $type, callable $traverse): Type {
            if ($type instanceof UnionType || $type instanceof IntersectionType) {
                return $traverse($type);
            }

            if (! (new ObjectType(Relation::class))->isSuperTypeOf($type)->yes()) {
                return $type;
            }

            return $type->getTemplateType(Relation::class, 'TResult');
        });

        $relationType = $this->collectionHelper->replaceCollectionsInType($relationType);

        return new ModelProperty($classReflection, $relationType, new NeverType(), false);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelRelationsExtension.php [69:94]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getProperty(ClassReflection $classReflection, string $propertyName): PropertyReflection
    {
        if (str_ends_with($propertyName, '_count')) {
            return new ModelProperty($classReflection, IntegerRangeType::createAllGreaterThanOrEqualTo(0), new NeverType(), false);
        }

        $returnType = $classReflection->getMethod($propertyName, new OutOfClassScope())
            ->getVariants()[0]
            ->getReturnType();

        $relationType = TypeTraverser::map($returnType, static function (Type $type, callable $traverse): Type {
            if ($type instanceof UnionType || $type instanceof IntersectionType) {
                return $traverse($type);
            }

            if (! (new ObjectType(Relation::class))->isSuperTypeOf($type)->yes()) {
                return $type;
            }

            return $type->getTemplateType(Relation::class, 'TResult');
        });

        $relationType = $this->collectionHelper->replaceCollectionsInType($relationType);

        return new ModelProperty($classReflection, $relationType, new NeverType(), false);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



