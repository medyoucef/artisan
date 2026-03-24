vendor/larastan/larastan/src/Support/CollectionHelper.php [125:148]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function replaceCollectionsInType(Type $type): Type
    {
        if (! in_array(EloquentCollection::class, $type->getReferencedClasses(), true)) {
            return $type;
        }

        return TypeTraverser::map($type, function ($type, $traverse): Type {
            if ($type instanceof UnionType || $type instanceof IntersectionType) {
                return $traverse($type);
            }

            if (! (new ObjectType(EloquentCollection::class))->isSuperTypeOf($type)->yes()) {
                return $traverse($type);
            }

            $models = $type->getTemplateType(EloquentCollection::class, 'TModel')->getObjectClassNames();

            if (count($models) === 0) {
                return $type;
            }

            return TypeCombinator::union(...array_map([$this, 'determineCollectionClass'], $models));
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/CollectionHelper.php [125:148]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function replaceCollectionsInType(Type $type): Type
    {
        if (! in_array(EloquentCollection::class, $type->getReferencedClasses(), true)) {
            return $type;
        }

        return TypeTraverser::map($type, function ($type, $traverse): Type {
            if ($type instanceof UnionType || $type instanceof IntersectionType) {
                return $traverse($type);
            }

            if (! (new ObjectType(EloquentCollection::class))->isSuperTypeOf($type)->yes()) {
                return $traverse($type);
            }

            $models = $type->getTemplateType(EloquentCollection::class, 'TModel')->getObjectClassNames();

            if (count($models) === 0) {
                return $type;
            }

            return TypeCombinator::union(...array_map([$this, 'determineCollectionClass'], $models));
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



